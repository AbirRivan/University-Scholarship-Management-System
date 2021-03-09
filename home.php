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
			<div class="col-md-2" style="font-size: 30px;color:#004080;">Scholarship Management System</div>
			<div class="col-md-10" style="text-align: right"> 
				<div id="main">
  <button class="openbtn" onclick="openNav()">☰ SIGN IN</button>  
  
</div>
			</div>
		</div>
	</section>
	
	<section id = "section1">
	
	<div style="margin-left:0%; margin-right:0%; margin-top:0px; margin-bottom:50px;text-align:center;background: #cdcdb1;">
	    <div class="col-sm-2">
                <img src="img/bl.png" class="img_border" alt=" not found" width="150" height="120">
				</div>

	    <div class="title"style="font-size: 30px;color:#004080;"> BRAC UNIVERSITY </div>
		<div class="title"style="font-size: 30px;color:#004080;"> Login as Admin or Student </div>
		
		
		
	</section>
	<section class="sec2">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>ADMIN PANEL</h2>
                <p>Admin wiil use Admin Sign in button to go to the signin page.After writing down valid username and password, admins will get access to the Admin Panel page.In the Admin panel page, there will be a menu button from where the admin will be able to select the task he/she wants to do.There are total 6 tasks an admin can perform from the Admin Panel.Admin panel gives an admin the full authority to insert,update and delete from the Scholarship Management Database.				</p>

            </div>
            <div class="col-sm-5">
                <div class="img_border">
                    <img src="img/admin.jpg" alt="not found"width="300" height="250">
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
                    <img src="img/stdnt.jpg" alt="not found"width="300" height="250">
                </div>
            </div>
            <div class="col-sm-6">

                <h2>STUDENT PANEL</h2>
                <p>Students will use the Student Sign In button to log into the system.If a student inserts valid username and password,he/she will be taken to the Student Panel page.After accessing that page,a student will be able to perform different operations realted to their scholarship Application.They can choose tasks from the menu bar and each button in the menu bar will take them in the respective page they select.</p>


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
  transition: 0.3s;
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
  font-size: 17px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color:#00001a;
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
                <a href="home.php"style="margin-left: 10px;">Refresh</a> 
				<a href="Admin_login.php" style="margin-left: 10px;"> ADMIN SIGN IN</a> 
				<a href="Student_signin.php" style="margin-left: 10px;"> STUDENT SIGN IN</a>
				
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
	
		
	</div>
	</section>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/wow.min.js"></script>
  </body> 
</html>

