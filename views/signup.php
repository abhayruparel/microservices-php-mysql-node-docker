<?php
session_start();
?>
<?php
$conn = new mysqli("localhost", "root", "", "tea_store");
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}


if (isset($_POST['submit'])) {
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	//$password_confirm = $_POST['password_confirm'];
	$sql = "INSERT INTO register(first_name,last_name,email,password) values('$first_name','$last_name','$email','$password')";
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
		header("location: signin.php");
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
}
?>
<html>

<head>
	<title>Registration
	</title>
	<link rel="stylesheet" href="style.css">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
	<div class="container">
		<div class="row centered-form">
			<div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Sign Up for</h3>
					</div>
					<div class="panel-body">
						<form role="form" method="post">
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name">
									</div>
								</div>
							</div>

							<div class="form-group">
								<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
							</div>

							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="password" name="password_confirm" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
									</div>
								</div>
							</div>

							<input type="submit" value="Register" class="btn btn-info btn-block" name="submit">
							<p>If you have already sign up then click on sign in <a href="signin.php">Sign In</a></p>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>