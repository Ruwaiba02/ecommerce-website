<?php
@session_start();

?><!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>The Full Basket</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">
  <!-- gLightbox gallery-->
  <link rel="stylesheet" href="vendor/glightbox/css/glightbox.min.css">
  <!-- Range slider-->
  <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
  <!-- Choices CSS-->
  <link rel="stylesheet" href="vendor/choices.js/public/assets/styles/choices.min.css">
  <!-- Swiper slider-->
  <link rel="stylesheet" href="vendor/swiper/swiper-bundle.min.css">
  <!-- Google fonts-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="css/custom.css">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/favicon.png">
</head>

<body>
  <div class="page-holder">
    <!-- navbar-->
    <header class="header bg-white">
      <div class="container px-lg-3">
        <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0"><a class="navbar-brand" href="index.html"><span class="fw-bold text-uppercase text-dark">The Full Basket</span></a>
          <button class="navbar-toggler navbar-toggler-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <!-- Link--><a class="nav-link active" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <!-- Link--><a class="nav-link" href="shop.php">Shop</a>
              </li>
              <li class="nav-item">
                <!-- Link--><a class="nav-link" href="product-detail.php">Product detail</a>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="pagesDropdown" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                <div class="dropdown-menu mt-3 shadow-sm" aria-labelledby="pagesDropdown"><a class="dropdown-item border-0 transition-link" href="index.html">Homepage</a><a class="dropdown-item border-0 transition-link" href="shop.html">Category</a><a class="dropdown-item border-0 transition-link" href="detail.html">Product detail</a><a class="dropdown-item border-0 transition-link" href="cart.html">Shopping cart</a><a class="dropdown-item border-0 transition-link" href="checkout.html">Checkout</a></div>
              </li>
            </ul>
            <ul class="navbar-nav ms-auto">
              <li class="nav-item"><a class="nav-link" href="cart.php">
                  <i class="fas fa-dolly-flatbed me-1 text-gray"></i>Cart<small class="text-gray fw-normal">
<?php
                    if (isset($_SESSION['cart'])) {
                      echo count($_SESSION['cart']);
                    } else {
                      echo 0;
                    }?></small></a></li>
              <li class="nav-item"><a class="nav-link" href="#!"> <i class="far fa-heart me-1"></i><small class="text-gray fw-normal"> (0)</small></a></li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="pagesDropdown" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user text-gray fw-normal me-1"></i> My Account</a>
                <div class="dropdown-menu mt-3 shadow-sm" aria-labelledby="pagesDropdown"><a class="dropdown-item border-0 transition-link" href=""><?php if(isset($_SESSION['customer'])) {echo "Welcome " . $_SESSION['customer_name'];} ?></a>
                <?php if(isset($_SESSION['customer']))
                {
                
                 echo '<a class="dropdown-item border-0 transition-link" href="cust-orders.php">My Orders</a>';
                 echo '<a class="dropdown-item border-0 transition-link" href="cust-logout.php">Logout</a></div>';
                
                } 
                
                else{
                  echo '<a class="dropdown-item border-0 transition-link" href="cust-login.php">Login</a></div>';
                }
                ?>
                
                
              </li>
              
            </ul>
          </div>
        </nav>
      </div>
    </header>

    <!-- JavaScript files-->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/glightbox/js/glightbox.min.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/swiper/swiper-bundle.min.js"></script>
    <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="js/front.js"></script>
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite - 
      //   see more here 
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {

        var ajax = new XMLHttpRequest();
        ajax.open("GET", path, true);
        ajax.send();
        ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
        }
      }
      // this is set to BootstrapTemple website as you cannot 
      // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
      // while using file:// protocol
      // pls don't forget to change to your domain :)
      injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');
    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </div>
</body>

</html>