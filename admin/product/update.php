<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product-page</title>

    <!-- Bootsrap CDN -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body>
  <?php
  $id = $_GET['ID'];
  include 'config.php';
  $Record = mysqli_query($conn, " SELECT * FROM `tblproduct` WHERE Id = '$id' ");
  $data = mysqli_fetch_array($Record);
  
  
  ?>

<div class="container">
  <form action="update.php" method="POST" enctype="multipart/form-data">
<div class="row">
<div class="col-md-6 m-auto border border-primary">
      <div class="mb-3">
  <p class="text-center fw-bold fs-3 text-warning">Product Update</p>
</div>

<div class="mb-3">
  <label  class="form-label">Product Name</label>
  <input type="text" value=" <?php echo $data['PName']?>" name="Pname" class="form-control" placeholder="Enter product name">
</div>


<div class="mb-3">
  <label  class="form-label">Product price</label>
  <input type="text" value=" <?php echo $data['PPrice']?>" name="Pprice" class="form-control" placeholder="Enter product price">
</div>


<div class="mb-3">
  <label  class="form-label"> Add Product image</label>
  <input type="file" name="img" class="form-control" ><br>
  <img src="<?php echo $data['PImage']?>" alt="" style="height: 100px;">
</div>

<div class="mb-3">
  <label  class="form-label"> Select Page Categories</label>
  <select class="form-select" name="Pages">
  <option value="home">Home</option>
  <option value="watch">Watch</option>
  <option value="Mobile">Mobile</option>
  <option value="Bag">Bag</option>
</select>
  
</div>
<input type="hidden" name="id" value="<?php echo $data['Id']?>">
   <button name="update" type="submit" class="bg-danger fs-4 fw-bold my-3 form-control text-white">Udate</button>
   </form>
   
  </div>
</div>
</div>
                    <!-- update code -->
                    <?php
                    if(isset($_POST['update'])){
                      $id = $_POST['id'];
                      $product_Id = $_POST['Id'];
                      echo $product_Id;
                      $product_name = $_POST['Pname'];
                      echo $product_name;
                      $product_price = $_POST['Pprice'];
                      //print_r($_POST["Pimage"]);
                      $product_image = $_FILES["img"]['name'];
                      $tmp_name = $_FILES["img"]['tmp_name'];
                      move_uploaded_file($tmp_name,"Upload/".$product_image);
                      $imppath="Upload/".$product_image;
              
              
                      $product_category = $_POST['Pages'];

                      include 'config.php';
                      mysqli_query($conn, "UPDATE `tblproduct` SET `PName`='$product_name',`PPrice`='$product_price',
                      `PImage`='$imppath',`PCategory`='$product_category' WHERE Id = $id ");
                      header("location:index.php");
                      
                    }
                    ?>








</body>
</html>