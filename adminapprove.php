<?php
include 'connection.php';
session_start();
//$rid=$_SESSION['uid'];
    if(!isset($_SESSION['uid'])){
        header("location:login.php");
	}
	function decryptIt( $q ) {
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
    return( $qDecoded );	
	}
  
function send($sms, $to) {

    $sms = urlencode($sms);
    $token = "3aedd9ce2d3715e60dc6b99284a9302d";
    $sendercode="MGNREG";   
    $url = "http://sms.safechaser.com/httpapi/httpapi?token=".$token."&sender=".$sendercode."&number=".$to.'&route=2&type=1&sms='.$sms;
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_TIMEOUT, 50);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 50);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $datares = curl_exec($ch);
    curl_close($ch);
    return $datares;
}	
  
$rr=$_REQUEST['regid'];
$_SESSION['regid']=$rr;
$usried=$_SESSION['regid'];

$result="SELECT `regid`, `name`, `address`, `dob`, `phone`, `rno`, `image`, `sname`, `dname`, `panchayath_name`, `account`, `ifsc`, `uid`, `jobcard`, `status` FROM `registration` WHERE `regid`='$usried'";
// echo $result;
$result2=mysqli_query($con,$result);
while($row = mysqli_fetch_array($result2))
{ 
$a=$row['uid'];//text field name
$b=$row['status'];
$nm=$row['name'];
$ph=$row['phone'];
}
//echo $a; 



$result7="SELECT `roleid`, `username`, `password`, `status` FROM `login` WHERE uid='$a' ";
$result8=mysqli_query($con,$result7);
while($row2 = mysqli_fetch_array($result8))
{ 
$aa=$row2['username'];//text field name
$bb1=$row2['password'];
$bb=decryptIt($bb1);
}
//echo $aa;
//echo $bb;
$msg="hai $nm your username is $aa , password is $bb -TEARM SANGAM";
//echo $msg;
send($msg, $ph);
$sql="UPDATE `registration` SET `status`=1 WHERE regid='$usried'";
$result5=mysqli_query($con,$sql);

        header("location:alluserpronew.php");


	
?>