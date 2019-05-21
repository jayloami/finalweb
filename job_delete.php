<?php 
session_start();
if (! isset($_SESSION['user_id'])) {
	header("location: login.php");
}


$connection = mysqli_connect("localhost", "root", "", "job_board");

$sql = 'SELECT * FROM user WHERE user_id = ' . $_SESSION['user_id'];

$result = mysqli_query($connection , $sql);
$user = mysqli_fetch_array($result, MYSQLI_ASSOC);

if(isset($_POST['delete'])){

		$job_id = $_POST['job_id'];
		$query = "DELETE FROM job WHERE user_id = " . $_SESSION['user_id'] ."  AND job_id = " . $job_id ;
		$result = mysqli_query($connection, $query);
		
	if(!$result){
		die("Query failed" . mysqli_error($connection));
	}
	else{
		header("location: dashboard.php");
		return;
	}

	$sql = "SELECT * FROM job WHERE user_id = " . $user['user_id'] . " AND job_id = " . $_GET['job_id'];
	$posts = mysqli_query($connection, $sql);
	if (! isset($_GET['job_id']) || mysqli_num_rows($posts) == 0) {
	// header('location: page_not_found.php');

	$post = mysqli_fetch_array($posts, MYSQLI_ASSOC);
}
}

?>
<?php include 'link.php'; ?>
<?php include 'nav.php'; ?>
<style>
.hidbut{
		display: none;
	}	
.btn-outline-danger{
	padding: 20px;
}	
</style>
<div class="container" style="margin-top: 200px; margin-bottom: 120px;">
  <div class="row justify-content-center">
	<div class="col-md-8">
         <div class="card">
           <div class="card-header justify-content-center"><h1 style="text-align: center;"> Are you sure you want to delete?</h1></div>
                    <div class="card-body">
						<form class="form-horizontal" method="post" action="job_delete.php">
							<div class="row">
								<div class="col-md-12">

									<div class="row justify-content-center">
										<div class="butdel col-md-4"  style="align-content: center;">
											<input type="hidden" 
							    			name="job_id"
							    			value="<?= $_GET['job_id'] ?>">

	                        				<button type="submit" class="btn btn-outline-danger btn-sm btn-inline login-button" name="delete">Yes</button>
	                        				<button type="submit" class="btn btn-outline-danger btn-sm btn-inline login-button" name="back" value="no">No</button>
	                        			</div>
									</div>
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