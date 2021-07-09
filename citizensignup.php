<?php
//connect to database
$con = new mysqli("localhost", "root", "", "admin_db");

 

//access the values from the html form
$citizenusername = $_REQUEST["citiusername"];
$citizenemail = $_REQUEST["citiemail"];
$citizenphno = $_REQUEST["citiphno"];
$citizenpwd = $_REQUEST["citipassword"];
$citizenaadhar = $_REQUEST["citiaadhar"]

 

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