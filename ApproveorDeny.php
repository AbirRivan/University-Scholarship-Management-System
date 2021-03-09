<?php
// first of all, we need to connect to the database
require_once('DBconnection.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['scl']) && isset($_POST['res'])){
	// write the query to check if this username and password exists in our database
	$u = $_POST['scl'];
	$c = $_POST['res'];
	$sql = " Update scholarship set Reason= '$c' where Scholarship_ID = '$u' ";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)){
	
		//echo "Inseted Successfully";
		header("Location: Scholarship_info.php");
	}
	else{
		//echo "Insertion Failed";
		header("Location: Evaluation.php");
	}
	
}


?>
