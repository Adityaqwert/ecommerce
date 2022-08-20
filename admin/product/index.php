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

<div class="container">
  <form action="insert.php" method="POST" enctype="multipart/form-data">
<div class="row">
<div class="col-md-6 m-auto border border-primary">
      <div class="mb-3">
  <p class="text-center fw-bold fs-3 text-warning">product detail:</p>
</div>

<div class="mb-3">
  <label  class="form-label">Product Name</label>
  <input type="text" name="Pname" class="form-control" placeholder="Enter product name">
</div>


<div class="mb-3">
  <label  class="form-label">Product price</label>
  <input type="text" name="Pprice" class="form-control" placeholder="Enter product price">
</div>


<div class="mb-3">
  <label  class="form-label"> Add Product image</label>
  <input type="file" name="img" class="form-control" >
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
   <button name="submit" type="submit" class="bg-danger fs-4 fw-bold my-3 form-control text-white">Upload</button>
   
  </div>
</div>
</form>
</div>




                   
                  <!-- fetch data -->


                 <div class="conatiner">
                  <div class="row">
                    <div class="col-md-8  m-auto">

                   

                  <table class="table table-hover border my-5">
                    <thead class = "bg-dark text-white">
                  <th>Id</th>
                  <th>Name</th>
                  <th>Price</th>
                  <th>Image</th>
                  <th>Category</th>
                  <th>Update</th>
                  <th>Delete</th>
</thead>
<tbody>
  

<?php
include 'config.php';
$Record = mysqli_query($conn, "SELECT * FROM `tblproduct`");

     while($row = mysqli_fetch_array($Record))

     echo"

     <tr>
  <td>$row[Id]</td>
  <td>$row[PName]</td>
  <td>$row[PPrice]</td>
  <td><img src='$row[PImage]' height='90px' width='200px'></td>
  <td>$row[PCategory]</td>
  <td><a href = 'delete.php? ID= $row[Id]'class = 'btn btn-danger'>Delete</a></td>
  <td><a href = 'update.php? ID= $row[Id]'class = 'btn btn-warning'>Update</a></td>


</tr>
      ";




?>

</tbody>

</table>
</div>
  </div>
 </div> 


                   
                   
                   
    
</body>
</html>