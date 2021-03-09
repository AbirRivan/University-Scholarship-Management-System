<?php
// first of all, we need to connect to the database
require_once('DBconnection.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['sid']) && isset($_POST['eml']) && isset($_POST['add']) && isset($_POST['wod']) && isset($_POST['phn'])){
	// write the query to check if this username and password exists in our database
	$u = $_POST['sid'];
	$c = $_POST['eml'];
	$a = $_POST['add'];
	$p = $_POST['phn'];
	$t = $_POST['wod'];
	
	$sql = " Update student set email= '$c', Address='$a', password= '$t', phone= '$p' where student_id = '$u' ";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)){
	
		//echo "Inseted Successfully";
		header("Location: showinformation.php");
	}
	else{
		//echo "Insertion Failed";
		header("Location: Update_infostudent.php");
	}
	
}


?>