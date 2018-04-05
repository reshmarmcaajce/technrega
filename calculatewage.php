<?php
include 'connection.php';

 session_start();
    $aid=$_SESSION['uid'];
	$attandance=$_REQUEST['at'];
	$uid=$_REQUEST['uid'];
	//echo $uid;
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



?>

<!DOCTYPE html>
<html>
<style>
input[type=text] {
	border:none;
	
}
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 10px 40px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
	font-family:times new roman;
}
table {
    border-collapse: collapse;
    
	align:center;
	
}



h2{
	color:green;
	text-align:center;
}
table {
    border-collapse: collapse;
    width: 20%;
	align:center;
}

th, td {
    text-align: left;
    padding: 8px;
}

<!--tr:nth-child(even){background-color: #f2f2f2}-->

th {
    background-color: #4CAF50;
    <!--color: white;-->
}

</style>
<body>
<div  class="" style="background-color:grey; color:#ffffff; padding:13px;">
 <a style="color:white;" href="adminhome.php">HOME</a>
</div>
<form method="post" name="myform" action="#">
	<center><p> NO OF DAYS PRESENT: <?php echo $attandance; ?> </p></center>
	<center><p> PER DAY WAGE : <?php echo $wage=250;?> </p></center>
	<?php  
	$totalwage=$attandance * $wage;
	?>
	<center><p> TOTAL WAGE: <?php echo $totalwage; ?> </p></center>
	  <?php
	  $result ="SELECT * FROM registration WHERE uid=$uid";
$result3=mysqli_query($con,$result);
$row3 = mysqli_fetch_array($result3);



?>
<center>NAME:<?php echo $row3['name'];?> </center><br>
<center>ADDRESS:<?php echo $row3['address'];?></center><br>
<center>PHONE:<?php echo $row3['phone'];?></center><br>
<center>ACCOUNT NUMBER:<?php echo $row3['account'];?></center><br>
<center>IFSC:<?php echo $row3['ifsc'];?></center><br>
	 
	  <center><input type="submit" name="submit" value="Pay Now"></center>


  </form>
 <?php
 if(isset($_POST['submit']))
	{
	$lid=$_SESSION['uid'];
	$sql9="SELECT * FROM `wallet` WHERE `uid`='$lid'";
	$result9=mysqli_query($con,$sql9);
	$row9=mysqli_fetch_array($result9);
	$r1=$row9['balance'];
		if($totalwage>$r1)
		{
			echo "<script>if(confirm('no balance available!!!!')){document.location.href='calculatewage.php'}else{document.location.href='calculatewage.php'};</script>";

		}
		else
		{
	
		$bl=$r1-$totalwage;
		$sql5="UPDATE `wallet` SET `balance`='$bl' WHERE `uid`='$lid'";
		$result5=mysqli_query($con,$sql5);
		
		$sql33="UPDATE `wallet` SET `balance`='$bl' WHERE `uid`='$lid'";
        $result33=mysqli_query($con,$sql33);
		
		$result0 ="SELECT * FROM registration WHERE uid=$uid";
		$result4=mysqli_query($con,$result0);
		$row4 = mysqli_fetch_array($result4);

		$a=$row4['name'];
		$b=$row4['address'];
		$c=$row4['phone'];
		$d=$row4['account'];	
		$e=$row4['ifsc'];


	
	$sql1="INSERT INTO `payment`(`name`, `address`, `phone`, `account`, `ifsc`, `uid`, `totalwage`) 
	 VALUES ('$a', '$b','$c', '$d', '$e', '$uid','$totalwage')";
	$result1=mysqli_query($con,$sql1);
	
	$ms="Congratulations $a your account is credited with $totalwage - MGNREGA";
	//echo $ms;
	send($ms,$c);
		}
		
}
  
?>  
  
</body>

<!-- Mirrored from www.w3schools.com/css/tryit.asp?filename=trycss_forms By www.freedomhunt.tk, Thu, 02 Jun 2016 12:17:52 GMT -->
</html>
