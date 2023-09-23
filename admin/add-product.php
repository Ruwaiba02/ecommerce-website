<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-dark ec-header-light" id="body">

	<?php
	include('sidebar.php');
	?>


	<?php

	include('config.php');

	$Cquery = "SELECT * FROM `category`";

	$Cresult = mysqli_query($conn, $Cquery);



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
							<a href="product-list.html" class="btn btn-primary"> View All
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
												<form class="row g-3" method="post" action="save-product.php" enctype="multipart/form-data">
													<div class="col-md-12">
														<label class="form-label">Product name</label>
														<input type="text" class="form-control slug-title" id="inputEmail4" name="title" required>
													</div>
													<div class="col-md-6">
														<label class="form-label">Category</label>
														<select name="category" id="Categories" class="form-select" required>
														<option value="">Select Category</option>
															<?php
															while ($row = mysqli_fetch_assoc($Cresult)) {
															?>
																
																<option value="<?php echo $row['category_id']; ?>"><?php echo $row['category_name']; ?></option>
															<?php
															}
															?>
														</select>
													</div>

													<div class="col-md-6">
														<label class="form-label">Price</label>
														<input type="number" class="form-control" id="price1" name="price" required>
													</div>

													<div class="col-md-12">
														<label class="form-label">Description</label>
														<textarea class="form-control" rows="4" name="description" required></textarea>
													</div>
													<div class="col-md-6">
														<label>Product image 1</label>
														<input type="file" name="img1" required>
													</div>
													<div class="col-md-6">
														<label>Product image 2</label>
														<input type="file" name="img2" required>
													</div>
													<div class="col-md-6">
														<label>Product image 3</label>
														<input type="file" name="img3" required>
													</div>
													<div class="col-md-6">
														<label>Product image 4</label>
														<input type="file" name="img4" required>
													</div>

													<div class="col-md-2">
														<button type="submit" value="submit" name="submit" class="btn btn-primary">Submit</button>
													</div>
												</form>
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