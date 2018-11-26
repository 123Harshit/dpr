<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$deid=$_POST["doctoreid"];
$dbname = "mainproject";
$dpassword=$_POST["doctorpassword"];
$_SESSION["doceid"]=$deid;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
} 
//echo $dpassword."-";
//echo $deid;
//$dname=str_replace(' ', '', $dbname);
//$docname=$conn->real_escape_string($dbname);
$dpass=null;
$sql = "SELECT eid,password FROM doctorinfo";
 $result = $conn->query($sql);
$flag=0;
if ($result->num_rows >0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	if($row["password"]==$dpassword && $row["eid"]==$deid)
    	{
        $dpass=$row["password"];
        $ddeid=$row["eid"];
       //echo $dpass;
        //echo $ddeid;
        $flag=1;
    }
}
}
 else {
   // echo "0 results";
	$dpass=null;
}
  
 if($flag==1)
header("refresh:0;url=afterdoctorlogin.html");
else
header("refresh:0;url=doctorlogin.html");
?>

<script type="text/javascript">
	var x="<?php echo $dpass ; ?>";
	var y="<?php echo $dpassword ; ?>";
    
	if(x!=y){alert("not you ");}
	else
		{alert("you are logged in");}
	
</script>


