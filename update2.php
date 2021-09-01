<?php include('conn.php'); 
    $id=$_GET['id']; 
  
    $prod_name=$_POST['prod_name']; 
    $prod_price=$_POST['prod_price'];
  
    mysqli_query($conn,"update `products` set prod_name='$prod_name', prod_price='$prod_price' where prod_id='$id'"); 
    header('location:prodman.php'); 
?> 
