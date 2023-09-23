<?php
	include('sidebar.php');
?>

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-dark ec-header-light" id="body">

	<!-- WRAPPER -->
	<div class="wrapper">

		

		<!-- PAGE WRAPPER -->
		<div class="ec-page-wrapper">

			

			<!-- CONTENT WRAPPER -->
			<div class="ec-content-wrapper">
				<div class="content">
					<div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
						<div>
							<h1>Category</h1>
							<p class="breadcrumbs"><span><a href="index.html">Home</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Category</p>
						</div>
						<div>
							<a href="product-list.html" class="btn btn-primary"> Add Category</a>
						</div>
					</div>


					<?php

						include "config.php";

						$query = "SELECT * FROM `category`";

						$result = mysqli_query($conn,$query);

						if(mysqli_num_rows($result)>0)
						{
											
					?>




					<div class="row">
						<div class="col-md-12">
							<div class="card card-default">
								<div class="card-body">
									<div class="table-responsive">
										<table id="responsive-data-table" class="table"
											style="width:100%">
											<thead>
												<tr>
													<th>S.No</th>
													<th>Category name</th>
													<th>Edit</th>
													<th>Delete</th>
												</tr>
											</thead>
											
											<?php
			
											while($row  = mysqli_fetch_assoc($result))
                        						{

											?>
											<tbody>
												<tr>
													
													<td class='id'><?php echo $row["category_id"]; ?></td>
													<td><?php echo $row["category_name"]; ?></td>
													<td class='edit'><a href='update-category.php?id=<?php echo $row["category_id"]; ?>'><i class='fa fa-edit'></i></a></td>
                              						<td class='delete'><a href='delete-category.php?id=<?php echo $row["category_id"]; ?>'><i class='fa fa-trash-o'></i></a></td>
                          
												</tr>

												<?php } ?>

											</tbody>
										</table>

										<?php } ?>

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
						Copyright &copy; <span id="ec-year"></span><a class="text-primary"
						href="https://themeforest.net/user/ashishmaraviya" target="_blank"> Ekka Admin Dashboard</a>. All Rights Reserved.
					  </p>
				</div>
			</footer>

		</div> <!-- End Page Wrapper -->
	</div> <!-- End Wrapper -->

	<!-- Common Javascript -->
	<script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/plugins/simplebar/simplebar.min.js"></script>
	<script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
	<script src="assets/plugins/slick/slick.min.js"></script>

	<!-- Datatables -->
	<script src='assets/plugins/data-tables/jquery.datatables.min.js'></script>
	<script src='assets/plugins/data-tables/datatables.bootstrap5.min.js'></script>
	<script src='assets/plugins/data-tables/datatables.responsive.min.js'></script>

	<!-- Option Switcher -->
	<script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

	<!-- Ekka Custom -->
	<script src="assets/js/ekka.js"></script>
</body>

</html>