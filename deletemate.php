<?php
include 'connection.php';
 session_start();
    if(!isset($_SESSION['uid'])){
        header("location:login.php");
    }
		
	$mid=$_REQUEST['id'];
		$result5=mysqli_query($con,"UPDATE `mate` SET `mstatus`=1 WHERE mid='$mid'");
echo"<script>
window.location='viewmateprofile.php';
alert('deleted')
</script>";
?>