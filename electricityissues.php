<html>
    <?php ?>
    <head>
        <title>elec_issues</title>
        <link rel="stylesheet" type="text/css" href="./css/electricityissues.css">
</head>
<body style="background-color:lightyellow">
    <center>
    <div class="elech1">
        <h1>Electricity Department</h1>
        <h3><marquee>Raise your issues in the below section</marquee></h3>
</div>

</center>
<br><br>
<div class="elecissue">
<center>    
     <form class="form-issue" action="ele.php" method="POST">  
        <input type="text" name="username" placeholder="Type your name here"> <br><br>
<textarea name="elecomplaint" rows="20" class="form-control" placeholder="State your issues here" message="message"></textarea>
<br><br>
<button class="issuesubmit" type="submit">Submit</button>
    </form>
</center>
</div>
</body>
</html>
