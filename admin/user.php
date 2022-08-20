<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>




    <!-- Bootsrap CDN -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">



</head>
<body>

<?php
include 'mystore.php';

$conn =mysqli_connect('localhost','root',"",'ecomerce');
$Record = mysqli_query($conn, "SELECT * FROM `tbluser`");



?>
<div class="container mt-5"></div>

<table class="table table-secondary table-bordered">
<thead class="text-center">
<th>S.N</th>
<th>Name</th>
<th>Email</th>
<th>Number</th>
<th>Delete</th>



</thead>
<tbody class="text-center text-danger">
    <?php
    $i = 0;
while( $row = mysqli_fetch_array($Record)){
    echo"
    <tr>
    <td> ";?><?php echo ++$i; ?><?php echo"</td>
    <td>$row[UserName]</td>
    <td>$row[Email]</td>
    <td>$row[Number]</td>
    <td><a href='delete.php? ID=$row[Id]' class = 'btn btn-outline-danger'>Delete</a></td>
</tr>
";

}

?>

</tbody>


</table>

    
</body>
</html>








