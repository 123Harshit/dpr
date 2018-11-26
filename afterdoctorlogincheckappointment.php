<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="projdoctorlogin.css">
</head>
<body>
  <nav></nav>
  <section id="main">
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$date=$_POST["apptcheckdate"];
$db="mainproject";
$eid=$_SESSION["doceid"];
$conn = new mysqli($servername, $username, $password, $db);
// Check connection
if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
} 
$sql = "SELECT a.pid,a.date,a.time,b.fname FROM appointments as a,patient_data as b where a.pid=b.pid AND a.eid='$eid'";
 $result = $conn->query($sql);
 if ($result->num_rows >0) {
      echo '<table border="5px">';
    // output data of each row
      echo '<tr>';
        echo '<td>'. "PID".'</td>';
        echo '<td>'."NAME".'</td>';
        echo '<td>'."DATE".'</td>';
        echo '<td>'. "TIME".'</td>';
        //echo '<td>'. "DAY".'</td>';
        echo '</tr>';
    while($row = $result->fetch_assoc()) {
    	echo '<tr>';
        echo '<td>'. $row['pid'] .'</td>';
        echo '<td>'. $row['fname'] .'</td>';
        echo '<td>'. $row['date'] .'</td>';
        echo '<td>'. $row['time'] .'</td>';
       // echo '<td>'. $row['day'] .'</td>';
        echo '</tr>';
    	
    }
     echo '</table>';
    }
    else
    {
    		echo '<h1>'."NO APPOINTMENTS FOR TODAY".'</h1>';
    }
?>
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