<?php
//connect to database
$con = new mysqli("localhost", "root", "", "govt_db");

 

//access the values from the html form
$citizenusername = $_REQUEST["citizenusername"];
$citizenemail = $_REQUEST["citizenemail"];
$citizenphno = $_REQUEST["citizenphno"];
$citizenpwd = $_REQUEST["citizenpwd"];
$citizenaadhar = $_REQUEST["citizenaadhar"];

 

//prepare sql query
$query1 = "insert into citizen_tab (citiusername,citiemail,citiphno,citipassword,citiaadhar) values('$citizenusername', '$citizenemail', '$citizenphno', '$citizenpwd', '$citizenaadhar')";
 
if (!mysqli_query($con, $query1))
{
	echo("Error description1: " . mysqli_error($con));
}
else
{
	echo "Successfully inserted a resident details";	
}	

echo "<a href='index.html' target='_self'>Click here to return to home</a>";
?>
