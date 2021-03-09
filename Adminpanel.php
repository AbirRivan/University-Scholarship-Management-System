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
		
			<div class="col-md-2" style="font-size: 30px;color:#004080;"> Admin Panel</div>
			<div class="col-md-10" style="text-align: right"> 
				<div id="main">
                     <button class="openbtn" onclick="openNav()">☰ MENU</button> 
			</div>
		</div>
	</section>
	
	<section id = "section1">
	
	<div style="margin-left:0%; margin-right:0%; margin-top:0px; margin-bottom:0px;text-align:center;background: #ffffb3;">
	<div class="col-sm-2">
                <img src="img/admin.jpg" class="img_border" alt=" not found" width="80" height="60">
				</div>
		<div class="title"> ADMIN LOBBY </div>
		
		
	</section>
	
	</section>
	<section class="sec2">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>ADD STUDENT</h2>
                <p>Admin will use Add Student button to add new student information in the Scholarship Management Database.This button will take the admin to the Add Student page where the admin will have to input values like Student ID,Student Name,Email,Department,Scholarship ID,CGPA,Address,username,password and Phone.If the admin inputs the values correctly,the student information will be successfully added to the database and the admin will be taken to the Student Info page.				</p>

            </div>
            <div class="col-sm-5">
                <div class="img_border">
                    <img src="img/addstudent.jpg" alt="not found"width="300" height="250">
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
                    <img src="img/deletestudent.jpg" alt="not found"width="300" height="250">
                </div>
            </div>
            <div class="col-sm-6">

                <h2>Delete Student</h2>
                <p>Admin will use Delete Student button from the menu bar to delete student information from the Scholarship Management Database.If the admin clicks that button,he/she will be taken to the Delete Student Page.There the admin will have to input a Student ID which is valid and the student information stored in the database with that Student ID will be permanently deleted.</p>


            </div>
        </div>

    </div>
</section>
	<section class="sec4">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>STUDENT INFO</h2>
                <p>Admin wiil use Student Info to show all the available student information in the Scholarship Management Database.This button will take the admin to the Show student info page where the admin will see to the values Student ID,Student Name,Email,Department,Scholarship ID,CGPA,Address,username,password and Phone for all the registered students.The admin can even delete a student from the list from the Student Info page.</p>

            </div>
            <div class="col-sm-5">
                <div class="img_border">
                    <img src="img/sinfo.jpg" alt="not found"width="300" height="250">
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
                    <img src="img/schoinfo.png" alt="not found"width="300" height="250">
                </div>
            </div>
            <div class="col-sm-6">

                <h2>SCHOLARSHIP INFO</h2>
                <p>Admin will use this button to get a list of information for all the scholarship information stored in the Scholarship Management Database.After clicking this button,admin will be taken to the Scholarship Information page and he or she will be able to see all the information available in the scholarship database.Scholarship ID along with Student ID,Student name,Semester,Category,Percentage,Submission deadline,Status and Reason will be shown as a list.</p>


            </div>
        </div>

    </div>
</section>
	<section class="sec6">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>DELETE SCHOLARSHIP</h2>
                <p>Admin wiil use Delete scholarship button to delete in formation of a particular scholarship application.After pressing this button,the admin will be taken to the Delete Scholarship page and the page will ask for a Scholarship ID as input.If the admin inputs a valid Scholarship ID,all the information under that ID will be removed from the Database.After deleting,scholarship information list will be shown to the admin.From that list,he/she can make sure if the information is actually deleted or not.</p>

            </div>
            <div class="col-sm-5">
                <div class="img_border">
                    <img src="img/delscho2.jpg" alt="not found"width="300" height="250">
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
                    <img src="img/search.jpg" alt="not found"width="300" height="250">
                </div>
            </div>
            <div class="col-sm-6">

                <h2>SEARCH STUDENT</h2>
                <p>Admin will use this button to search for a particular student from the whole student information list.After clicking this button the admin will be taken to the Search Student page where the system will ask for a Scholarship ID as input.If the admins inputs a valid Student ID,the sytem will find the student information for that ID and show it to the admin.IF the admin does not input any Student ID,the system will still show information for all the students as output.</p>


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
                <a href="home.php"style="margin-left: 10px;">Home</a> 
				<a href="show_students.php" style="margin-left: 10px;"> Student Info</a> 
				<a href="add_student.php" style="margin-left: 10px;"> Add Student</a>
				<a href="delete_student.php" style="margin-left: 10px;"> Delete Student</a> 
				<a href="Scholarship_info.php" style="margin-left: 10px;"> Scholarship info</a>
				<a href="delete_scholarship.php" style="margin-left: 10px;"> Delete Scholarship</a> 
				<a href="Search_Students.php" style="margin-left: 10px;"> Search Student</a>
				
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

