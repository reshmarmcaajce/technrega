<?php
include 'connection.php';
 session_start();
    if(!isset($_SESSION['uid'])){
        header("location:login.php");
    }
		
	$nid=$_REQUEST['id'];
		$result5=mysqli_query($con,"UPDATE `notification` SET `napprove`=1 WHERE nid='$nid'");
echo"<script>
window.location='usernotification.php';
alert('deleted')
</script>";
?>