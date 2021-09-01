<?php include('conn.php'); 
    $id=$_GET['id'];
    $query=mysqli_query($conn,"select * from `products` where prod_id='$id'"); 
    $row=mysqli_fetch_array($query); 
    
    $prod_name=$row['prod_name'];
    $prod_price=$row['prod_price'];
    mysqli_query($conn,"insert into `del_prod` (prod_name,prod_price) values ('$prod_name','$prod_price')");
    
    mysqli_query($conn,"delete from `products` where prod_id='$id'");
    header('location:prodman.php'); 
?> 