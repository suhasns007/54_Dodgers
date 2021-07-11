<?php 
$con = new mysqli("localhost", "root", "", "govt_db");

	

//access the values from the html form
$username = $_REQUEST["username"];
$complaint = $_REQUEST["elecomplaint"];


//prepare sql query
$query1 = "insert into elec_issues (username,elecomplaint) values('$username','$complaint')";
 
if (!mysqli_query($con, $query1))
{
	echo("Error description1: " . mysqli_error($con));
}
else
{
	echo "Successfully Submitted your Complaint";	
}	

echo "<a href='index.html' target='_self'>Click here to return to home</a>";