<?php

$conn =mysqli_connect('localhost','root',"",'ecomerce');

$name = $_POST['username'];
$password = $_POST['userpassword'];

$result = mysqli_query($conn,"SELECT * FROM `admin` WHERE username = '$name' AND userpassword = '$password' ");

if(mysqli_num_rows($result)){

    echo"
    <script>
    alert('login sucessfully');
    window.location.href='../mystore.php'
    </script>;

    ";

}
else{

    echo"
    <script>
    alert('Invalid username/password');
    window.location.href='login.php';
    </script>

    ";
}


?>