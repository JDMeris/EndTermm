<?php include('conn.php'); 
 
    $name=$_POST['name']; 
    $email=$_POST['email'];
    $password=$_POST['password'];
    $contact=$_POST['contact']; 
    $city=$_POST['city'];
    $address=$_POST['address'];
    

    mysqli_query($conn,"insert into `user` (name,email,password,contact,city,address) values ('$name','$email','$password','$contact','$city','$address')"); 
    header('location:userman.php');  
?> 
