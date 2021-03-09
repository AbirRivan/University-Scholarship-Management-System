
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
			<div class="col-md-2" style="font-size: 30px;color:#F2674A;"> Scholaship Management </div>
			<div class="col-md-10" style="text-align: right"> 
				<a href="Scholarship_info.php"> Back </a> 

			</div>
		</div>
	</section>
	
	<section id = "section1">
		<div class="title"> Add a New Scholarship  </div>
		
		<form action="addscholarship.php" class="form_design" method="post">
		    Scholarship_id: <input type="text" name="scl"> <br/>
			student_iD: <input type="text" name="sid"> <br/>
			student_name: <input type="text" name="sname"> <br/> 
			Semester: <input type="text" name="sem"> <br/>
			Category: <input type="text" name="cat"> <br/>
			Percentage: <input type="text" name="per"> <br/>
			Submission_deadline: <input type="text" name="ded"> <br/>
			
			
			<br/>
			<input type="submit" value="Add to Database">
		</form>
	</section>

	
	<!----- Footer ----->
	<section id="footer"> 
	
	</section>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/wow.min.js"></script>
  </body> 
</html>

