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
 
$sql = "SELECT * FROM schedule";
 $result = $conn->query($sql);
 if ($result->num_rows >0) {
      echo '<table border="5px">';
    // output data of each row
      echo '<tr>';
         echo '<td>'. "EID".'</td>';
         echo '<td>'. "NAME".'</td>';
        echo '<td>'."DAY".'</td>';
        echo '<td>'."FROM".'</td>';
        echo '<td>'. "TO".'</td>';
        echo '<td>'. "ROOM".'</td>';
        echo '</tr>';
    while($row = $result->fetch_assoc()) {
    	echo '<tr>';
        echo '<td>'. $row['eid'] .'</td>';
         echo '<td>'. $row['name'] .'</td>';
        echo '<td>'. $row['day'] .'</td>';
        echo '<td>'. $row['fromtime'] .'</td>';
        echo '<td>'. $row['totime'] .'</td>';
        echo '<td>'. $row['roomno'] .'</td>';
        echo '</tr>';
    }
    echo '</table>';
  }
 $conn->close();

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