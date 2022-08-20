<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>viewCart</title>
</head>
<body>
    <?php
    
    include 'header.php';
    
    ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center bg-light mb-5 rounded">
                <h1 class="text-warning">My Cart</h1>

            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-around">
            <div class="col-sm-12 col-md-6 col-lg-9">
         <table class="table table-bordered text-center ">
            <thead class="bg-danger text-white text-center fs-5">
                <th>index no</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Quantity</th>
                <th>Total Price</th>
                <th>Delete</th>
            </thead>
            <tbody>
                <?php 
                $total = 0;
                if(isset($_SESSION['cart'])){
                foreach($_SESSION['cart'] as $key => $value);
                {
                    $total = $value['productPrice'] * $value['productQuantity'];

                    echo " 
                    <form action = 'Insertcart.php' method = 'POST'>
                    <tr>
                    <td>$key</td>
                    <td>$value[productName]</td>
                    <td>$value[productPrice]</td>
                    <td>$value[productQuantity]</td>
                    <td>$total</td>
                    <td><button name = 'Remove' class = 'btn-danger'>Delete</button></td>
                    <td><input type = 'hidden' name= 'item' value = '$value[productName]'></td>
                    
                    
                    
                    </tr>
                    </form>
                    ";
                    

                }

                }
                ?>
</tbody>
         </table>


            </div>

        



        </div>

    </div>
</body>
</html>