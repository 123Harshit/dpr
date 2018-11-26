<?php
session_start();

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
 $ssid=$conn->real_escape_string($_SESSION["sid"]);
$sql = "SELECT * FROM staffschedule where sid='$ssid'";
 $result = $conn->query($sql);
 if ($result->num_rows >0) {
      echo '<table border="5px">';
    // output data of each row
      echo '<tr>';
         echo '<td>'. "SID".'</td>';
         echo '<td>'. "DNAME".'</td>';
        echo '<td>'."DAY".'</td>';
        echo '<td>'."FROM".'</td>';
        echo '<td>'. "TO".'</td>';
        echo '<td>'. "VENUE".'</td>';
        echo '</tr>';
    while($row = $result->fetch_assoc()) {
    	echo '<tr>';
        echo '<td>'. $row['sid'] .'</td>';
         echo '<td>'. $row['dname'] .'</td>';
        echo '<td>'. $row['day'] .'</td>';
        echo '<td>'. $row['fromtime'] .'</td>';
        echo '<td>'. $row['totime'] .'</td>';
        echo '<td>'. $row['venue'] .'</td>';
        echo '</tr>';
    }
    echo '</table>';
  }
 $conn->close();
?>