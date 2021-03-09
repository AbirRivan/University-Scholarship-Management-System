<?php
// first of all, we need to connect to the database
require_once('DBconnection.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['sid']) && isset($_POST['sname']) && isset($_POST['eml']) && isset($_POST['dep'])&& isset($_POST['scl'])&& isset($_POST['cgpa'])&& isset($_POST['add'])&& isset($_POST['use'])&& isset($_POST['wod'])&& isset($_POST['phn'])){
	// write the query to check if this username and password exists in our database
	$u = $_POST['sid'];
	$p = $_POST['sname'];
	$c = $_POST['eml'];
	$d = $_POST['dep'];
	$t = $_POST['scl'];
	$g = $_POST['cgpa'];
	$a = $_POST['add'];
	$n = $_POST['use'];
	$w = $_POST['wod'];
	$h = $_POST['phn'];
	
	$sql = " INSERT INTO student VALUES( '$u', '$p', '$c', '$d','$t', '$g','$a','$n','$w','$h') ";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)){
	
		//echo "Inseted Successfully";
		header("Location: show_students.php");
	}
	else{
		//echo "Insertion Failed";
		header("Location: add_student.php");
	}
	
}


?>