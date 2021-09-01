<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('conn.php');?>
    <meta charset="UTF-8">
    <title>iKicksPH</title>
    <link href="SHOES.ico" rel="icon">
    
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
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
            <a href="index.php" class="navbar-brand"><img src="ECOM-LOGO.png" alt="logo" width="160" height="95"></a>
            <ul class="nav justify-content-end">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="adminlogin.php" style="color:white; font-size:110%;"><b>Login as Admin</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php" style="color:white; font-size:110%;">Back</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
</section>

<br><br>
  <div class="container">
    <div class="row">
      <div class="w-50 p-3 mx-auto">
        <div class="panel-heading">
          <h2>LOGIN</h2>
        </div>
        <div class="panel">
          <p>Login to make a purchase.</p>
        <form method="post" action="login_submit.php">
          <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
          </div>
        <br>
          <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password(min. 6 characters)" pattern=".{6,}">
          </div>
        <br>
          <div class="form-group d-grid gap-2 col-6 mx-auto">
            <input type="submit" value="Login" class="btn btn-primary">
          </div>
        </form>
      </div>
    <br>
            <div class="panel-footer">Don't have an account yet? <a href="signup.php">Register</a></div>
      </div>
    </div>
  </div>
  
</body>
</html>