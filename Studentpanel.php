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
			<div class="col-md-2" style="font-size: 30px;color:#004080;"> Student Panel</div>
			<div class="col-md-10" style="text-align: right"> 
			
			<div id="main">
                     <button class="openbtn" onclick="openNav()">☰ MENU</button> 
			</div>
		</div>	
			</div>
		</div>
	</section>
	
	<section id = "section1">
	<div style="margin-left:0%; margin-right:0%; margin-top:0px; margin-bottom:50px;text-align:center;background: #dfff80;">
	<div class="col-sm-2">
                <img src="img/stdnt.jpg" class="img_border" alt=" not found" width="70" height="50">
				</div>
		<div class="title"> Student Lobby</div>
		
	</div>	
	</section>
	<section class="sec2">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>SUBMIT APPLICATION</h2>
                <p>Students wiil use Submit Application button to apply for a scholarship which will be added in the Scholarship Management Database.This button will take the student to the Submit Scholarship page where the student will have to input values like Scholarship ID,Student ID,Student Name,Semester,Category,Percentage and Submission deadline.If the student inputs valid values for all the attributes,the application will be added to the database for the admin to evaluate it later.</p>

            </div>
            <div class="col-sm-5">
                <div class="img_border">
                    <img src="img/application.jpg" alt="not found"width="300" height="250">
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
                    <img src="img/history.jpg" alt="not found"width="300" height="250">
                </div>
            </div>
            <div class="col-sm-6">

                <h2>SHOW HISTORY</h2>
                <p>Students wiil use Show history button from the menu bar to get the list of scholarship applications that were submitted from their Student IDs stored in the Scholarship Management Database.If the Student clicks that button,he/she will be taken to the Show History Page.There the student will have to input a Student ID which is valid and the scholarship information stored in the database with that Student ID will be shown sorted by most recent applications first.</p>


            </div>
        </div>

    </div>
</section>
	<section class="sec4">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>SHOW INFO</h2>
                <p>Student will use Show Info to see all the available student information in the Scholarship Management Database.This button will take the student to the Show info page where the student will see the values of Student ID,Student Name,Email,Department,Scholarship ID,CGPA,Address,username,password and Phone after inputing a valid StudentID.If he/she inputs an invalid Student ID,the page will show nothing as output</p>

            </div>
            <div class="col-sm-5">
                <div class="img_border">
                    <img src="img/infokun.png" alt="not found"width="300" height="250">
                </div>

            </div>
        </div>

    </div>
</section>
<section class="sec5">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="img_border">
                    <img src="img/appstat.jpg" alt="not found"width="300" height="250">
                </div>
            </div>
            <div class="col-sm-6">

                <h2>APPLICATION STATUS</h2>
                <p>Students wiil use this button to see the status and reason behind that status for their scholarship application stored in the Scholarship Management Database when he submitted an application.After clicking this button,the student will be taken to the  Application Status page and he or she will be asked to input a Scholarship ID of their submitted application  and if they input a valid value,the system will show him/her the status of the application as Scholarship ID along with Student ID,Student name,Semester,Category,Percentage,Submission deadline,Status and Reason as a list.</p>


            </div>
        </div>

    </div>
</section>
	<section class="sec6">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>UPDATE INFO</h2>
                <p>Students will use Update info button to update their existing info in the database.If they push this button,they wiil be taken to the Update Info page and they will be asked for some inputs in that page. The students can only put new values for email,phone,password and address.They will be asked to put values for these attributes as well as the Student ID.If they input valid values,their information in the database will be updated.</p>

            </div>
            <div class="col-sm-5">
                <div class="img_border">
                    <img src="img/updt.jpg" alt="not found"width="300" height="250">
                </div>

            </div>
        </div>

    </div>
</section>
<section class="sec7">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="img_border">
                    <img src="img/req.png" alt="not found"width="300" height="250">
                </div>
            </div>
            <div class="col-sm-6">

                <h2>SHOW REQUEST</h2>
                <p>Students will use this button to see the application they submitted recently.After submitting an application,students can press this button and it will take them to the Show Request page.In that page,they will be asked to give their scholarship ID as input.If they input a valid value,the system will show them the full information of that particular Scholarship ID.</p>


            </div>
        </div>

    </div>
</section>
	<section class="sec8">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>DELETE APPLICATION</h2>
                <p>Students wiil use Delete Application button to delete the recent application they submitted if the submission deadline has not passed.This button will take the students to the Delete Application page where the students will have to input Scholarship Id and a date of that day.If his/her Scholarship ID is valid and the date is smaller than the value in submission deadline attribute,her/his scholarship application will be deleted from the database.</p>

            </div>
            <div class="col-sm-5">
                <div class="img_border">
                    <img src="img/delappnow.jpg" alt="not found"width="300" height="250">
                </div>

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
  padding: 10px 15px;
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
                <a href="home.php"style="margin-left: 10px;">Home</a> 
				<a href="#" style="margin-left: 10px;"> Submit Application</a> 
				<a href="showhistory.php" style="margin-left: 10px;"> Show History</a>
				<a href="showinformation.php" style="margin-left: 10px;"> Show Info</a> 
				<a href="applicationstatus.php" style="margin-left: 10px;"> Application Status</a>
				<a href="Update_infostudent.php" style="margin-left: 10px;"> Update Info</a> 
				<a href="show_requestapplication.php" style="margin-left: 10px;"> Show Request</a>
				
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

