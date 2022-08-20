




<?php
if(isset($_POST['submit']))
{
        include 'config.php';
        
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


        //insert product

         mysqli_query($conn," INSERT INTO `tblproduct`(`Id`,`PName`, `PPrice`, `PImage`, `PCategory`)
          VALUES ('$product_Id','$product_name','$product_price','$imppath','$product_category')");
}
?>



                