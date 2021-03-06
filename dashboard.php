<?php 

	session_start();


	if (! isset($_SESSION['user_id'])) {
		header("location: login.php");
	}

	// Get DB connection
	$connection = mysqli_connect("localhost", "root", "", "job_board");

	// Get user login
	$sql = 'SELECT * FROM user WHERE user_id = ' . $_SESSION['user_id'];
	$result = mysqli_query($connection , $sql);
	$user = mysqli_fetch_array($result, MYSQLI_ASSOC);

	$posts = [];
	if ($user['user_role'] == 'Employer') {
		$sql = 'SELECT job.*, user.user_company AS company
			FROM job
			INNER JOIN user
			ON user.user_id = job.user_id
			WHERE user.user_id = ' . $user['user_id']; 
		$posts = mysqli_query($connection , $sql);
	} else {
		$sql= 'SELECT job.*, user.user_company AS company, 
			user.user_email AS email, 
			user.user_contact AS contact 
			FROM job
			INNER JOIN user
			ON user.user_id = job.user_id
			WHERE user.user_id' ; 
		$posts = mysqli_query($connection , $sql);
	}

?>

<header>
	<?php include 'link.php'; ?>
</header>
<!-- NAVBAR -->

<?php include 'nav.php'; ?>

<style>
	.hidbut{
		display: none;
	}
	.loglogout{
		display: inline;
	}	


</style>

<div class="dashboard">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="card profile-card mb-4">
					<img class="card-img-top" src="https://www.drivereasy.com/wp-content/themes/drivereasy/images/user-experienced.jpg">
					<div class="card-body">
						<h5 class="card-title" style="margin-bottom: .25rem;">
							<?= $user['user_firstName'] . ' ' . $user['user_lastName'] ?>
						</h5>
						<p class="card-text font-weight-bold">
							<a class="text-muted text-decoration-none" href="#">
								<?= $user['user_company'] ?>
							</a>
						</p>
					</div>
					<div class="card-body profile-card_description">
						<div class="card-text">
							<strong>Email:</strong> <?= $user['user_email'] ?></div>
						<div class="card-text">
							<strong>Contact:</strong> <?= $user['user_contact'] ?></div>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="mb-4">
					<h4 class="d-inline-block">
						<?= $user['user_role'] == 'Employer' ? 'My Job Posts' : 'Latest Job Posts' ?>
					</h4>
					<a class="float-right" href="job_create.php"
					style="<?=$user['user_role'] != 'Employer' ? 'display:none' : 'none'?>">+ Create Job Post</a>
				</div>

				<?php 
				

					for ($i=0; $i < mysqli_num_rows($posts); $i++) { 
						$post = mysqli_fetch_array($posts, MYSQLI_ASSOC);
						
						?>
						<div class="card job-card mb-3">
							<div class="card-body">
								<div class="row">
									<div class="col-md-8">
										<h5 class="card-title mb-1">
											<a class="text-decoration-none text-dark" href="#">
												<?= $post['job_title']?>
											</a>
										</h5>
										<p class="card-text">
											<a class="text-muted text-decoration-none" href="#">
												<?= $post['company'] ?>
											</a>
											<div style="<?=$user['user_role'] == 'Employer' ? 'display:none' : 'none'?>">
												<a class="text-muted text-decoration-none" href="#">
													Contact Employer at:<br>
													<?= $post['email'] ?>
												</a> <br>
												<a class="text-muted text-decoration-none" href="#">
													<?= $post['contact'] ?>
												</a>
											</div>
										</p>

									</div>
									<div class="col-md-4">
										<h6 class="float-right">
											Salary:&emsp;
											<span class="text-muted font-italic"><?= $post['job_salary'] ?></span>
										</h6>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-12">
										<h6>Description:</h6>
										<p>
											<?= $post['job_description'] ?>
										</p>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<h6>Qualification:</h6>
										<p>
											<?= $post['job_qualification'] ?>
										</p>
									</div>
								</div>
								<div class="row justify-content-center">
									<div class="col-md-4 ">

                        				<button type="submit" 
                        				style="<?=$user['user_role'] != 'Employer' ? 'display:none' : 'none'?>"
                        				class="btn btn-outline-danger btn-sm btn-inline login-button" 
                        				name="update">
                        				<a href="<?='job_update.php?job_id=' . $post['job_id'] ?>">UPDATE</a></button>
                        				<button type="submit" 
                        				style="<?=$user['user_role'] != 'Employer' ? 'display:none' : 'none'?>"
                        				class="btn btn-outline-danger btn-sm btn-inline login-button" 
                        				name="delete" >
                        				<a href="<?='job_delete.php?job_id=' . $post['job_id'] ?>">DELETE</a></button>
                        			</div>
								</div>
							</div>
						</div>		
						<?php
					}

				?>
			</div>
		</div>
	</div>
</div>
 
 <?php include 'footer.php'; ?>
 <?php include 'function.php'; ?>




