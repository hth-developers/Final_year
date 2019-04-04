<?php
if (isset($_GET["register"])) {
	
	?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Crystal Furniture</title>
		 <!-- Font Awesome -->
		 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Material Design Bootstrap -->
		<link href="css/mdb.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style.css">
		<!-- MDBootstrap Cards Extended Pro  -->
		<link href="css/addons-pro/cards-extended.min.css" rel="stylesheet">
	</head>
<body>


	<div >
	<div class="row">
				<div class="col-md-4">	</div>
					
			
		<div class="col-md-4">
		<div class="my-5">
		<!-- Material form register -->
			<div class="card card-form mt-2 mb-4" id="signup_msg">

			<!--Card content-->
			<div class="card-body rounded-top pink darken-4">

				<h3 class="font-weight-bold text-center text-uppercase text-white mt-4">Sign up</h3>

				<!-- Form -->

				<form id="signup_form" class="pb-3 px-2"onsubmit="return false">

					<!-- First name -->
					<div class="md-form">
						<i class="far fa-user prefix text-white"></i>
						<input type="text" id="f_name" name="f_name" class="form-control text-white">
						<label class="text-white" for="f_name">First name</label>
					</div>
					<!-- Last name -->
					<div class="md-form">
						<i class="far fa-hand-point-right prefix text-white"></i>
						<input type="text" id="l_name" name="l_name" class="form-control text-white">
						<label class="text-white" for="l_name">Last name</label>
					</div>

					<!-- E-mail -->
					<div class="md-form mt-0">
						<i class="far fa-envelope prefix text-white"></i>
						<input type="email" id="email" name="email" class="form-control text-white">
						<label class="text-white" for="email">E-mail</label>
					</div>

					<!-- Password -->
					<div class="md-form">
						<i class="far fa-star prefix text-white"></i>
						<input type="password" id="password" name="password" class="form-control text-white" aria-describedby="materialRegisterFormPasswordHelpBlock">
						<label class="text-white" for="password">Password</label>
						
					</div>
					<div class="md-form">
						<i class="far fa-star prefix text-white"></i>
						<input type="password" id="repassword" name="repassword" class="form-control text-white" aria-describedby="materialRegisterFormPasswordHelpBlock">
						<label class="text-white" for="repossword">Re-enter Password</label>
						
					</div>

					<div class="md-form">
						<i class="far fa-user prefix text-white"></i>
						<input type="text" id="mobile" name="mobile" class="form-control text-white">
						<label class="text-white" for="mobile">Mobile</label>
					</div>

					<div class="md-form">
						<i class="far fa-user prefix text-white"></i>
						<input type="text" id="address1" name="address1" class="form-control text-white">
						<label class="text-white" for="address1">Address Line 1</label>
					</div>

					<div class="md-form">
						<i class="far fa-user prefix text-white"></i>
						<input type="text" id="address2" name="address2" class="form-control text-white">
						<label class="text-white" for="address2">Address Line 2</label>
					</div>

				<!-- Form -->

			</div>

			<div class="card card-form-2 mb-0 z-depth-0">
			<div class="card-body text-center">

				
				<!-- Newsletter -->
				<div class="form-check my-3">
					<label class="form-check-label" for="materialRegisterFormNewsletter">Subscribe to our newsletter</label>
				</div>

				<!-- Sign up button -->
				<button class="btn btn-outline-red-accent btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign up</button>

				</form>
				<!-- Social register -->
			

				<hr>

				<!-- Terms of service -->
				<p>By clicking
					<em>Sign up</em> you agree to our
					<a class="pink-accent-text" href="#!" target="_blank">terms of service</a> and
					<a class="pink-accent-text" href="#!" target="_blank">terms of service</a>. </p>

				
				<!-- Form -->

			</div>
			</div>

			</div>
			<!-- Material form register -->
	</div>

	</div>
	</div>

	</div>
		  <!--  SCRIPTS  -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script>
        new WOW().init();
    </script>

</body>
</html>
	<?php
}



?>






















