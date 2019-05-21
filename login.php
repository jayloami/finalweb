<?php

session_start();
//commands page to store data for later use

if (isset($_SESSION['user_id'])) {
	header("location: dashboard.php");
}
//if session has user_id that matches any user_id in the data base, page will redirect to dashboard.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
//if server will get information with form method assigned 'post', the following commands would follow:
	$connection = mysqli_connect("localhost", "root", "", "job_board");
	//variable that establishing connection with the database

	$user_email = mysqli_real_escape_string($connection, $_POST['user_email']);
	// variable which is initiae escape of special characters in the email form;

	$sql = "SELECT * FROM user WHERE user_email = '$user_email'";
	
	$result = mysqli_query($connection , $sql);
	
	for ($i = 0; $i < mysqli_num_rows($result); $i++) { 
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

		if(password_verify($_POST['user_password'], $row['user_password']))
		{
			// Pass user id to use on validation and CRUD
			$_SESSION['user_id'] = $row['user_id'];

			header("location: dashboard.php");
		}
	}

	echo "<script>alert('Your Email or Password is invalid')</script>";

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<?php include 'link.php'; ?>

</head>
<body>
	<!-- NAV-BAR -->
	<?php include 'nav.php'; ?>

	<div class="container" style="margin-top: 100px; width: 500px;">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header"><h1>Login</h1></div>
					<div class="card-body">
						<form class="form-horizontal" 
							method="post" 
							action="login.php">
							<div class="row">
								<div class="col-md-12">
									<label for="email" class="control-label">Your Email</label>
									<input type="email" 
										value="<?= isset($_POST['user_email'])? $_POST['user_email'] : '' ?>"
										class="form-control" 
										name="user_email" 
										id="user_email" 
										placeholder="Enter your Email" required/>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<label for="password" class="control-label">Password</label>
									<input type="password"
										value="<?= 
											// isset($_POST['user_password']) 
											// ? $_POST['user_password'] 
											// : '' 
											'' ?>"
										class="form-control"
										name="user_password"
										id="password"
										placeholder="Enter your Password" 
										required/>
								</div>
							</div>
							<div class="row mt-3">
								<div class="col-md-12">
									<button type="submit" class="btn btn-primary btn-block login-button" name="submit" value="submit">Login</button>
								</div>
							</div>
							<div class="row mt-4">
								<div class="col-md-12 text-center">
									<a href="usersignup.php">Not yet registered? Sign up here.</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include 'footer.php'; ?>
	<?php include 'function.php'; ?>
</body>
</html>