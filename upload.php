<?php
if(isset($_POST['submit1'])){
	$file=$_FILES['file'];
	$fileName=$_FILES['file']['name'];
	$fileTmpName=$_FILES['file']['tmp_name'];
	$fileSize=$_FILES['file']['size'];
	$fileError=$_FILES['file']['error'];
    $fileType=$_FILES['file']['type'];
    
    $fileExt=explode('.',$fileName);
    $fileActualExt=strtolower(end($fileExt));

    $allowed=array('jpg','jpeg','pdf','png');
    if(in_array($fileActualExt,$allowed)){
    	if($fileError==0){
          $fileNameNew=uniqid('',true).".".$fileActualExt;
          $fileDestination= 'uploads/'.$fileNameNew;
          move_uploaded_file($fileTmpName,$fileDestination);
          header("location:afterstafflogin.html?uploadsuccess");
    	}
    	else{
    		echo "There was an error";
    	}

    }
    else
    {
    	echo "You cannot upload the file";
    }
}
?>