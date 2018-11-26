<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="afterstafflogin.css">
</head>
<body>
<?php
session_start();
echo $_SESSION["sid"];
?>
<nav></nav>
<section id="main">	
<div id="schedform">
	<h3>Schedule: </h3>
<form action="afterstaffcheckschedule.php" method="post" id="form1">
	<input type="submit" name="submitbutton" value="Check">
</form>
</div>
<br>

<div id="uprepform">
	<h3>Upload patient reports: </h3>
<form action="afterstaffloginuplrep.php" method="post" id="form2">
	<input type="text" name="pid" id="pid" placeholder="Pid">
	<br>
	<input type="text" name="did" id="did" placeholder="Did">
	<br>
	<input type="text" name="repnum" id="repnum" placeholder="Report no.">
	<br>
	<input type="text" name="repname" id="repname" placeholder="Report name">
    <br> 
	<input type="submit" name="submitbutton" id="sb3" value="Submit"> 
</form>
    <div id="uplform">
    <form action="upload.php"  method="post" enctype="multipart/form-data">
    <label>Select file to upload:</label>
    
    <input type="file" name="file" id="file">
    
    <input type="submit" value="Upload" name="submit1">
    
    </form>  
    </div>
</div>
</section>
<footer>
	<div id="footl">
	<h4>All © reserved to PraHar Hospital</h4>
    </div>
	<div id="footr">
	<a href="http://www.facebook.com"><button id="fb"></button></a>
	<a href="http://www.twitter.com"><button id="tw" ></button></a>
	<a href="http://www.linkedin.com"><button id="in"></button></a>
    </div>

</footer>
</body>
</html>
