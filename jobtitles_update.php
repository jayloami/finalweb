$sql = "SELECT * FROM job WHERE user_id = " . $user['user_id'] . " AND job_id = " . $_GET['job_id'];
$posts = mysqli_query($connection, $sql);

// This is the checker if job_id is passed to URL, if not, redirect back to page_not_found.php
// else continue
if (! isset($_GET['job_id']) || mysqli_num_rows($posts) == 0) {
	header('location: page_not_found.php');
}

// Retrieve job post
$post = mysqli_fetch_array($posts, MYSQLI_ASSOC);
$jobTitle = ['Cloud Computing Engineers', 'Cloud Architect', 'Cloud Product and Project Manager', 'Cloud Services Developer', 'Cloud Software and Network Engineer', 'Cloud System Administrator', 'Cloud System Engineer', 'Computer Network Specialists', 'Computer and Information Research Scientist', 'Computer and Information Systems Manager', 'Computer Network Architect', 'Computer Systems Analyst', 'Computer Systems Manager', 'IT Analyst', 'IT Coordinator', 'Network Administrator', 'Network Architect', 'Network and Computer Systems Administrator', 'Network Engineer', 'Network Systems Administrator', 'Senior Network Architect', 'Senior Network Engineer', 'Senior Network Systems Administrator', 'Telecommunications Specialist', 'Computer Support Specialist', 'Customer Support Administrator', 'Customer Support Specialist', 'Desktop Support Manager', 'Desktop Support Specialist', 'Help Desk Specialist', 'Help Desk Technician', 'IT Support Manager', 'IT Support Specialist', 'IT Systems Administrator', 'Senior Support Specialist', 'Senior System Administrator', 'Support Specialist', 'Technical Specialist', 'Systems Administrator', 'Technical Support Engineer', 'Technical Support Specialist', 'Database Administrator', 'Data Center Support Specialist ', 'Data Quality Manager', 'Senior Database Administrator', 'Information Technology Analysts', 'Application Support Analyst', 'Senior System Analyst', 'IT Support Manager', 'Systems Analyst', 'Systems Designer', 'Chief Information Officer (CIO)', 'Chief Technology Officer (CTO)', 'Director of Technology', 'IT Director', 'IT Manager', 'Management Information Systems Director', 'Technical Operations Officer', 'Information Security', 'Security Specialist', 'Senior Security Specialist', 'Software/Application Developer', 'Application Developer', 'Applications Engineer', 'Associate Developer', 'Developer', 'Computer Programmer', 'Java Developer', 'Junior Software Engineer', 'Senior .NET Developer', 'Programmer', 'Programmer Analyst', 'Senior Applications Engineer', 'Senior Programmer', 'Senior Programmer Analyst', 'Senior Software Engineer', 'Senior System Architect', 'Senior System Designer', 'Senior Systems Software Engineer', 'Software Architect', 'Software Developer', 'Software Engineer', 'Software Quality Assurance Analyst', 'System Architect', 'Systems Software Engineer', 'Web developer', 'Back End Developer', 'Front End Developer', 'Full Stack Developer', 'Senior Web Administrator', 'Senior Web Developer', 'Web Administrator', 'Web Developer', 'Webmaster'];

										foreach($jobTitle as $title){
                                    	
                                    	if($title != $post['job_title']){
                                    		echo '<option>' . $title . '</option>';
                                    	}
                                    	else{
                                    		echo '<option selected>' . $title . '</option>';
                                    	}
                                    }


                                    
			                                    
			                                    