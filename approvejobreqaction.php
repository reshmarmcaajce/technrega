<?php
include 'connection.php';
/* session_start();
    if(!isset($_SESSION['uid'])){
        header("location:login.php");
    } */
if(isset($_REQUEST['submit'])) //check on submit time
{
$p=$_REQUEST['id'];//text field name
$a=$_REQUEST['name'];//text field name
$b=$_REQUEST['place'];
$c=$_REQUEST['start'];
$d=$_REQUEST['details'];
$e=$_REQUEST['ndays'];

$sql="UPDATE `requestjob` SET `requeststatus`=1 WHERE `requestid`='$p' ";
$result=mysqli_query($con,$sql);
}

?>