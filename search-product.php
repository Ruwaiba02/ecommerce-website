
<div class="page-holder">
      <!-- navbar-->
      <?php
        include('header.php');
     ?>
      
      <div class="container">
        <!-- HERO SECTION-->
        <section class="py-5 bg-light">
          <div class="container">
            <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
              <div class="col-lg-6">
                <h1 class="h2 text-uppercase mb-0">Shop</h1>
              </div>
              <div class="col-lg-6 text-lg-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-lg-end mb-0 px-0 bg-light">
                    <li class="breadcrumb-item"><a class="text-dark" href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Shop</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </section>
        <section class="py-5">
          <div class="container p-0">
            <div class="row">

           
                 

              <!-- SHOP LISTING-->
              <div class="col-lg-12 order-1 order-lg-2 mb-5 mb-lg-0">

             


                <div class="row mb-3 align-items-center">
                  
              
                </div>
                <div class="row">

                <?php
                    include('config.php');

                    $search_product = $_GET['search_product']; 
                
                    $query2 = "SELECT * FROM product WHERE `title` LIKE '%$search_product%';";
 
                    $result2 = mysqli_query($conn,$query2);
                    
                    if(mysqli_num_rows($result2) > 0){
   
                 while ($row2 = mysqli_fetch_assoc($result2)) {

                ?>

                



                  <!-- PRODUCT-->
             
                  <div class="col-lg-3">
                    <div class="product text-center">
                      <div class="mb-3 ">
                        <div class="badge text-white bg-"></div><a class="d-block" href="product-detail.php?id=<?php echo $row2['product_id'];?>"><img class="img-fluid w-100" src="admin/upload/<?php echo $row2["product_img1"]; ?>" alt="..."></a>
                       
                      </div>
                      <h6> <a class="reset-anchor" href="product-detail.php?id=<?php echo $row2['product_id'];?>"><?php echo $row2["title"]; ?></a></h6>
                      <p class="small text-muted">Rs.<?php echo $row2["price"]; ?></p>
                     
                    </div>
                  </div>
                 
           
                  <?php }  }  ?>

                <!-- PAGINATION-->
                <!-- <nav aria-label="Page navigation example">
                  <ul class="pagination justify-content-center justify-content-lg-end">
                    <li class="page-item mx-1"><a class="page-link" href="#!" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                    <li class="page-item mx-1 active"><a class="page-link" href="#!">1</a></li>
                    <li class="page-item mx-1"><a class="page-link" href="#!">2</a></li>
                    <li class="page-item mx-1"><a class="page-link" href="#!">3</a></li>
                    <li class="page-item ms-1"><a class="page-link" href="#!" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                  </ul>
                </nav> -->
              </div>
            </div>
          </div>
        </section>
      </div>
   <?php 
    include('footer.php');
   ?>
