<?php session_start(); ?>
<!DOCTYPE html>
<?php 
include('config/dbcon.php');
 if(isset($_POST['signin'])) {
	$username=$_POST['username'];
	$password=md5($_POST['password']);

	$sql ="SELECT * FROM users_gw where user_gw ='$username' AND password ='$password'";
	$query= mysqli_query($conn, $sql);
	$count = mysqli_num_rows($query);
	if($count==1)
	{
		while ($row = mysqli_fetch_array($query)) {
			if ($row['user_access'] == '1') {
					$_SESSION['emp_id']=$row['emp_id']; 
					$_SESSION['first_name']=$row['first_name'];
					$_SESSION['last_name']=$row['last_name'];
					$_SESSION['mid_name']=$row['mid_name'];
					$_SESSION['ext_name']=$row['ext_name'];
					$_SESSION['user_stat']=$row['user_stat'];
			echo "<script type='text/javascript'> document.location = 'update.php'; </script>";
			}
			elseif ($row['user_access'] == '2') {
					$_SESSION['emp_id']=$row['emp_id']; 
					$_SESSION['first_name']=$row['first_name'];
					$_SESSION['last_name']=$row['last_name'];
					$_SESSION['mid_name']=$row['mid_name'];
					$_SESSION['ext_name']=$row['ext_name'];
					$_SESSION['user_stat']=$row['user_stat'];
			echo "<script type='text/javascript'> document.location = 'main.php'; </script>";
			} 
  		}
	} 
	else { echo "<script>alert('Invalid Username or Password'); window.location = './index.php';</script>"; }
}
?>
<html lang="en">
<head>
	<title>MIMAROPA Pantawid Gateway</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendors/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendors/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/vendors/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendors/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendors/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/vendors/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	<div class="limiter">
		<div class="container-login100">		
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title p-b-43">

						<img src="assets/images/logo.png" width="480px" />
					</span>
					<div class="wrap-input100 validate-input" data-validate = "Valid username is required!">
						<input class="input100" type="text" name="username">
						<span class="focus-input100"></span>
						<span class="label-input100">Username</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>
					</div>
			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="signin" id="signin">
							Login
						</button>
					</div>
					
					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							or request for portal account
						</span>
					</div>
					<div class="container-login100-form-btn">
						<button type="button" onclick="location.href='includes/user_ver.php'" class="btn btn-warning">Request for Portal Account</button>
					</div>
				</form>
				<div class="login100-more" style="background-image: url('assets/images/bg-01.jpg');">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="assets/vendors/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendors/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendors/bootstrap/js/popper.js"></script>
	<script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendors/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendors/daterangepicker/moment.min.js"></script>
	<script src="assets/vendors/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendors/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="assets/js/main.js"></script>

</body>
</html>