<?php 
  $products = [
    ['prodName' => 'Nike Air Force 1 07 LV8', 'price' => 60],
    ['prodName' => 'Nike Air Max 97 SE', 'price' => 85],
    ['prodName' => 'Nike Court Vision Low Premium', 'price' => 99]
  ];
?>

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
              <a class="nav-link active" aria-current="page" href="signup.php" style="color:white; font-size:110%;">Sign Up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="login.php" style="color:white; font-size:110%;">Login</a>
            </li>
          </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
</section>

    <div class="container">
      <div class="row">
        <h1>New Arrivals</h1>
      </div>  
    </div>

  <section id="prod">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h2>Product Lists</h2>
              <ul>
	  	            <?php foreach($products as $product) {?>
                    <p style="font-size:20px"><?php echo $product['prodName']; ?></p>
                    <h5>₱<?php echo $product['price']; ?></h5>
       	          <?php } ?>
              </ul>
            </div>
          </div>
        </div>

  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
            
      <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="air-force-1-07-lv8-shoe-27Bnvv.png" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h5>Nike Air Force 1 07 LV8</h5>
      </div>
    </div>

    <div class="carousel-item">
        <img src="air-max-97-se-shoes-NMMVFJ.png" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color:white">Nike Air Max 97 SE</h5>
      </div>
    </div>

    <div class="carousel-item">
        <img src="court-vision-low-shoes-F6vqsg.png" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h5>Nike Court Vision Low Premium</h5>
      </div>
    </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

      </div>
    </div>
  </div>
</div>
    </div>
  </section>
  
    <div class="container">
      <div class="row">
        <div class="d-grid gap-2 col-6 mx-auto">
          <a href="login.php" class="btn btn-danger btn-lg" type="button">Shop Now!</a>
        </div>
      </div>
    </div>

<br><br><br>
    <div class="footer-basic">
        <footer>
            <div class="social">
                <a href="#"><i class="icon ion-social-facebook"></i></a>
                <a href="#"><i class="icon ion-social-instagram"></i></a>
            </div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="index.php">Home</a></li>
                <li class="list-inline-item"><a href="#">Contact Us</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
            </ul>
                <p class="copyright">iKicks.PH © 2021</p>
        </footer>
    </div>

</body>
</html>