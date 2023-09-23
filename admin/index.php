<?php
session_start();
include('config.php');
require('auth-session.php');
?>







<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-light ec-header-light" id="body">

	<?php
	include('sidebar.php');
	?>

	<!--  WRAPPER  -->
	<div class="wrapper">


		<!--  PAGE WRAPPER -->
		<div class="ec-page-wrapper">




			<!-- CONTENT WRAPPER -->
			<div class="ec-content-wrapper">
				<div class="content">
					<!-- Top Statistics -->
					<div class="row">
						<div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
							<div class="card card-mini dash-card card-1">
								<div class="card-body">
									<h2 class="mb-1">1,503</h2>
									<p>Daily Signups</p>
									<span class="mdi mdi-account-arrow-left"></span>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
							<div class="card card-mini dash-card card-2">
								<div class="card-body">
									<h2 class="mb-1">79,503</h2>
									<p>Daily Visitors</p>
									<span class="mdi mdi-account-clock"></span>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
							<div class="card card-mini dash-card card-3">
								<div class="card-body">
									<h2 class="mb-1">15,503</h2>
									<p>Daily Order</p>
									<span class="mdi mdi-package-variant"></span>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
							<div class="card card-mini dash-card card-4">
								<div class="card-body">
									<h2 class="mb-1">$98,503</h2>
									<p>Daily Revenue</p>
									<span class="mdi mdi-currency-usd"></span>
								</div>
							</div>
						</div>
					</div>

				

				
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
	<script src="assets/plugins/simplebar/simplebar.min.js"></script>
	<script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
	<script src="assets/plugins/slick/slick.min.js"></script>

	<!-- Chart -->
	<script src="assets/plugins/charts/Chart.min.js"></script>
	<script src="assets/js/chart.js"></script>

	<!-- Google map chart -->
	<script src="assets/plugins/charts/google-map-loader.js"></script>
	<script src="assets/plugins/charts/google-map.js"></script>

	<!-- Date Range Picker -->
	<script src="assets/plugins/daterangepicker/moment.min.js"></script>
	<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
	<script src="assets/js/date-range.js"></script>

	<!-- Option Switcher -->
	<script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

	<!-- Ekka Custom -->
	<script src="assets/js/ekka.js"></script>
</body>

