
<?php


$Name = $_POST['name'];
$Password = $_POST['password'];
$conn =mysqli_connect('localhost','root',"",'ecomerce');

$result = mysqli_query($conn," SELECT * FROM `tbluser` WHERE UserName = '$Name' AND Password = '$Password' ");
session_start();

if(mysqli_num_rows($result)){
    $_SESSION['user'] = $Name;
    echo"
    <script>
    alert('Login sucessfully');
    window.location.href= '../index.php';
    
    </script>
    ";
}
else{
    echo"
    <script>
    alert('Incorrect Username/password');
    window.location.href= 'login.php';
    
    </script>
    ";

}


?>