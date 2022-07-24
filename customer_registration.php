<?php
if (isset($_GET["register"])) {

?>

	<!DOCTYPE html>
	<html>

	<head>
		<meta charset="UTF-8">
		<title>Ecommerce</title>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
		<div class="wait overlay">
			<div class="loader"></div>
		</div>
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="index.php" class="navbar-brand">Ecommerce Site</a>
				</div>
				<ul class="nav navbar-nav">
					<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
					<li><a href="index.php"><span class="glyphicon glyphicon-modal-window"></span> Product</a></li>
				</ul>
			</div>
		</div>
		<p><br /></p>
		<p><br /></p>
		<p><br /></p>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8" id="signup_msg">
					<!--Alert from signup form-->
				</div>
				<div class="col-md-2"></div>
			</div>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<div class="panel panel-primary">
						<div class="panel-heading text-center">Customer Registration Form</div>
						<div class="panel-body">

							<form id="signup_form" onsubmit="return false">
								<div class="row">
									<div class="col-md-6">
										<label for="f_name">First Name</label>
										<input type="text" id="f_name" name="f_name" class="form-control" required>
									</div>
									<div class="col-md-6">
										<label for="f_name">Last Name</label>
										<input type="text" id="l_name" name="l_name" class="form-control" required>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<label for="email">Email</label>
										<input type="text" id="email" name="email" class="form-control" required>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<label for="password">Password</label>
										<input type="password" id="password" name="password" class="form-control" required>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<label for="repassword">Confirm Password</label>
										<input type="password" id="repassword" name="repassword" class="form-control" required>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<label for="mobile">Contact Number</label>
										<input type="text" id="mobile" name="mobile" class="form-control" required>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<label for="address1">Address 1</label>
										<input type="text" id="address1" name="address1" class="form-control" required>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<label for="address2">Address 2</label>
										<input type="text" id="address2" name="address2" class="form-control" required>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<label for="cardNumber">Card Number</label>
										<input type="text" placeholder="0000 0000 0000 0000" size="18"  minlength="16" maxlength="16" class="form-control" id="cardNumber" name="cardNumber">

									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<label for="exp_month">Expiration Month</label>
										<input type="text"  placeholder="MM" class="form-control" minlength="1" maxlength="2"   size="2" id="exp_month" name="exp_month">

									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<label for="exp_year">Expiration Year</label>
										<input type="text" placeholder="YYYY" class="form-control" minlength="1" maxlength="4"  size="4" id="exp_year" name="exp_year">

									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<label for="cvv">CVV</label>
										<input type="password" class="form-control" placeholder="000" size="1" minlength="3" maxlength="3" id="cvv" name="cvv">
									</div>
								</div>
								<p><br /></p>
								<div class="row">
									<div class="col-md-12">
										<input style="width:100%;" value="Sign Up" type="submit" name="signup_button" class="btn btn-success btn-lg">
									</div>
								</div>

						</div>
						</form>
						<div class="panel-footer"></div>
					</div>
				</div>
				<div class="col-md-2"></div>
			</div>
		</div>
	</body>

	</html>
<?php
}



?>