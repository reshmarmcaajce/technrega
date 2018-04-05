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

<h2>User Details</h2>
<div id="divToPrint" >
<div>
  <table border="1" style="width:100%";>
  <tr>
  <th style="width:50px";> Name</td>
<th>Address</th>
<th>Date Of Birth</th>
<th>Phone</th>
<th>Ration Card</th>

<th>Adhar</th>
<th>State</th>
<th>District</th>
<th>Panchayath</th>
<th>AccountNumber</th>
<th>IFSC</th>
</tr>  
 <?php 
  $result ="SELECT `regid`, `name`, `address`, `dob`, `phone`, `rno`, `image`, `sname`, `dname`, `panchayath_name`, `account`, `ifsc`, `uid`, `jobcard`, `status` FROM `registration` where status=0 ";
$result3=mysqli_query($con,$result);
while($row3 = mysqli_fetch_array($result3))
{ 
$a=$row3['name'];//text field name
$b=$row3['address'];
$c=$row3['dob'];
//$d=$row3['gender'];
//$e=$row3['categor'];
$f=$row3['phone'];
$v=$row3['rno'];

//$g=$row3['email'];
//$h=$row3['password'];
$i=$row3['image'];//text field name
//$m=$row3['photo'];
$n=$row3['sname'];//text field name
$o=$row3['dname'];
$p=$row3['panchayath_name'];
$r=$row3['account'];
$s=$row3['ifsc'];	
$abc=$row3['regid'];
$result2="SELECT * FROM state where sid='$n'";
$result4=mysqli_query($con,$result2);
while($row4 = mysqli_fetch_array($result4))
{
	$state=$row4['sname'];

	
	
}
$result5="SELECT * FROM district where did='$o'";
$result6=mysqli_query($con,$result5);
while($row5 = mysqli_fetch_array($result6))
{
	$district=$row5['dname'];

}
$result7="SELECT * FROM panchayath where panch_id='$p'";
$result8=mysqli_query($con,$result7);
while($row6 = mysqli_fetch_array($result8))
{
	$panchayath=$row6['panchayath_name'];

}
?>

	<tr>
	<td><input type="text" id="name" name="name" value='<?php echo $a ?> ' readonly></td>
    
    <td><input type="text" name="address" id="address"  value='<?php echo $b; ?> 'readonly></td>
    <td><input type="text" id="dob" name="dob" value='<?php echo $c ?> 'readonly></td>
  <!-- <td> <input type="text" id="gender" name="gender" value='<?php echo $d ?> 'readonly></td>
	
    <td><input type="text" id="category" name="category" value='<?php echo $e ?> 'readonly></td>-->
   <td> <input type="text" id="phone" name="phone" value='<?php echo $f ?> 'readonly></td>
	   <td> <input type="text" id="rno" name="rno" value='<?php echo $v ?> 'readonly></td>

   <td> <input type="text" id="ano" name="adhar" value='<?php echo $i ?> 'readonly></td>
        <td><input type="text" id="state" name="state" value='<?php echo $state ?> 'readonly></td>

    
    <td><input type="text" id="district" name="district" value='<?php echo $district ?> 'readonly></td>
               
      <td> <input type="text" id="city" name="city" value='<?php echo $panchayath ?> 'readonly></td>

      
   
   <td> <input type="text" id="ano" name="ano" value='<?php echo $r ?> 'readonly></td>

   <td> <input type="text" id="ifsc" name="ifsc" value='<?php echo $s ?> 'readonly></td>
   <input type="hidden" name="id" id="id" rows="5" cols="20" value='<?php echo $p ?> ' readonly>

     
  <!-- <td> <input type="text" id="mail" name="mail" value='<?php echo $g ?> 'readonly></td></tr>-->
   <td><button class="" name="submit" onclick="window.location.href='adminapprove.php?regid=<?php echo $row3['regid']; ?>'">Approve</button>

   
   
   <?php
}
   ?>
	  
    <!--<input type="submit" name="submit" value="Submit">-->
	</table>   

<!--  </form> -->
</div>
<!--<input type="button" value="print" onclick="PrintDiv();" class="btn" style="margin-left:30px; margin-top:20px; float:left;" />-->
<div style="margin-top:10px;margin-left:480px;margin-right:500px;">

 <button class="button" style="color:blue;" ><a href="adminhome.php">Back</a></button>
 </div>
</body>
<script type="text/javascript">
        function PrintDiv() {
           var divToPrint = document.getElementById('divToPrint');
           var popupWin = window.open('', '_blank', 'width=1200,height=800');
           popupWin.document.open();
           popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
            popupWin.document.close();
                }
     </script>

<!-- Mirrored from www.w3schools.com/css/tryit.asp?filename=trycss_forms By www.freedomhunt.tk, Thu, 02 Jun 2016 12:17:52 GMT -->
</html>
