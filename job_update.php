<?php 
session_start();
if (! isset($_SESSION['user_id'])) {
	header("location: login.php");
}

$connection = mysqli_connect("localhost", "root", "", "job_board");

$sql = 'SELECT * FROM user WHERE user_id = ' . $_SESSION['user_id'];

$result = mysqli_query($connection , $sql);
$user = mysqli_fetch_array($result, MYSQLI_ASSOC);


if(isset($_POST["submit"])){
	$job_title = $_POST['job_title'];
	$job_id = $_POST['job_id'];
	$job_salary = $_POST['job_salary'];
	$job_description = $_POST['job_description'];
	$job_qualification = $_POST['job_qualification'];

	// Update job post WHERE user_id is equal to login user id and job_id is equal to submitted job_id
	$query = "UPDATE job SET job_title = '$job_title', job_salary = '$job_salary', job_description = '$job_description', job_qualification = '$job_qualification' WHERE user_id = " . $_SESSION['user_id'] . " AND job_id = '$job_id'";

	$result = mysqli_query($connection , $query);

	if(!$result){
		die("Query failed" . mysqli_error($connection));
	}
	else{
		
		header("location: dashboard.php");
		return;
	}
}


$sql = "SELECT * FROM job WHERE user_id = " . $user['user_id'] . " AND job_id = " . $_GET['job_id'];
$posts = mysqli_query($connection, $sql);

// This is the checker if job_id is passed to URL, if not, redirect back to page_not_found.php
// else continue
if (! isset($_GET['job_id']) || mysqli_num_rows($posts) == 0) {
	header('location: page_not_found.php');
}

// Retrieve job post
$post = mysqli_fetch_array($posts, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Update a Job Post</title>

<?php include 'link.php'; ?>


</head>
<body>
<!-- NAVBAR -->
	<?php include 'nav.php'; ?>
	<style>
	.hidbut{
		display: none;
	}
</style>

<div id="jobupda" class="container" style="margin-top: 80px; width: auto;">
<div class="row justify-content-center">
	<div class="col-md-8">
         <div class="card">
            <div class="card-header"><h1> Update Job Post</h1></div>
                    <div class="card-body">
						<form class="form-horizontal" method="post" action="job_update.php">
							<div class="row">
								<div class="col-md-12">

                                	<div class="form-group">
		                                <label for="job_title" class="cols-sm-2 control-label">Job title</label>
		                                	 <select name="job_title"class="form-control form-control-sm" required>
		                                	 
			                        		<?php include 'jobtitles.php'; ?>

			                                </select>
                           		 	</div>
                                </div>
                            </div>
                            <input type="hidden" 
							    	name="job_id"
							    	value="<?= $_GET['job_id'] ?>">
							    	
                            <div class="row">
                            	<div class="col-md-12">
                                	<label for="job_salary" class="control-label">Salary range:</label>
                                    <select name="job_salary"
                                    class="form-control " 
                                    required>
                                    <?php
                                    $jobSalary = ['< 10,000.00', '10,000.00 - 20,000.00', '20,000.00 - 30,000.00','30,000.00 - 40,000.00', '40,000.00 <'];

                                    foreach($jobSalary as $salary){
                                    	
                                    	if($salary != $post['job_salary']){
                                    		echo '<option>' . $salary . '</option>';
                                    	}
                                    	else{
                                    		echo '<option selected>' . $salary . '</option>';
                                    	}
                                    }
                                    ?>

	                                </select>
	                            </div>    
                            </div>
                            <div class="row">
                            	<div class="col-md-12">
							    	<label for="job_description">Job Description</label>
							    	<textarea name="job_description" 
							       	class="form-control" 
							    	id="job_description" 
							    	rows="3" 
							    	placeholder="Describe the job you're offering" required><?= $post ['job_description']?></textarea>
							  	</div>
							</div>  	
							<div class="row">
								<div class="col-md-12">
							    	<label for="job_qualification">Job Qualification</label>
							    	<textarea name="job_qualification"
							    	class="form-control" 
							    	id="job_qualification" 
							    	rows="3" 
							    	placeholder="What are the qualifications for this job?" required><?= $post ['job_qualification']?></textarea>

							  	</div>
							</div>
							<div class="row mt-3">
								<div class="col-md-12">
                        			<button type="submit" class="btn btn-primary btn-block login-button" name="submit" value="submit">Update Post</button>

                        		</div>
                        	</div>
						</form>
					</div>
				</div>
		</div>
	</div>
</div>

<?php include 'function.php'; ?>


</body>
</html>