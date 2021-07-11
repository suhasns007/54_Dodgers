<?php 
$con = new mysqli("localhost", "root", "", "govt_db");

	

//access the values from the html form
$username = $_REQUEST["username"];
$itcomplaint = $_REQUEST["itcomplaint"];


//prepare sql query
$query1 = "insert into it_issues (username,itcomplaint) values('$username','$itcomplaint')";
 
if (!mysqli_query($con, $query1))
{
	echo("Error description1: " . mysqli_error($con));
}
else
{
	echo "Successfully Submitted your Complaint";	
}	

echo "<br><br><a href='index.html' target='_self'>Click here to return to home</a>";