<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="mainproject";
//$db=$_SESSION[""];
$conn = new mysqli($servername, $username, $password, $db);
// Check connection
if (mysqli_connect_errno()) 
{
    die("Connection failed: " . mysqli_connect_error());
} 

  $eid=($_POST["eid"]);
   $date=($_POST["appdate"]);
    $time=($_POST["apptime"]).":00";
    echo $eid;
    echo $date;
    echo $time;
    //$docname=$conn->real_escape_string($dbname);
$sql = "INSERT INTO appointments (pid, eid, date,time)
VALUES ('4566', '$eid','$date','$time')";
$flag=0;
if ($conn->query($sql) === TRUE) {
     $flag=1;
   // echo "New record created successfully";
} else {
	$flag=0;
}
 $conn->close();

?>
<script type="text/javascript">
	var x=<?php echo $flag; ?>;
    if(x==1)
    	alert("Appointment Set");
</script>