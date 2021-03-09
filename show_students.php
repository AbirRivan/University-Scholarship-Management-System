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
			<div class="col-md-2" style="font-size: 30px;color:#004080;"> Scholarship Management System </div>
			<div class="col-md-10" style="text-align: right"> 
				<a href="Adminpanel.php"> Back </a> 
				<a href="Sort_By_ID.php" style="margin-left: 20px;"> Sort by ID  </a>
				<a href="Sort_By_Name.php" style="margin-left: 20px;"> Sort by Name  </a>
				
			 
			</div>
		</div>
	</section>
	
	<section id = "section1">
		<div class="title">    STUDENT INFO </div>
		<div style="margin-left:0%; margin-right:0%; margin-top:50px; margin-bottom:70px;text-align:center;background: #dfff80;">
			<div class="row" style="padding:5px;"> 
				<div class="col-md-1">  Student_id </div>
				<div class="col-md-1">  Student_name </div>
				<div class="col-md-2">  Email </div>
				<div class="col-md-1">  Department </div>
				<div class="col-md-1">  Scholarship_id </div>
				<div class="col-md-1">  CGPA </div>
				<div class="col-md-2">  Address </div>
				<div class="col-md-1">  username </div>
				<div class="col-md-1">  password </div>
				<div class="col-md-1">  Operation </div>
				
				
				
				
				
		
			</div>
			
			<!-- here we will write php codes to fetch data from database and will show in the rows of this table -->
			
			
			<?php 
			require_once("DBconnection.php");
			$sql = "SELECT * FROM student";
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result) > 0){
				//here we will print every row that is returned by our query $sql
				while($row = mysqli_fetch_array($result)){
				//here we have to write some HTML code, so we will close php tag
			?>
			<div class="row" style="padding:5px;"> 
				<div class="col-md-1">  <?php echo $row[0]; ?> </div>
				<div class="col-md-1">  <?php echo $row[1]; ?> </div>
				<div class="col-md-2">  <?php echo $row[2] ?> </div>
				<div class="col-md-1">  <?php echo $row[3] ?> </div>
				<div class="col-md-1">  <?php echo $row[4] ?> </div>
				<div class="col-md-1">  <?php echo $row[5] ?> </div>
				<div class="col-md-2">  <?php echo $row[6] ?> </div>
				<div class="col-md-1">  <?php echo $row[7] ?> </div>
				<div class="col-md-1">  <?php echo $row[8] ?> </div>
				<div class="col-md-1"> <a href="gethemouttahere.php?sud=<?php echo $row[0];?>" class="btn btn-primary">Delete </a></div>
			</div>
			
			<?php 
				}					
			}
			?>
			
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

