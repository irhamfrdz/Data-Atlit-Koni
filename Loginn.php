<?php $this->load->library('session');?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>LOGIN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url('theme/login/images/icons/favicon.ico')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('theme/login/vendor/bootstrap/css/bootstrap.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('theme/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('theme/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('theme/login/vendor/animate/animate.css')?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('theme/login/vendor/css-hamburgers/hamburgers.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('theme/login/vendor/animsition/css/animsition.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('theme/login/vendor/select2/select2.min.css')?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('theme/login/vendor/daterangepicker/daterangepicker.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('theme/login/css/util.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('theme/login/css/main.css')?>">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('theme/login/images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					LOGIN
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5"  action="<?php echo base_url('login/action_login'); ?>" method="post">

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="User name">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
                    <input type="submit" class="btn btn-primary btn-login" name="login" value="Login">
					</div>

				</form>
				<br><center><p>Repost by <a href='https://stokcoding.com/' title='StokCoding.com' target='_blank'>StokCoding.com</a></p></center>
				
			</div>
		</div>
	</div>
		
<!--===============================================================================================-->
	<script src="<?php echo base_url('theme/login/vendor/jquery/jquery-3.2.1.min.js')?>"> </script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('theme/login/vendor/animsition/js/animsition.min.js')?>"> </script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('theme/login/vendor/bootstrap/js/popper.js')?>"> </script>
	<script src="<?php echo base_url('theme/login/vendor/bootstrap/js/bootstrap.min.js')?>"> </script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('theme/login/vendor/select2/select2.min.js')?>"> </script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('theme/login/vendor/daterangepicker/moment.min.js')?>"> </script>
	<script src="<?php echo base_url('theme/login/vendor/daterangepicker/daterangepicker.js')?>"> </script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('theme/login/vendor/countdowntime/countdowntime.js')?>"> </script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('theme/login/js/main.js')?>"> </script>

</body>
</html>

