<?php include('header.php'); ?>

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-dark ec-header-light" id="body">


<?php
	include('sidebar.php');
	?>


	<!-- WRAPPER -->
	<div class="wrapper">

	

		<!-- PAGE WRAPPER -->
		<div class="ec-page-wrapper">

		
			

			<!-- CONTENT WRAPPER -->
			<div class="ec-content-wrapper">
				<div class="content">
					<div class="breadcrumb-wrapper breadcrumb-wrapper-2">
						<h1>New Orders</h1>
						<p class="breadcrumbs"><span><a href="index.html">Home</a></span>
							<span><i class="mdi mdi-chevron-right"></i></span>Orders
						</p>
					</div>

					<?php

						include "config.php";

						$query = "SELECT orders.order_id, orders.cust_id, orders.product_name, orders.price, orders.quantity, orders.timestamp, customer_detail.fullname FROM orders 
						INNER JOIN customer_detail ON orders.cust_id = customer_detail.id";

						$result = mysqli_query($conn,$query);

						if(mysqli_num_rows($result)>0)
						{
											
					?>



					<div class="row">
						<div class="col-12">
							<div class="card card-default">
								<div class="card-body">
									<div class="table-responsive">
										<table id="responsive-data-table" class="table" style="width:100%">
											<thead>
												<tr>
													<th>ID</th>
													<th>Product Name</th>
													<th>Customer</th>
													<th>Quantity</th>
													<th>Price</th>
													<th>Date</th>
												</tr>
											</thead>

											<?php
			
											while($row  = mysqli_fetch_assoc($result))
                        						{

											?>
											<tbody>
												<tr>
													<td><?php echo $row['order_id'] ?></td>
													<td><?php echo $row['product_name'] ?></td>
													<td><strong><a href='customer-details.php?id=<?php echo $row["cust_id"]; ?>' class="text-secondary"><?php echo $row['fullname'] ?></a></strong></td>
													<td><?php echo $row['quantity'] ?></td>
													<td><?php echo $row['price'] ?></td>
													<td><?php echo $row['timestamp'] ?></td>
													
												</tr>
												
											</tbody>
											<?php } ?>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>

					<?php } ?>
				</div> <!-- End Content -->
			</div> <!-- End Content Wrapper -->

			<!-- Footer -->
			<footer class="footer mt-auto">
				<div class="copyright bg-white">
					<p>
						Copyright &copy; <span id="ec-year"></span><a class="text-primary"
							href="https://themeforest.net/user/ashishmaraviya" target="_blank"> Ekka Admin
							Dashboard</a>. All Rights Reserved.
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

	<!-- Data-Tables -->
	<script src='assets/plugins/data-tables/jquery.datatables.min.js'></script>
	<script src='assets/plugins/data-tables/datatables.bootstrap5.min.js'></script>
	<script src='assets/plugins/data-tables/datatables.responsive.min.js'></script>

	<!-- Option Switcher -->
	<script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

	<!-- Ekka Custom -->
	<script src="assets/js/ekka.js"></script>
</body>

</html>