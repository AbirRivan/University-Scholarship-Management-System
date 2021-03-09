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
				<a href="Scholarship_info.php"> Back </a>
				<a href="SearchstudentbyID.php" style="margin-left: 30px;color:#80e5ff;"> Search Student </a> 
 				<a href="Evaluation.php" style="margin-left: 30px;color:#80e5ff;"> Approve/Deny </a>

			</div>
		</div>
	</section>
	
	<section id = "section1">
		<div class="title"> Search Scholarship </div>

		<?php
			$conn = mysqli_connect('localhost' , 'root' , '' , 'scholarship_management');
			if(isset($_POST['search'])){
				$searchKey =  $_POST['search'];
				$sql = "SELECT * FROM scholarship WHERE Scholarship_ID LIKE '%$searchKey%'";	
			}else
			$sql = "SELECT * FROM scholarship";
			
			$result = mysqli_query($conn,$sql);
		?>
		
		<form action="" class="form_design" method="post">
			Scholarship_ID: <input type="text" name="search"> <br/>
		
			<br/>
			<input type="submit" value="Search From Database">
		</form>
	</section>

	
	<!----- Footer ----->
	<section id="footer"> 

	<div>
		<h1> Scholarship Info : </h1>
		<div style="margin-left:0%; margin-right:0%; margin-top:0px; margin-bottom:0px;text-align:center;background: #dfff80;">
		<table class="table table-bordered">
					<tr>
					    <th>Scholarship_id</th>
						<th>Student_id</th>
						<th>Student_name</th>
						<th>Semester</th>
						<th>Category</th>
						<th>Percentage</th>
						<th>Submission_deadline</th>
						<th>Status</th>
						<th>Operation</th>
					</tr>
					<?php 
						while( $row = mysqli_fetch_object($result)) { ?>
						<tr>
							<td><?php echo $row-> Scholarship_ID ?></td>
							<td><?php echo $row-> Student_id ?></td>
							<td><?php echo $row-> Student_name ?></td>
							<td><?php echo $row-> Semester ?></td>
							<td><?php echo $row-> Category ?></td>
							<td><?php echo $row-> Percentage ?></td>
							<td><?php echo $row-> Submission_deadline ?></td>
							<td><?php echo $row-> Status ?></td>
							<td><a href = 'UpdateScholarship.php?'>Update</td>
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

