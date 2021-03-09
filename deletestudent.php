<?php
// first of all, we need to connect to the database
require_once('DBconnection.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['sid'])){
	// write the query to check if this username and password exists in our database
	$u = $_POST['sid'];
	
	$sql = "delete from student where Student_id= '$u'";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)){
	
		//echo "Deleted Successfully";
		header("Location: show_students.php");
	}
	else{
		//echo "Could not Delete";
		header("Location: delete_student.php");
	}
	
}