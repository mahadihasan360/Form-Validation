<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	



<?php

// form isset with validation

if(isset($_POST["signup"])){

// form value get
$name = $_POST["name"] . "<br>";
$email = $_POST["email"] . "<br>";
$cell = $_POST["cell"] . "<br>";
$uname = $_POST["uname"] . "<br>";


// fill require
if(empty($_POST["name"])){
$error["name"] = "<p style='color:red'>*Required</p>";
}
if(empty($_POST["email"])){
$error["email"] = "<p style='color:red'>*Required</p>";
}
if(empty($_POST["cell"])){
$error["cell"] = "<p style='color:red'>*Required</p>";
}
if(empty($_POST["uname"])){
$error["uname"] = "<p style='color:red'>*Required</p>";
}





if(empty($_POST["name"]) or empty($_POST["email"]) or empty($_POST["cell"]) or empty($_POST["uname"])){

	$msg = "<p class='alert alert-danger'>All fields are required <button class='close'; data-dismiss='alert'>&times;</button> <p>";

}else if(filter_var($email, FILTER_VALIDATE_EMAIL) == false){

$msg = "<p class='alert alert-warning'>Invalid Email Address <button class='close'; data-dismiss='alert'>&times;</button> <p>";

}else{
$msg = "<p class='alert alert-success' style='color:green'>Successfully SignUp <button class='close'; data-dismiss='alert'>&times;</button> <p>";
}


}
?>

	

	

<div class="wrap shadow">
	<div class="card">
		<div class="card-body">
			<h2>Sign Up</h2>
			<?php
			if(isset($msg)){
				echo $msg;
			}
			?>
			<form action="" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label for="">Name</label>
					<input name="name" class="form-control" type="text">
					<?php
					if(isset($error["name"])){
						echo $error["name"];
					}
					?>
				</div>
				<div class="form-group">
					<label for="">Email</label>
					<input name="email" class="form-control" type="text">
					<?php
					if(isset($error["email"])){
						echo $error["email"];
					}
					?>
				</div>
				<div class="form-group">
					<label for="">Cell</label>
					<input name="cell" class="form-control" type="text">
					<?php
					if(isset($error["cell"])){
						echo $error["cell"];
					}
					?>
				</div>
				<div class="form-group">
					<label for="">Username</label>
					<input name="uname" class="form-control" type="text">
					<?php
					if(isset($error["uname"])){
						echo $error["uname"];
					}
					?>
				</div>
				<div class="form-group">
					<input name="signup" class="btn btn-primary" type="submit" value="Sign Up">
				</div>
			</form>
		</div>
	</div>
</div>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>