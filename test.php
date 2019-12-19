<?php

//Database Connection
include('class/bdd.inc.php');
//Check for connection error

if(isset($_POST['submit'])){
 // Count total uploaded files
 $totalfiles = count($_FILES['file']['name']);

 // Looping over all files
 for($i=0;$i<$totalfiles;$i++){
 $filename = $_FILES['file']['name'][$i];

// Upload files and store in database
if(move_uploaded_file($_FILES["file"]["tmp_name"][$i],'images/upload/'.$filename)){
		// Image db insert sql
		$SQL = "INSERT into files(file_name,uploaded_on,status) values('$filename',now(),1)";
    $conn->query($SQL);
	}
  else{
		echo 'Error in uploading file - '.$_FILES['file']['name'][$i].'<br/>';
	}

 }
}
?>
