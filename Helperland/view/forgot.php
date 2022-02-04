<?php
		$conn = mysqli_connect('localhost','root','','helperland');

		 if(!$conn){
		 	die('database connection failed'.mysqli_connect_error());
		 }
		 else{
		 	echo "success";
		 }

	if (isset($_POST['Save'])) {

		$Password = $_POST['password'];
		$confirmpassword = $_POST['confirmPassword'];

		$query ="UPDATE user SET Password='$password'";
		$result= mysqli_query($conn,$query);
	}

?>


 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    input:disabled {
    background: #eee;
}


.validate_cus {
	color: #a94442;
	font-size: small;
  }
</style>
<body>
			
			<div class="container" style="height: 30px; width: 370px;">	
				<form action="forgot.php" method="post" id="signup-form">
					<h3 class="" style="margin: 17px 0 17px 0;">Forgot Password from</h3>
					
					<label for="" style="color: grey;font-weight: bold;">New Password</label>
					<input type="text" class="form-control" name="password" id="password_reg" placeholder="Password" required>
        			<span class="glyphicon form-control-feedback" id="password_reg1"></span>

        <br>
					<label for="" style="color: grey;font-weight: bold;">Confirm Password</label>
					<input type="text" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password" required >
       				 <span class="glyphicon form-control-feedback" id="confirmPassword1"></span><br>
					<button type="Submit"  style="margin-top: 16px;" class="btn-primary" value="Save"><a href="home.php" style="text-decoration: none; color: white;">Save </a></button>
				<!-- 	</a> -->
				</form>
			</div>
			
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.1/jquery.validate.min.js"></script>
	<script src="assets\js\first.js"></script>
</body>
</html>