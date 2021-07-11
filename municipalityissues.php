<html>
    <?php ?>
    <head>
        <title>municipal_issues</title>
        <link rel="stylesheet" type="text/css" href="./css/electricityissues.css">
</head>
<body style="background-color:lightyellow">
    <center>
    <div class="municipal1">
        <h1>Municipality Department</h1>
        <h3><marquee>Raise your issues in the below section</marquee></h3>
</div>

</center>
<br><br>
<div class="municipalissue">
<center>    
    <form class="form-issue" action="mun.php" method="POST">  
        <input type="text" name="username" placeholder="Type your name here"> <br><br>  
<textarea name="municipalcomplaint" rows="20" class="form-control" placeholder="State your issues here" message="message"></textarea>
<br><br>
<button class="issuesubmit" type="submit">Submit</button>
    </form>
</center>
</div>
</body>
</html>
