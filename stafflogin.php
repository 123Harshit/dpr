<?php
session_start();
$username="root";
$password="";
$server="localhost";
$db="mainproject";
 $conn=new mysqli($server,$username,$password,$db);

 if(mysqli_connect_errno())
 {
 die("connection failed:".$conn->connect_errno());
 }
 $sid=$_POST["sid"];
 $spassword=$_POST["password"];
 $_SESSION["sid"]=$sid;
 echo $_SESSION["sid"];
 $spass=null;
 $flag=null;
 $sql="SELECT sid,password from staff";
 $result=$conn->query($sql);
 if($result->num_rows>0)
 {
	while($row=$result->fetch_assoc())
	{
   // echo $spassword;
	if($row["password"]==$spassword && $row["sid"]==$sid)
      {
        $spass=$row["password"];
        $ssid=$row["sid"];
        // echo $spass;
        $flag=1;
        break;
	    }

  }
  }
 // echo $flag;
 $conn->close();
if($flag==1)
header("refresh:0;url=afterstafflogin.php");
else
header("refresh:0;url=staff_page.html");
 ?>

<script type="text/javascript">
  var x="<?php echo $spass ; ?>";
  var y="<?php echo $spassword ; ?>";
  var z="<?php echo $flag ; ?>";
  if(x!=y){alert("not you ");}
  else
    {alert("you are logged in");}
  
</script>
 
