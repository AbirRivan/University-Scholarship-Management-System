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
			<div id="main">
                     <button class="openbtn" onclick="openNav()">☰ SEARCH</button> 
			</div>	
		</div>
	</section>
	
	<section id = "section1">
	<div style="margin-left:0%; margin-right:0%; margin-top:0px; margin-bottom:0px;text-align:center;background: #ffffb3;">
	<div class="col-sm-2">
                <img src="img/srcicon.png" class="img_border" alt=" not found" width="80" height="60">
				</div>
		<div class="title"> Search Student </div>
		
	</div>	
	</section>
	<section class="sec2">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>SEARCH BY ID</h2>
                <p>Admin wiil use Search By ID button to search for a student and his information stored in the Scholarship Management database.This button will take the admin to a page named Search Student by Student ID and the page will ask for a Student Id as input.If the admin inputs a valid Student ID,all the information stored under that particular ID will be shown to the admin.If the admin does not input anything,all the information from all the students will be shown as output.</p>

            </div>
            <div class="col-sm-5">
                <div class="img_border">
                    <img src="img/idsearch.jpg" alt="not found"width="280" height="250">
                </div>

            </div>
        </div>

    </div>
</section>
<section class="sec3">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="img_border">
                    <img src="img/namesearch.jpg" alt="not found"width="270" height="250">
                </div>
            </div>
            <div class="col-sm-6">

                <h2>SEARCH BY NAME</h2>
                <p>Admin wiil use Search By Name button to search for a student and his information stored in the Scholarship Management database.This button will take the admin to a page named Search Student by Student Name and the page will ask for a Student Name as input.If the admin inputs a valid Student Name,all the information stored under that particular Name will be shown to the admin.If the admin does not input anything,all the information from all the students will be shown as output.</p>


            </div>
        </div>

    </div>
</section>
		<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.4s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 20px;
  color: #c2c2d6;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #2fb7ed;
}

.sidebar .closebtn {
  position: absolute;
  top: 5;
  right: 10px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 8px 13px;
  border: none;
}

.openbtn:hover {
  background-color:#004080;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>
</head>
<body>

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                <a href="Adminpanel.php"style="margin-left: 10px;">Home</a> 
				<a href="SearchbyID.php" style="margin-left: 10px;"> Search By ID</a> 
				<a href="SearchbyName.php" style="margin-left: 10px;"> Search By Name</a>
</div>



<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
   
</body>
</html> 
    

	
	<!----- Footer ----->
	<section id="footer"> 
	
	</section>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/wow.min.js"></script>
  </body> 
</html>

