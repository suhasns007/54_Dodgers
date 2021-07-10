<?php

$con = new mysqli("localhost", "root", "", "govt_db");

if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from form 
$userid=$_POST['authusername']; 
$password=$_POST['authpassword']; 



$rec=mysqli_query($con, "SELECT * FROM auth_tab WHERE ID='$userid' AND PASSWORD='$password'");

$noticia = mysqli_fetch_assoc($rec);

if($noticia)
{
$_SESSION['login_user']=$userid;
header("location:authhomepage.php?myaccount=$userid");
}
else
{
echo "<font face='Verdana' size='2' color=red><center> Use authority details to Login and try<br> <br><input type='button' value='Retry' onClick='history.go(-1)'></center>";
}
}
?>
