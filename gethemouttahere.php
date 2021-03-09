<?php
// first of all, we need to connect to the database
require_once('DBconnection.php');

// we need to check if the input in the form textfields are not empty
if(isset($_GET["sud"])){
	// write the query to check if this username and password exists in our database
	$u = $_GET["sud"];
	$sql = "delete from student where Student_id= '$u'";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if it returns an empty set
	if(mysqli_num_rows($result) !=0 ){
	
		//echo "LET HIM ENTER";
		header("Location: show_students.php");
	}
	else{
		//echo "Username or Password is wrong";
		header("Location: show_students.php");
	}
	
}


?>
