<?php
$Con = mysqli_connect('localhost','root',"",'ecomerce');

if(isset($_POST['submit'])){
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Number = $_POST['number'];
    $Password = $_POST['password'];


    mysqli_query($Con, "INSERT INTO `tbluser`(`UserName`, `Email`, `Number`, `Password`) 
    VALUES ('$Name','$Email','$Number','$Password')");
    echo"
    <script>
    alert('Register sucessfully');
    window.location.href= 'login.php';
    
    </script>
    
    ";
}


?>