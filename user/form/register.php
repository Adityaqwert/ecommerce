<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Bootsrap CDN -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6  m-auto mt-5 bg-white shadow font-monospace border border-info ">
            <p class="text-warning text-center fs-3 fw-bold my-3">User Register</p>
            <form action="insert.php" method="POST">
                <div class="mb-3">
                    <label for="">UserName</label>
                    <input type="text" name="name" placeholder="Enter User Name:" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">UserEmail</label>
                    <input type="text" name="email" placeholder="Enter User Email:" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">UserNumber</label>
                    <input type="text" name="number" placeholder="Enter User mobile number:" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">UserPassword</label>
                    <input type="password" name="password"  placeholder="Enter User password:" class="form-control">
                </div>
                <div class="mb-3">
                <button name="submit" class="w-100 bg-danger fs-4 text-white">REGISTER</button>
</div>
<div class="mb-3">
                <button class="w-100 bg-warning fs-4 text-white"><a href="login.php" class="text-white text-decoration-none">Login</a></button>
</div>
            </form>
        </div>
    </div>
</div>
    
</body>
</html>