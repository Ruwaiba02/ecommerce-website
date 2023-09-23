<?php
    require('header.php');

?>


  <!--  Modal -->

  
      <!-- HERO SECTION-->
      <div class="container">

        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="2000">
        <img src="img/hero-banner.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="img/hero-banner-alt.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="img/hero-shop.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  
        <!-- CATEGORIES SECTION-->
        <section class="pt-5">
          <header class="text-center">
            <p class="small text-muted small text-uppercase mb-1">Carefully created collections</p>
            <h2 class="h5 text-uppercase mb-4">Browse our categories</h2>
          </header>

          <?php
                    include('config.php');
                
                    $query = "SELECT * FROM category";

                    $result = mysqli_query($conn,$query);
                    

   
                

                ?>



          <div class="row">

            <?php  while ($row = mysqli_fetch_assoc($result)) {  ?>

            <div class="col-md-3"><a  class="category-item text-center" href="shop2.php?category=<?php echo $row["category_id"]; ?>"><img class="img-fluid" src="admin/upload/<?php echo $row["category_img"]; ?>" alt=""/><strong class="category-item-title"><?php echo $row['category_name'] ?></strong></a>
            </div>
            <!-- <div class="col-md-4"><a class="category-item mb-4" href="shop.html"><img class="img-fluid" src="img/cat-img-5.jpg" alt=""/><strong class="category-item-title">Bags</strong></a><a class="category-item" href="shop.html"><img class="img-fluid" src="img/cat-img-3.jpg" alt=""/><strong class="category-item-title text-center">Kitchen Accessories</strong></a>
            </div>
            <div class="col-md-4"><a class="category-item" href="shop.html"><img class="img-fluid" src="img/cat-img-4.jpg" alt=""/><strong class="category-item-title">Electronics</strong></a>
            </div> -->

            <?php  } ?>

          </div>

      

        </section>
        <!-- TRENDING PRODUCTS-->
        <section class="py-5">
          <header>
            <p class="small text-muted small text-uppercase mb-1">Made the hard way</p>
            <h2 class="h5 text-uppercase mb-4">Top trending products</h2>
          </header>
          <div class="row">


          <?php
                    include('config.php');
                
                   

                    $query2 = "SELECT * FROM product";

                    $result2 = mysqli_query($conn,$query2);
                    

   
                 while ($row2 = mysqli_fetch_assoc($result2)) {

                ?>






            <!-- PRODUCT-->
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="product text-center">
                <div class="position-relative mb-3">
                  <div class="badge text-white bg-"></div><a class="d-block" href="product-detail.php?id=<?php echo $row2['product_id'];?>"><img class="img-fluid w-100" src="admin/upload/<?php echo $row2["product_img1"]; ?>" alt="..."></a>
                  <!-- <div class="product-overlay">
                    <ul class="mb-0 list-inline">
                      <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i class="far fa-heart"></i></a></li>
                      <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="cart.html">Add to cart</a></li>
                      <li class="list-inline-item me-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
                    </ul>
                  </div> -->
                </div>
                <h6> <a class="reset-anchor" href="detail.html"><?php echo $row2["title"]; ?></a></h6>
                <p class="small text-muted">Rs.<?php echo $row2["price"]; ?></p>
              </div>
            </div>
           
          <?php } ?>


        </section>
        <!-- SERVICES-->
        <section class="py-5 bg-light">
          <div class="container">
            <div class="row text-center gy-3">
              <div class="col-lg-4">
                <div class="d-inline-block">
                  <div class="d-flex align-items-end">
                    <svg class="svg-icon svg-icon-big svg-icon-light">
                      <use xlink:href="#delivery-time-1"> </use>
                    </svg>
                    <div class="text-start ms-3">
                      <h6 class="text-uppercase mb-1">Free shipping</h6>
                      <p class="text-sm mb-0 text-muted">Free shipping worldwide</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="d-inline-block">
                  <div class="d-flex align-items-end">
                    <svg class="svg-icon svg-icon-big svg-icon-light">
                      <use xlink:href="#helpline-24h-1"> </use>
                    </svg>
                    <div class="text-start ms-3">
                      <h6 class="text-uppercase mb-1">24 x 7 service</h6>
                      <p class="text-sm mb-0 text-muted">Free shipping worldwide</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="d-inline-block">
                  <div class="d-flex align-items-end">
                    <svg class="svg-icon svg-icon-big svg-icon-light">
                      <use xlink:href="#label-tag-1"> </use>
                    </svg>
                    <div class="text-start ms-3">
                      <h6 class="text-uppercase mb-1">Festivaloffers</h6>
                      <p class="text-sm mb-0 text-muted">Free shipping worldwide</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- NEWSLETTER-->
        <section class="py-5">
          <div class="container p-0">
            <div class="row gy-3">
              <div class="col-lg-6">
                <h5 class="text-uppercase">Let's be friends!</h5>
                <p class="text-sm text-muted mb-0">Nisi nisi tempor consequat laboris nisi.</p>
              </div>
              <div class="col-lg-6">
                <form action="#">
                  <div class="input-group">
                    <input class="form-control form-control-lg" type="email" placeholder="Enter your email address" aria-describedby="button-addon2">
                    <button class="btn btn-dark" id="button-addon2" type="submit">Subscribe</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
      </div>

      <?php
      
      require('footer.php');
      
      ?>
     
  