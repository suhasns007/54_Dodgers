<html>
    <?php ?>
    <head>
        <title>auth_municipal_issues</title>
        <link rel="stylesheet" type="text/css" href="./css/authissues.css">
</head>
<body>
    <center>
    <div class="authmunicipal1">
        <h1>Municipality Department</h1>
        <h3><marquee>View related issues in the below section</marquee></h3>
</div>
<div class="authmunicipalissues">
<?php
    $con = new mysqli("localhost", "root", "", "govt_db");
        $sql1="SELECT * FROM `mun_issues`";
        $result=mysqli_query($con, $sql1);
        while($row=mysqli_fetch_assoc($result)){
            // echo("<br><br>");
            // echo $row['issue_id'];
            // echo("&nbsp;&nbsp;");
            // echo $row['username'];
            // echo("<br>");
            // echo $row['muncomplaint'];
            echo "Issue_ID :{$row['issue_id']}  <br> ".
                "Citizen Name : {$row['username']} <br> ".
               "Issue : {$row['muncomplaint']} <br> ".
                "--------------------------------<br>";
          }
          echo "<br><br><a href='index.html' target='_self'>Click here to return to home</a>";
        ?>
</div>

</body>
</html>
