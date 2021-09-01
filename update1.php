<?php include('conn.php'); 
    $id=$_GET['id']; 
  
    $name=$_POST['name']; 
    $email=$_POST['email'];
    $password=$_POST['password'];
    $contact=$_POST['contact']; 
    $city=$_POST['city'];
    $address=$_POST['address']; 
  
    mysqli_query($conn,"update `user` set name='$name', email='$email',password='$password',contact='$contact',city='$city',address='$address' where id='$id'"); 
    header('location:userman.php'); 
?> 
