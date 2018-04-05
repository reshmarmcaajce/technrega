<?php
include 'connection.php';

 session_start();
    $uid=$_SESSION['uid'];
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
  <!--<form action="adminapprove.php" name="myform" id="myform" method="post" enctype="multipart/form-data"> -->

<h2>Employee Attendance</h2>

<div>
  <table border="1" style="width:50%;">
  <tr>
  <th style="width:50px";> Name</td>

<th>Attendance</th>
</tr>  
 <?php 
  //$result ="SELECT `aid`, `uid`, `empname`, `date`, `count(attendance_status=1) as count` FROM `attendance` WHERE attendance_status='1' ";

  $result="select `aid`, `uid`, `empname`, count(`attendance_status`) as `att` from `attendance` where `attendance_status` = '1' group by `empname`";
  
  //echo $result;
  
  $result3=mysqli_query($con,$result);
while($row3 = mysqli_fetch_array($result3))
{ 
$a=$row3['empname'];//text field name
$r=$row3['att'];
$abc=$row3['uid'];

?>

	<tr>
	<td><input type="text" id="name" name="name" value='<?php echo $a ?> ' readonly></td>
   
   
   <td> <input type="text" id="ano" name="ano" value='<?php echo $r ?> 'readonly></td>

   <input type="hidden" name="id" id="id" rows="5" cols="20" value='<?php echo $p ?> ' readonly>

     
  <!-- <td> <input type="text" id="mail" name="mail" value='<?php echo $g ?> 'readonly></td></tr>-->
   <td><button class="" name="submit" onclick="window.location.href='calculatewage.php?regid=<?php echo $row3['uid']; ?>'">Calculate</button>

   
   
   <?php
}
   ?>
	  
    <!--<input type="submit" name="submit" value="Submit">-->
	</table>   

<!--  </form> -->
</div>
<div style="margin-top:10px;margin-left:480px;margin-right:500px;">

 <button class="button" style="color:blue;" ><a href="adminhome.php">Back</a></button>
 </div>
</body>

<!-- Mirrored from www.w3schools.com/css/tryit.asp?filename=trycss_forms By www.freedomhunt.tk, Thu, 02 Jun 2016 12:17:52 GMT -->
</html>
