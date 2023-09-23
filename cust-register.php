<?php
session_start();
ob_start();



include "config.php";


if (isset($_POST["register"])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);



	$query = "INSERT INTO `customer_login`(`username` ,`email`, `password`) 
    VALUES ('$username','$email','$password')";


    $result = mysqli_query($conn, $query);

    if($result){
      
      $_SESSION['customer'] = $email;
      $_SESSION["customerid"] = mysqli_insert_id($conn);
      header("location:cust-login.php");
    }
    else{
        echo "Query Failed";
    }

}


?>
<?php

include('header.php');

?>


<div class="row">
<div class="col-lg-6 offset-md-3 bg-light p-5 mt-5 mb-5" >
              <form action="" method="POST">
                <div class="row gy-3">
                    <h3 class="text-center">Register</h3>
                  <div class="col-lg-12">
                    <label class="form-label text-sm text-uppercase" for="firstName">Full name</label>
                    <input class="form-control form-control-lg" type="text" name="username" placeholder="Enter username or email" required>
                  </div>

                  <div class="col-lg-12">
                    <label class="form-label text-sm text-uppercase" for="firstName">Email</label>
                    <input class="form-control form-control-lg" type="text" name="email" placeholder="Enter email" required>
                  </div>
                  
                  <div class="col-lg-12">
                    <label class="form-label text-sm text-uppercase" for="phone">Password</label>
                    <input class="form-control form-control-lg" type="password" name="password" placeholder="Enter password" required>
                  </div>
                  
                 
                  <div class="col-lg-12 form-group">
                    <input class="btn btn-dark" type="submit" name="register" value="Register">
                  </div>
                </div>
              </form>
            </div>

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