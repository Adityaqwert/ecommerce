<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- Bootsrap CDN -->

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- Fontawesome cdn -->

    <script src="https://kit.fontawesome.com/507a3314bb.js" crossorigin="anonymous"></script>


</head>
<body>
  <?php
  session_start();
  $count = 0;
  if(isset($_SESSION['cart'])){
    $count = count($_SESSION['cart']);
   }
  ?>
  <nav class="navbar navbar-light bg-light">
  <div class="container-fluid font-monosapce">
    <a class="navbar-brand pb-2"><img src="logo.png" alt=""></a><h4>
     <div class="d-flex">
    <a href="index.php"class=" text-warning text-decoration-none pe-2"><i class="fa-solid fa-house"></i> Home |</a>
    <a href="viewCart.php"class=" text-warning text-decoration-none pe-2"><i class="fa-solid fa-cart-shopping"></i> cart (<?php echo $count ?>) |</a>

    <span class="text-warning pe-2">
    <i class="fa-solid fa-user"></i>Hello,
    <?php
    if(isset($_SESSION['user'])){
    echo $_SESSION['user'];
    echo "
    | <a href='form/logout.php'class='text-warning text-decoration-none pe-2'><i class='fa-solid fa-arrow-right-to-bracket'></i>Logout</a>
    ";
  }
  else{
    echo "
    | <a href='form/register.php'class='text-warning text-decoration-none pe-2'><i class='fa-solid fa-arrow-right-to-bracket'></i>Login</a>
    ";


  }
   ?>
 
    <a href="../admin/form/login.php"class=" text-warning text-decoration-none pe-2">| Admin</a>
</h4>
</span>
    
    
</nav>
</div>



<div class="bg-danger font-monospace">
    <ul class="list-unstyled d-flex justify-content-center">
    <li><a href="Watch.php" class="text-decoration-none text-white fw-blod fs-8 px-5">Watch</a></li>
    <li><a href="Mobile.php" class="text-decoration-none text-white fw-blod fs-8 px-5">Mobile</a></li>
    <li><a href="Bag.php" class="text-decoration-none text-white fw-blod fs-8 px-5">Bag</a></li>

    </ul>



</div>
</body>
</html>