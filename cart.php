<?php
include('header.php');

if(isset($_GET['remove'])){

  $id = $_GET['remove'];

  unset($_SESSION['cart'][$id]);
  echo "<script> window.location.href='cart.php'</script>";
 
}

include('config.php');

?><body>
    <div class="page-holder">
      <!-- navbar-->
   
      <!--  Modal -->
      <!-- <div class="modal fade" id="productView" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content overflow-hidden border-0">
            <button class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body p-0">
              <div class="row align-items-stretch">
                <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center" style="background: url(img/product-5.jpg)" href="img/product-5.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/product-5-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a></div>
                <div class="col-lg-6">
                  <div class="p-4 my-md-4">
                    <ul class="list-inline mb-2">
                      <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0 1"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0 2"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0 3"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0 4"><i class="fas fa-star small text-warning"></i></li>
                    </ul>
                    <h2 class="h4">Red digital smartwatch</h2>
                    <p class="text-muted">$250</p>
                    <p class="text-sm mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut ullamcorper leo, eget euismod orci. Cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. Vestibulum ultricies aliquam convallis.</p>
                    <div class="row align-items-stretch mb-4 gx-0">
                      <div class="col-sm-7">
                        <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quantity</span>
                          <div class="quantity">
                            <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                            <input class="form-control border-0 shadow-0 p-0" type="text" value="1">
                            <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-5"><a class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0" href="cart.html">Add to cart</a></div>
                    </div><a class="btn btn-link text-dark text-decoration-none p-0" href="#!"><i class="far fa-heart me-2"></i>Add to wish list</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
      <div class="container">
        <!-- HERO SECTION-->
        <section class="py-5 bg-light">
          <div class="container">
            <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
              <div class="col-lg-6">
                <h1 class="h2 text-uppercase mb-0">Cart</h1>
              </div>
              <div class="col-lg-6 text-lg-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-lg-end mb-0 px-0 bg-light">
                    <li class="breadcrumb-item"><a class="text-dark" href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Cart</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </section>

        <?php
        
        if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
        {

        ?><section class="py-5">
          <h2 class="h5 text-uppercase mb-4">Shopping cart</h2>
          <div class="row">
            <div class="col-lg-8 mb-4 mb-lg-0">
              <!-- CART TABLE-->
              <div class="table-responsive ">
                <table class="table text-nowrap">
                  <thead class="bg-light">
                    <tr>
                      <th class="border-0 p-3" scope="col"> <strong class="text-sm text-uppercase">S.no</strong></th>
                      <th class="border-0 p-3" scope="col"> <strong class="text-sm text-uppercase">Product</strong></th>
                      <th class="border-0 p-3" scope="col"> <strong class="text-sm text-uppercase">Price</strong></th>
                      <th class="border-0 p-3" scope="col"> <strong class="text-sm text-uppercase">Quantity</strong></th>
                      <th class="border-0 p-3" scope="col"> <strong class="text-sm text-uppercase">Total</strong></th>
                      <th class="border-0 p-3" scope="col"> <strong class="text-sm text-uppercase">Action</strong></th>
                    </tr>
                  </thead>
                  <tbody class="border-0">

                  <?php
                  $sno = 1;
                  $total = 0;
                    foreach ($_SESSION['cart'] as $key => $value) {
                   
                      $query = "SELECT * FROM product WHERE product_id = $key";
                      $result = mysqli_query($conn, $query);

                      foreach ($result as $a) {
                        ?>
                        <tr>
                        <td class="p-3 align-middle border-light">
                        <p class="mb-0 small"><?php echo  $sno; ?></p>
                        </td> 
                        <td class="p-3 align-middle border-light">
                        <div><strong class="h6"><a class="reset-anchor animsition-link" href="product-detail.php?id=<?php echo $a['product_id'];?>"><?php echo $a['title']?> </a></strong></div>
                        
                        </td>
                        <td class="p-3 align-middle border-light">
                          <p class="mb-0 small"><?php echo $a['price']?></p>
                        </td>
                        <td class="p-3 align-middle border-light">
                        <p class="mb-0 small"><?php echo $value['quantity']?></p>
                        </td>
                        <td class="p-3 align-middle border-light">
                          <p class="mb-0 small"><?php echo $value['quantity']*$a['price']?></p>
                        </td>
                        <td class="p-3 align-middle border-light"><a class="reset-anchor" href="?remove=<?php echo $key ?>"><i class="fas fa-trash-alt small text-muted"></i></a></td>
                      </tr>

                      <?php
                      $total += $value['quantity']*$a['price'];

                      }
                 $sno++;
                 
                 } 
                 ?>
                  </tbody>
                </table>
              </div>
              <!-- CART NAV-->
              <div class="bg-light px-4 py-3">
                <div class="row align-items-center text-center">
                  <div class="col-md-6 mb-3 mb-md-0 text-md-start"><a class="btn btn-link p-0 text-dark btn-sm" href="shop.php"><i class="fas fa-long-arrow-alt-left me-2"> </i>Continue shopping</a></div>
                  <div class="col-md-6 text-md-end"><a class="btn btn-outline-dark btn-sm" href="checkout-cart.php">Proceed to checkout<i class="fas fa-long-arrow-alt-right ms-2"></i></a></div>
                </div>
              </div>
            </div>
            <!-- ORDER TOTAL-->
            <div class="col-lg-4">
              <div class="card border-0 rounded-0 p-lg-4 bg-light">
                <div class="card-body">
                  <h5 class="text-uppercase mb-4">Cart total</h5>
                  <ul class="list-unstyled mb-0">
                     <li class="border-bottom my-2"></li>
                    <li class="d-flex align-items-center justify-content-between mb-4"><strong class="text-uppercase small font-weight-bold">Total</strong><span><?php echo "Rs. " . $total; ?></span></li>
                    <li>
                     
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>

        <?php }
        
        else{
          echo '<div class="text-center mt-5 "><i class ="fa fa-shopping-cart"></i></div>';
          echo '<h3 class="text-center mb-5 mt-5">Your Cart Is Empty</h3>';
        }
        
        ?>
      </div>
     
      <?php 
        include('footer.php');
      ?>