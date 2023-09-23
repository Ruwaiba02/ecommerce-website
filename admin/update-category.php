<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-dark ec-header-light" id="body">


	<?php
	include('sidebar.php');
	?>


<?php
        include('config.php');

        $id = $_GET['id'];

        $query = "SELECT * FROM `category` WHERE `category_id` = '$id'";

						$result = mysqli_query($conn,$query);

						if(mysqli_num_rows($result)>0)
						{
                            while($row = mysqli_fetch_assoc($result)) {

?>

	<!-- WRAPPER -->
	<div class="wrapper">


		<!-- PAGE WRAPPER -->
		<div class="ec-page-wrapper">


			<!-- CONTENT WRAPPER -->
			<div class="ec-content-wrapper">
				<div class="content">
					<div class="breadcrumb-wrapper breadcrumb-wrapper-2 breadcrumb-contacts">
						<h1>Main Category</h1>
						<p class="breadcrumbs"><span><a href="index.html">Home</a></span>
							<span><i class="mdi mdi-chevron-right"></i></span>Main Category
						</p>
					</div>
					<div class="row">
						<div class="col-xl-12 col-lg-12">
							<div class="ec-cat-list card card-default mb-24px">
								<div class="card-body">
									<div class="ec-cat-form">
										<h4>Update Category</h4>

										<form method="POST" action="save-update-category.php" autocomplete="off" enctype="multipart/form-data">

                                        <div class="col-md-12">
														<input type="hidden" class="form-control slug-title" id="inputEmail4" name="category_id" value="<?php echo $row['category_id'];?>" >
													</div>

											<div class="form-group row">
												<label for="text" class="col-12 col-form-label"></label>
												<div class="col-12">
													<input id="text" name="category" class="form-control here slug-title" type="text" value="<?php echo $row['category_name'];?>">
												</div>
                                                
                                                <label for="text" class="col-12 col-form-label">Category Image</label>
                                                <div class="col-12">
														
														<input type="file" name="category_img">
                                                        <img src="<?php echo "upload/".$row['category_img'];?>" style="height: 100px; width: 100px;" alt="">
														<input type="hidden" name="old_img" value="<?php echo $row['category_img'];?>">
													</div>

									
											</div>


											<div class="row">
												<div class="col-3">
													<input name="btnUpdate" type="submit" class="btn btn-primary" value="Update">
												</div>
											</div>

										</form>

                                        <?php } }?>
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

	<!-- Data Tables -->
	<script src='assets/plugins/data-tables/jquery.datatables.min.js'></script>
	<script src='assets/plugins/data-tables/datatables.bootstrap5.min.js'></script>
	<script src='assets/plugins/data-tables/datatables.responsive.min.js'></script>

	<!-- Option Switcher -->
	<script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

	<!-- Ekka Custom -->
	<script src="assets/js/ekka.js"></script>
</body>

</html>