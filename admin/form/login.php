<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Bootsrap CDN -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body class="bg-secondary">



<div class="container">
  <form action="login1.php" method="POST">
<div class="row">
<div class="col-md-6 shadow bg-white font-monospace  p-3 m-auto border border-primary">
      <div class="mb-3">
  <p class="text-center fw-bold fs-3 text-warning">Login:</p>
</div>

<div class="mb-3">
  <label  class="form-label">Name</label>
  <input type="text" name="username" class="form-control" placeholder="Enter user name">
</div>


<div class="mb-3">
  <label  class="form-label">Password</label>
  <input type="text" name="userpassword" class="form-control" placeholder="Enter password">
</div>



   <button name="submit" type="submit" class="bg-danger fs-4 fw-bold my-3 form-control text-white">Login</button>
  </div>
</div>
</form>
</div>

    
</body>
</html>