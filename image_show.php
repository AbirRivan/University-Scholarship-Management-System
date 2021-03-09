<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scholarship_management";

//creating connection

$conn = new mysqli($servername, $username, $password);

//check connection 
if($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
	}
else{
	mysqli_select_db($conn, $dbname);
	//echo "Connection successful";
	}
$Execute=mysqli_query($conn,$sql);	
$res=("select * from imagetable");
echo "<table>";
while($row=mysql_fetch_array($res))
{
echo"<tr>";
echo "<td>";?> <img src="<?php echo $row["pathectory"]; ?> height="100" width="100"><?php echo "</td>"; 
echo "<td>"; echo $row["name"]; echo "</td>";

echo "</tr>";
}
echo"</table>";
?>