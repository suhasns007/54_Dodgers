<html>
    <?php ?>
    <head>
        <title>it_issues</title>
        <link rel="stylesheet" type="text/css" href="./css/electricityissues.css">
</head>
<body style="background-color:lightyellow">
    <center>
    <div class="it1">
        <h1>Income Tax Department</h1>
        <h3><marquee>Raise your issues in the below section</marquee></h3>
</div>

</center>
<br><br>
<div class="itissue">
<center>    
    <form class="form-issue" action="it.php" method="POST">  
        <input type="text" name="username" placeholder="Type your name here"> <br><br>
<textarea name="itcomplaint" rows="20" class="form-control" placeholder="State your issues here" message="message"></textarea>
<br><br>
<button class="issuesubmit" type="submit">Submit</button>
    </form>
</center>
</div>
</body>
</html>
