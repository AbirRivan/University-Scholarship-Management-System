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
			<div class="col-md-2" style="font-size: 30px;color:#004080;"> Scholarship Management System</div>
			<div class="col-md-10" style="text-align: right"> 
				<a href="Adminpanel.php"> Back </a> 

			</div>
		</div>
	</section>
	
	<section id = "section1">
	<div style="margin-left:0%; margin-right:0%; margin-top:150px; margin-bottom:150px;">
		<div class="title"> Delete a Student  </div>
		
		<form action="deletestudent.php" class="form_design" method="post">
			Student ID: <input type="text" name="sid"> <br/>
		
			<br/>
			<input type="submit" value="Delete from Database">
		</form>
		</div>
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

