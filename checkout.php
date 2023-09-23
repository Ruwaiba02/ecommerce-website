

<?php
include('header.php');

include('config.php');

if(isset($_GET['remove'])){

  $id = $_GET['remove'];

  unset($_SESSION['buy'][$id]);
  echo "<script> window.location.href='checkout.php'</script>";
 
}





if(isset($_POST['placeOrder'])){

    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $landmark = $_POST['landmark'];

    $insert_query = "INSERT INTO `customer_detail`(`fullname`, `phone`, `address`, `city`, `landmark`) 
  VALUES ('$fullname','$phone','$address','$city','$landmark')";
  $result = mysqli_query($conn, $insert_query);

  if($result)
  {
    $cust_id = mysqli_insert_id($conn);
    $insertOrder = "INSERT INTO `orders`( `cust_id`, `product_name`, `price`, `quantity`) VALUES (?,?,?,?)";
    $stmt=mysqli_prepare($conn, $insertOrder);
    if($stmt)
    {
        mysqli_stmt_bind_param($stmt,"isii",$cust_id,$product_name,$price,$quantity);
        foreach ($_SESSION['buy'] as $key => $value) {

            $query2 = "SELECT * FROM product WHERE product_id = $key";
            $result2 = mysqli_query($conn, $query2);
        
            foreach ($result2 as $a) {
         

            $product_name = $a['title'];
            $price = $a['price'];
            $quantity = $value['quantity'];
            mysqli_stmt_execute($stmt);
        }
    }
        unset($_SESSION['buy']);

         echo "<script> window.location.href='order-placed.php'</script>";
        
    }
    else{
        echo "order not placed error";
    }
  }
}

?>

<body>
    <div class="page-holder">
      <!-- navbar-->
    
      <!--  Modal -->
      
      <div class="container">
        <!-- HERO SECTION-->
        <section class="py-5 bg-light">
          <div class="container">
            <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
              <div class="col-lg-6">
                <h1 class="h2 text-uppercase mb-0">Checkout</h1>
              </div>
              <div class="col-lg-6 text-lg-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-lg-end mb-0 px-0 bg-light">
                    <li class="breadcrumb-item"><a class="text-dark" href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-dark" href="cart.html">Cart</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </section>
        <section class="py-5">
          <!-- BILLING ADDRESS-->
          <h2 class="h5 text-uppercase mb-4">Billing details</h2>
          <div class="row">
            <div class="col-lg-8">
              <form action="" method="POST">
                <div class="row gy-3">
                  <div class="col-lg-6">
                    <label class="form-label text-sm text-uppercase" for="firstName">Full name </label>
                    <input class="form-control form-control-lg" type="text" name="fullname" placeholder="Enter your full name" required >
                  </div>
                  
                  <div class="col-lg-6">
                    <label class="form-label text-sm text-uppercase" for="phone">Phone number </label>
                    <input class="form-control form-control-lg" type="number" name="phone" placeholder="Enter your phone number" required >
                  </div>
                  
                  <div class="col-lg-12">
                    <label class="form-label text-sm text-uppercase" for="address">Full Address/مکمل پتہ</label>
                    <input class="form-control form-control-lg" type="text" name="address" placeholder="Enter your full address" required>
                  </div>
                  
                  <div class="col-lg-6">
                    <label class="form-label text-sm text-uppercase" for="city">City/شہر </label>
                    <input class="form-control form-control-lg" type="text" name="city" placeholder="Enter your city" required >
                  </div>
                  <div class="col-lg-6">
                    <label class="form-label text-sm text-uppercase" for="state">Landmark/مشہور جگہ</label>
                    <input class="form-control form-control-lg" type="text" name="landmark" placeholder="Enter famous place / Landmark (optional)">
                  </div>
                  
                 
                  <div class="col-lg-12 form-group">
                    <input class="btn btn-dark" type="submit" name="placeOrder" value="Place order">
                  </div>
                </div>
              </form>
            </div>

       

            <!-- ORDER SUMMARY-->
            <div class="col-lg-4">
              <div class="card border-0 rounded-0 p-lg-4 bg-light">
                <div class="card-body">
                  <h5 class="text-uppercase mb-4">Your order</h5>

                  <?php

if(isset($_SESSION['buy'])){

  $total=0;

  foreach ($_SESSION['buy'] as $key => $value) {
                   
    $query = "SELECT * FROM product WHERE product_id = $key";
    $result = mysqli_query($conn, $query);

    foreach ($result as $b) {
        ?>

<ul class="list-unstyled mb-0">
  <li class="d-flex justify-content-between"><strong class="small fw-bold"><?php echo $b['title']; ?><div class="text-gray">x <?php echo $value['quantity']?></div></strong><span class="text-muted small"><?php echo $b['price']; ?></span><a class="reset-anchor" href="?remove=<?php echo $key ?>"><i class="fa fa-times text-gray" aria-hidden="true"></i></a></li>
  <li class="border-bottom my-2"></li>


  <?php

$total += $value['quantity']*$b['price'];


}} }
else{
  
  $total=0;

  
}
  
  
  ?>

   
              <li class="d-flex align-items-center justify-content-between"><strong class="text-uppercase small fw-bold">Total</strong><span><?php echo $total; ?></span></li>
            </ul>



                 
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

<!-- stop form resubmission after reloading page -->
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

      <?php 
    include('footer.php');
?>
    