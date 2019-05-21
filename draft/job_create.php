<?php 
session_start();
session_destroy();
$connection = mysqli_connect("localhost", "root", "", "job");

if(isset($_POST["submit"])){
	$job_title = $_POST['job_title'];
	$job_salary = $_POST['job_salary'];
	$job_description = $_POST['job_description'];
	$job_qualification = $_POST['job_qualification'];


$query = "INSERT INTO job (job_title, job_salary, job_description, job_qualification) VALUES  ('$job_title', '$job_salary', '$job_description', '$job_qualification')";

			
			
			$result = mysqli_query($connection , $query);

			if(!$result){
				die("Query failed" . mysqli_error());
			}

			// echo "You have successfully posted a job! ";
}

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<title>Post a Job</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div class="container">
<div class="row justify-content-center">
	<div class="col-md-8">
         <div class="card">
                <div class="card-header"><h1>Post a Job</h1></div>
                    <div class="card-body">
						<form class="form-orizontal" method="post" action="job_create.php">
							<div class="form-group">
                                <label for="job_title" class="cols-sm-2 control-label">Job title</label>
                                	 <select name="job_title"class="form-control form-control-sm" required>

										<!-- Cloud Computing Engineers -->
	                                    <option>Cloud Computing Engineers</option><option>Cloud Architect
	                                    </option><option>Cloud Product and Project Manager</option><option>Cloud Services Developer</option><option>Cloud Software and Network Engineer</option><option>Cloud System Administrator</option><option>Cloud System Engineer</option>

	                                   <!--  Computer Network Specialists -->

	                                    <option>Computer Network Specialists</option><option>Computer and Information Research Scientist
	                                    </option><option>Computer and Information Systems Manager</option><option>Computer Network Architect</option><option>Computer Systems Analyst</option><option>Computer Systems Manager</option><option>IT Analyst</option><option>IT Coordinator</option><option>Network Administrator
	                                    </option><option>Network Architect</option><option>Network and Computer Systems Administrator</option><option>Network Engineer</option><option>Network Systems Administrator</option><option>Senior Network Architect</option><option>Senior Network Engineer</option><option>Senior Network Systems Administrator</option><option>Telecommunications Specialist</option>

	                                    <!-- Computer support specialists and network  -->

	                                    <option>Computer Support Specialist</option><option>Customer Support Administrator
	                                    </option><option>Customer Support Specialist</option><option>Desktop Support Manager</option><option>Desktop Support Specialist</option><option>Help Desk Specialist</option><option>Help Desk Technician</option><option>IT Support Manager</option><option>IT Support Specialist
	                                    </option><option>IT Systems Administrator</option><option>Senior Support Specialist</option><option>Senior System Administrator</option><option>Support Specialist</option><option>Technical Specialist</option><option>Systems Administrator</option><option>Technical Support Engineer</option><option>Technical Support Specialist</option>

	                                   <!--  Database Administrator -->

	                                    <option>Database Administrator</option><option>Data Center Support Specialist
	                                    </option><option>Data Quality Manager</option><option>Senior Database Administrator</option>

	                                    <!-- Information Technology Analysts -->

	                                    <option>Information Technology Analysts</option><option>Application Support Analyst</option><option>Senior System Analyst</option><option>IT Support Manager</option><option>Systems Analyst
	                                    </option><option>Systems Designer</option>

	                                    <!-- Information Technology LeaderShip -->

	                                    <option>Chief Information Officer (CIO)</option><option>Chief Technology Officer (CTO)</option><option>Director of Technology</option><option>IT Director</option><option>IT Manager</option><option>Management Information Systems Director</option><option>Technical Operations Officer</option>

	                                    <!-- Information  Security Specialist -->

	                                    <option>Information Security</option><option>Security Specialist
	                                    </option><option>Senior Security Specialist</option>

	                                    <!-- Software Application Developer -->

	                                    <option>Software/Application Developer</option><option>Application Developer</option><option>Applications Engineer</option><option>Associate Developer</option><option>Developer</option><option>Computer Programmer
	                                    </option><option>Java Developer</option><option>Junior Software Engineer</option><option>Senior .NET Developer</option><option>Programmer</option><option>Programmer Analyst</option><option>Senior Applications Engineer</option><option>Senior Programmer</option><option>Senior Programmer Analyst</option><option>Senior Software Engineer</option><option>Senior System Architect</option><option>Senior System Designer</option><option>Senior Systems Software Engineer</option><option>Software Architect</option><option>Software Developer
	                                    </option><option>Software Engineer</option><option>Software Quality Assurance Analyst</option><option>System Architect</option><option>Systems Software Engineer</option>

	                                    <!-- Web Developer -->

	                                    <option>Web developer</option><option>Back End Developer</option><option>Front End Developer</option><option>Full Stack Developer</option><option>Senior Web Administrator</option><option>Senior Web Developer</option><option>Web Administrator</option><option>Web Developer</option><option>Webmaster</option>
	                                </select>

								<!-- <div class="cols-sm-10">
                                        <div class="input-group">
                                        	<input type="text" class="form-control" name="job_title" id="job_title" placeholder="Enter the job title of your post" required>
                                        </div>
                                    </div> -->
                            </div>
                            <div class="form-group">
                                <label for="job_salary" class="cols-sm-2 control-label">Salary range:</label>
                                    <select name="job_salary"class="form-control form-control-sm" required>
	                                    <option>< 10,000.00</option>
	                                    <option>10,000.00 - 20,000.00</option>
	                                    <option>20,000.00 - 30,000.00</option>
	                                    <option>30,000.00 - 40,000.00</option>
	                                    <option>40,000.00 <</option>                                              
                                    </select>
                            </div>
                            <div class="form-group">
							    <label for="job_description">Job Description</label>
							    	<textarea name="job_description" class="form-control" id="job_description" rows="3" placeholder="Describe the job you're offering" required></textarea>
							  	</div>
							<div class="form-group">
							    <label for="job_qualification">Job Qualification</label>
							    	<textarea name="job_qualification" class="form-control" id="job_qualification" rows="3" placeholder="What are the qualifications for this job?" required=""></textarea>
							  	</div>




                        <div class="form-group ">
                        <button type="submit" class="btn btn-primary btn-lg btn-block login-button" name="submit" value="submit">Post Job</button>
                        </div>
						</form>
					</div>
				</div>
		</div>
	</div>
</div>
</div>


</body>
</html>