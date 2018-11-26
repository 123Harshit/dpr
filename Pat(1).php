<html>
<body>
<center>
	<header>
	    <div class="header">
		 <div class="row login">
		    <img src="logo.jpeg" alt="My Clinic">
		   <h1>Welcome to My Clinic</h1>
	         </div>
	   </div>
	</header>
<h2><a href="Patient_Sign_UP.html">Sign up</a></h2>
<h2><a href="Pat_login.html">Sign in</a></h2>
<?php
$e=$_POST['pd'];
$x=$_POST['fn'];
$y=$_POST['ln'];
$z=$_POST['ag'];
$u=$_POST['mail'];
$v=$_POST['cit'];
$m=$_POST['pwd'];
echo $v;
$con=mysqli_connect("localhost","harshit","harshit","Patient");
mysqli_query($con,$sql);
$sql="INSERT INTO Patient_data (pid,fname,contact,age,Email,City,Password) VALUES ('$e','$x','$y','$z','$u','$v','$m');";
mysqli_query($con,$sql);
mysqli_close($con);
?>
</center>
</body>
</html>
