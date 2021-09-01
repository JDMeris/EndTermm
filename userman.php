<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('conn.php');?>
    <meta charset="UTF-8">
    <title>iKicksPH</title>
    <link href="SHOES.ico" rel="icon">
    
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <!-- CUSTOM CSS -->
    <link href="styles.css" rel="stylesheet" />

    <!-- BOOTSTRAP JS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</head>
<body>
<header>

<section id="nav1">
  <div class="container">
    <div class="row">
      <div class="col-md">
        <nav class="navbar">
          <div class="container-fluid">
              <a href="userman.php" class="navbar-brand"><img src="ECOM-LOGO.png" alt="logo" width="160" height="95"></a>
            <ul class="nav justify-content-end">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="admin.php" style="color:white; font-size:110%;">Back</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
</section>

<br>
<div class="container">
    <div class="row">
            <div class="w-50 p-3 mx-auto" style="width: 150px;">
                <h2>ADD USER</h2>
        <form method="POST" action="add1.php">
        
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Name" required="true">
                </div>
            <br>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                </div> 
            <br>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password(min. 6 characters)" required="true" pattern=".{6,}">
                </div>
            <br>
                <div class="form-group"> 
                    <input type="tel" class="form-control" name="contact" placeholder="Contact" required="true">
                </div>
            <br>
                <div class="form-group">
                    <input type="text" class="form-control" name="city" placeholder="City" required="true">
                </div>
            <br>
                <div class="form-group">
                    <input type="text" class="form-control" name="address" placeholder="Address" required="true">
                </div>
            <br>
            <div class="d-grid gap-2 col-3 mx-auto">
                <button type="submit" name="submit" class="btn btn-danger" type="button">Submit</button>
            </div>
        </form> 
    </div>
    </div>
    </div>


    <br>
    <div class="container"> 
        <table class="table table-bordered table-md"> 
            <thead>
                <tr> 
                    <th scope="col">Name</th> 
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Contact</th>
                    <th scope="col">City</th>
                    <th scope="col">Address</th>
                    <th scope="col">Options</th>
                </tr>  
            </thead> 

    <tbody>
        <?php
            include('conn.php');  
            $query=mysqli_query($conn,"select * from `user`");    
            while($row=mysqli_fetch_array($query)){
        ?> 
    <tr> 
        <td><?php echo $row['name']; ?></td> 
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['password']; ?></td>
        <td><?php echo $row['contact']; ?></td>
        <td><?php echo $row['city']; ?></td>
        <td><?php echo $row['address']; ?></td> 

    <td class="table-bordered">
        <button type="button" class="btn btn-light btn-sm"><a href="edit1.php?id=<?php echo $row['id']; ?>">Edit</a></button> 
        <button type="button" class="btn btn-warning btn-sm"><a href="delete1.php?id=<?php echo $row['id']; ?>">Delete</a></button>
    </td> 

    </tr> 
        <?php 
        } 
            ?> 
            </tbody> 
        </table> 
    </div> 
    <br>
    <br>
    <br>
</body>
</header>