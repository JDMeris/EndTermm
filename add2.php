<?php include('conn.php'); 
 
    $prod_name=$_POST['prod_name']; 
    $prod_price=$_POST['prod_price'];

    mysqli_query($conn,"insert into `products` (prod_name,prod_price) values ('$prod_name','$prod_price')"); 
    header('location:prodman.php');  
?> 
