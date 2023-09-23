<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-dark ec-header-light" id="body">

	<?php
	include('sidebar.php');
	?>


<?php
        include('config.php');

        $id = $_GET['id'];
        
        $query = "SELECT product.product_id, product.title, product.description, product.category, category.category_name,
         product.price, product.product_img1, product.product_img2, product.product_img3, 
         product.product_img4 FROM product LEFT JOIN category ON product.category = category.category_id
        WHERE product.product_id = '$id'";

        $result = mysqli_query($conn , $query);

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)) {

        

    ?>

	<!-- WRAPPER -->
	<div class="wrapper">


		<!-- PAGE WRAPPER -->
		<div class="ec-page-wrapper">


			<!-- CONTENT WRAPPER -->
			<div class="ec-content-wrapper">
				<div class="content">
					<div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
						<div>
							<h1>Add Product</h1>
							<p class="breadcrumbs"><span><a href="index.html">Home</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Product
							</p>
						</div>
						<div>
							<a href="product-list.php" class="btn btn-primary"> View All
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="card card-default">
								<div class="card-header card-header-border-bottom">
									<h2>Add Product</h2>
								</div>

								<div class="card-body">
									<div class="row ec-vendor-uploads">

										<div class="col-lg-12">
											<div class="ec-vendor-upload-detail">
												<form class="row g-3" action="save-update-product.php" method="post" enctype="multipart/form-data">
												
												<div class="col-md-12">
														<input type="hidden" class="form-control slug-title" id="inputEmail4" name="product_id" value="<?php echo $row['product_id'];?>" >
													</div>

													<div class="col-md-12">
														<label class="form-label">Product name</label>
														<input type="text" class="form-control slug-title" id="inputEmail4" name="title" value="<?php echo $row['title'];?>" >
													</div>

                                                   

													<div class="col-md-6">
														<label class="form-label">Category</label>
														<select name="category" id="Categories" class="form-select" >
														<option value="" disabled>Select Category</option>

                                                        <?php
                                                    
                                                    $query2 = "SELECT * FROM `category`";

                                                    $result2 = mysqli_query($conn , $query2);

                                                    if(mysqli_num_rows($result2) > 0){

                                                        while($row2 = mysqli_fetch_assoc($result2)){

                                                            if($row['category'] == $row2['category_id']){

                                                                $selected = "selected";

                                                            }
                                                            else{
                                                                $selected = "";
                                                            }
                                                   
                                                             echo "<option {$selected} value='{$row2['category_id']}'>{$row2['category_name']}</option>";

                                                            
                                                            }

                                                        }

                                                    ?>
														
														</select>
													</div>

                                                 

													<div class="col-md-6">
														<label class="form-label">Price</label>
														<input type="number" class="form-control" id="price1" name="price" value="<?php echo $row['price'];?>">
													</div>

													<div class="col-md-12">
														<label class="form-label">Description</label>
														<textarea class="form-control" rows="4" name="description" ><?php echo $row['description'];?></textarea>
													</div>
													<div class="col-md-6">
														<label>Product image 1</label>
														<input type="file" name="img1">
                                                        <img src="<?php echo "upload/".$row['product_img1'];?>" style="height: 100px; width: 100px;" alt="">
														<input type="hidden" name="old_img1" value="<?php echo $row['product_img1'];?>">
													</div>
													
													<div class="col-md-6">
														<label>Product image 2</label>
														<input type="file" name="img2">
                                                        <img src="<?php echo "upload/".$row['product_img2'];?>" style="height: 100px; width: 100px;" alt="">
														<input type="hidden" name="old_img2" value="<?php echo $row['product_img2'];?>">
													</div>
													<div class="col-md-6">
														<label>Product image 3</label>
														<input type="file" name="img3">
                                                        <img src="<?php echo "upload/".$row['product_img3'];?>" style="height: 100px; width: 100px;" alt="">
														<input type="hidden" name="old_img3" value="<?php echo $row['product_img3'];?>">
													</div>
													<div class="col-md-6">
														<label>Product image 4</label>
														<input type="file" name="img4">
                                                        <img src="<?php echo "upload/".$row['product_img4'];?>" style="height: 100px; width: 100px;" alt="">
														<input type="hidden" name="old_img4" value="<?php echo $row['product_img4'];?>">
													</div>

													<div class="col-md-2">
														<button type="submit" value="submit" name="btnupdate" class="btn btn-primary">Update</button>
													</div>
												</form>
                                                
                                                <?php
                                                
                                                
                                            }
                                        }
                                        
                                                
                                                ?>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- End Content -->
			</div> <!-- End Content Wrapper -->

			<!-- Footer -->
			<footer class="footer mt-auto">
				<div class="copyright bg-white">
					<p>
						Copyright &copy; <span id="ec-year"></span><a class="text-primary" href="https://themeforest.net/user/ashishmaraviya" target="_blank"> Ekka Admin Dashboard</a>. All Rights Reserved.
					</p>
				</div>
			</footer>

		</div> <!-- End Page Wrapper -->
	</div> <!-- End Wrapper -->

	<!-- Common Javascript -->
	<script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/plugins/tags-input/bootstrap-tagsinput.js"></script>
	<script src="assets/plugins/simplebar/simplebar.min.js"></script>
	<script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
	<script src="assets/plugins/slick/slick.min.js"></script>

	<!-- Option Switcher -->
	<script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

	<!-- Ekka Custom -->
	<script src="assets/js/ekka.js"></script>
</body>

</html>