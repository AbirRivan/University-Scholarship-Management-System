<html lang="en">
  <head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="description" content="About the site"/>
      <meta name="author" content="Author name"/>
      <title> THE TITLE </title>
    
      <!-- core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet"/>
      <link href="css/font-awesome.min.css" rel="stylesheet"/>
      <link href="css/animate.min.css" rel="stylesheet"/>
      <link href="css/main.css" rel="stylesheet"/> 
  </head>

  <body> 
    <!-- following section is used for creating the menubar in the webpage -->
	<section id="header">
		<div class="row">  
			<div class="col-md-2" style="font-size: 30px;color:#F2674A;"> Scholarship Management </div>
			<div class="col-md-10" style="text-align: right"> 
				<a href="Search_Students.php"> Back </a> 

			</div>
		</div>
	</section>
	
	<section id = "section1">
		<div class="title"> Search a Student  </div>

		<?php
			$conn = mysqli_connect('localhost' , 'root' , '' , 'scholarship_management');
			if(isset($_POST['search'])){
				$searchKey =  $_POST['search'];
				$sql = "SELECT * FROM student WHERE student_name LIKE '%$searchKey%'";	
			}else
			$sql = "SELECT * FROM student";
			
			$result = mysqli_query($conn,$sql);
		?>
		
		<form action="" class="form_design" method="post">
			Student_Name: <input type="text" name="search"> <br/>
		
			<br/>
			<input type="submit" value="Search From Database">
		</form>
	</section>

	
	<!----- Footer ----->
	<section id="footer"> 

	<div>
		<h1> Student Info : </h1>
		<div style="margin-left:0%; margin-right:0%; margin-top:0px; margin-bottom:0px;text-align:center;background: #dfff80;">
		<table class="table table-bordered">
					<tr>
						<th>Student Name</th>
						<th>ID</th>
						<th>Email</th>
						<th>Department</th>
						<th>Scholarship ID</th>
						<th>CGPA</th>
						<th>Address</th>
						<th>username</th>
						<th>password</th>
						<th>Operation</th>
					</tr>
					<?php 
						while( $row = mysqli_fetch_object($result)) { ?>
						<tr>
							<td><?php echo $row-> student_name ?></td>
							<td><?php echo $row-> student_id ?></td>
							<td><?php echo $row-> email ?></td>
							<td><?php echo $row-> Department ?></td>
							<td><?php echo $row-> Scholarship_id ?></td>
							<td><?php echo $row-> CGPA ?></td>
							<td><?php echo $row-> Address ?></td>
							<td><?php echo $row-> username ?></td>
							<td><?php echo $row-> password ?></td>
							<td><a href = 'UpdateStudents.php? sid=$result[Student_id]& sname=$result[Student_name]& eml=$result[email]& dep=$result[Department]& scl=$result[Scholarship_id]& cgpa=$result[CGPA]'>Update</td>
						</tr>
					<?php } ?>
				</table>
	</div>
	
	</section>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/wow.min.js"></script>
  </body> 
</html>

