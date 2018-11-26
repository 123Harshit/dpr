
<?php

if(isset($_POST['login']))
{
	$p=$_POST['username'];
	$pass=$_POST['pad'];
	$con=mysqli_connect("localhost","harshit","harshit","Patient");
	$sql = "SELECT pid,Password,fname FROM Patient_data WHERE pid=$p";
	$result=mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result);
	if($row['pid']==$p && $row['Password']==$pass)
	{
		$t=$row['fname'];
		if(isset($_POST['chk']))
		{
			setcookie('username', $p, time()+60*60*7);		
		}
		session_start();
		$_SESSION['username']=$t;
		header("location: welcome.php");		
	}
	else
	{
		echo "Patient Id or Password is INVALID.<br>Click here to <a href='Pat_login.html'> try again</a>";	
	}
}
else
{ 
	header("refresh:0;url=Pat_login.html");
}
mysqli_close($con);
?>
