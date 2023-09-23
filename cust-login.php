<?php
include('header.php');
include('config.php');

if(isset($_POST["login"]))
{


$email = $_POST["email"];
$password = md5($_POST["password"]);

$query = "SELECT * FROM `customer_login` WHERE `email` = '$email' AND `password` = '$password'";

$result =  mysqli_query($conn,$query);

$row = mysqli_fetch_assoc($result);

if(mysqli_num_rows($result)>0)
{
 
        $_SESSION["customer"] = $email;
        $_SESSION["customer_name"] = $row['username'];
        $_SESSION["customerid"] = $row["cust_id"];
       
    if(!isset($_SESSION['cart']) && isset($_POST['login'])){
      echo "<script> window.location.href='index.php'</script>";
    }    
        
     else{
      echo "<script> window.location.href='checkout.php'</script>";
     }

    
}
else
{
    echo "Incorrect credentials";
}




}

?>
<div class="row">
<div class="col-lg-6 offset-md-3 bg-light p-5 mt-5 mb-5" >
              <form action="" method="POST">
                <div class="row gy-3">
                    <h3 class="text-center">Login</h3>
                  <div class="col-lg-12">
                    <label class="form-label text-sm text-uppercase" for="firstName">Email</label>
                    <input class="form-control form-control-lg" type="text" name="email" placeholder="Enter email" required>
                  </div>
                  
                  <div class="col-lg-12">
                    <label class="form-label text-sm text-uppercase" for="phone">Password</label>
                    <input class="form-control form-control-lg" type="password" name="password" placeholder="Enter password" required>
                  </div>
                  
                 
                  <div class="col-lg-12 form-group">
                    <input type="submit" class="btn btn-dark" name="login" value="Login">
                  </div>
                  <p>Don't have an account? 
                    <a href="cust-register.php">Sign up</a>
                  </p>
                </div>
              </form>
            </div>

</div>


<?php 
    include('footer.php');
?>