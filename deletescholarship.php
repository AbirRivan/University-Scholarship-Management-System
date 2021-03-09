<?php
// first of all, we need to connect to the database
require_once('DBconnection.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['scl'])){
	// write the query to check if this username and password exists in our database
	$u = $_POST['scl'];
	
	$sql = "delete from scholarship where Scholarship_ID = '$u'";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)){
	
		//echo "Deleted Successfully";
		header("Location: Scholarship_info.php");
	}
	else{
		//echo "Could not Delete";
		header("Location: delete_scholarship.php");
	}
	
}