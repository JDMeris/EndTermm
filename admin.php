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
    <link rel="stylesheet" href="font-awesome.min.css">

    <!-- CUSTOM CSS -->
    <link href="styles.css" rel="stylesheet" />

    <!-- BOOTSTRAP JS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</head>
<body>

<section id="nav1">
  <div class="container">
    <div class="row">
      <div class="col-md">
        <nav class="navbar">
          <div class="container-fluid">
            <a href="admin.php" class="navbar-brand"><img src="ECOM-LOGO.png" alt="logo" width="160" height="95"></a>
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php" style="color:white; font-size:110%;"><b>Log out</b></a>
                    </li>
                </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
</section>

<br><br>
<section id="option">
    <div class="container-fluid">
    <div class="w-50 p-1 mx-auto">
        <div class="panel-heading" style="text-align: center">
          <h1 style="font-size:45px">NAVIGATION</h1>
        </div>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
            <a href="userman.php" class="btn btn-outline-primary btn-lg" type="button">User Management</a>
            <a href="prodman.php" class="btn btn-outline-secondary btn-lg" type="button">Product Management</a>
            <a href="delprod.php" class="btn btn-outline-danger btn-lg" type="button">Deleted Product Page</a>
        </div>
    </div>
</section>

</body>
</html>