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
              <a href="shop.php" class="navbar-brand"><img src="ECOM-LOGO.png" alt="logo" width="160" height="95"></a>
            <ul class="nav justify-content-end">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#" style="color:white; font-size:110%;">Cart</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php" style="color:white; font-size:110%;">Log Out</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
</section>

  <section id="nav2">
    <div class="container">
      <div class="row">
        <div class="col-md">
          <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link" href="shop.php"><?php echo "Home"?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><?php echo "New Arrivals"?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><?php echo "Men"?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><?php echo "Women"?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><?php echo "Categories"?></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
</header>

<div class="container">
<h1 style="font-size:65px">Welcome to iKicksPH!</h1><br>
</div>


    <section id="buy">
        <div class="container">
           
          <div class="row row-cols-1 row-cols-md-3 g-5">
            
          <div class="col">
            <div class="card" style="width: 20rem;">
              <img src="air-force-1-07-lv8-shoe-27Bnvv.png" class="card-img-top" alt="shoe1">
            <div class="card-body">
              <h5 class="card-title">Nike Air Force 1 '07 LV8</h5>
              <p class="card-text" style="font-size:20px">₱60</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">• Perforations on the toe</li>
              <li class="list-group-item">• Colour Shown: Pure Platinum/White/Hyper Crimson/Indigo Fog</li>
              <li class="list-group-item">• Style: CK4383-001</li>
              <li class="list-group-item">• Country/Region of Origin: Vietnam</li>
            </ul>
            <div class="card-body text-center">
              <a href="#" class="btn btn-primary">Add to cart</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card" style="width: 20rem;">
              <img src="air-max-97-se-shoes-NMMVFJ.png" class="card-img-top" alt="shoe1">
            <div class="card-body">
              <h5 class="card-title">Nike Air Max 97 SE</h5>
              <p class="card-text" style="font-size:20px">₱85</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">• Foam midsole</li>
              <li class="list-group-item">• Colour Shown: Coconut Milk/Sesame/Light Sienna</li>
              <li class="list-group-item">• Style: DC3986-100</li>
              <li class="list-group-item">• Country/Region of Origin: Indonesia</li>
            </ul>
            <div class="card-body text-center">
              <a href="#" class="btn btn-primary">Add to cart</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card" style="width: 20rem;">
              <img src="court-vision-low-shoes-F6vqsg.png" class="card-img-top" alt="shoe1">
            <div class="card-body">
              <h5 class="card-title">Nike Court Vision Low Premium</h5>
              <p class="card-text" style="font-size:20px">₱99</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">• Microbranding details</li>
              <li class="list-group-item">• Colour Shown: Black/Ice/Total Orange/Black</li>
              <li class="list-group-item">• Style: CD5464-004</li>
              <li class="list-group-item">• Country/Region of Origin: Indonesia</li>
            </ul>
            <div class="card-body text-center">
              <a href="#" class="btn btn-primary">Add to cart</a>
            </div>
          </div>
        </div>
          
          
        </div>
      </div>
    </section>

    <br><br>
    <div class="footer-basic">
        <footer>
            <div class="social">
                <a href="#"><i class="icon ion-social-facebook"></i></a>
                <a href="#"><i class="icon ion-social-instagram"></i></a>
            </div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="shop.php">Home</a></li>
                <li class="list-inline-item"><a href="#">Contact Us</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
            </ul>
            <p class="copyright">iKicks.PH © 2021</p>
        </footer>
    </div>

</body>
</html>