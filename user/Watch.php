<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <?php

    include 'header.php';
    ?>
    </head>
    <h1 class='text-warning font-monospace text-center my-3'>Smart Watch</h1>"
<body>
    <div class="container-fluid">
        <div class="colmd-12">

       
        <div class="row">
           
            
      

            <?php
            
include 'config.php';
$Record = mysqli_query($conn, "SELECT * FROM tblproduct");
 while($row=mysqli_fetch_array($Record)){

    $check_page = $row['PCategory'];
    if( $check_page ==='watch'){

    echo "
    <div class='col-md-6 col-lg-4 m-auto mb-3 '>
    <form action = 'Insertcart.php' method = 'POST'>
 

    <div class='card m-auto' style='width: 18rem;'>
  <img src='../admin/product/$row[PImage]' class='card-img-top' alt='...'>
  <div class='card-body text-center'>
    <h5 class='card-title text-dark fs-4 fw-bold'>$row[PName]</h5>
    <h5 class='card-text text-danger fs-4 fw-bold'>RS: ₹ $row[PPrice]</h5>
    <input type = 'hidden' name = 'PName' value = '$row[PName]' >
    <input type = 'hidden' name = 'PPrice' value = '$row[PPrice]' >
    <input type='number' name = 'PQuantity' value = 'min= '1' max = '20'' placeholder = 'Quantity'><br><br>
    <input type='Submit' name = 'addCart' class = 'btn btn-danger text-white w-100' value= 'Add To Cart'>
  </div>
</div>
</form>
</div>
";
}
}
?>
  </div>

</div>

</div>

    
</body>
</html>