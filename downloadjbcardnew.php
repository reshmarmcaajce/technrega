<?php
include 'connection.php';
 session_start();
    $uid=$_SESSION['uid'];
	//echo $uid;
	$email=$_SESSION['email'];


$result ="SELECT * FROM registration where uid='$uid'";
$result3=mysqli_query($con,$result);
while($row3 = mysqli_fetch_array($result3))
{ 
$a=$row3['name'];//text field name
$b=$row3['address'];
$c=$row3['dob'];
//$d=$row3['gender'];
//$e=$row3['categor'];
$f=$row3['phone'];
//$h=$row3['password'];
//$i=$row3['adhar'];//text field name
//$m=$row3['photo'];
$n=$row3['sname'];//text field name
$o=$row3['dname'];
$p=$row3['panchayath_name'];
$r=$row3['account'];
$s=$row3['rno'];	

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

}


?>
<script type="text/javascript">
        function PrintDiv() {
           var divToPrint = document.getElementById('divToPrint');
           var popupWin = window.open('', '_blank', 'width=1200,height=800');
           popupWin.document.open();
           popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
            popupWin.document.close();
                }
     </script>
<!DOCTYPE html>
<html>
<style>

</style>
<body>
<div  class="" style="background-color:grey; color:#ffffff; padding:13px;">
<input type="button" value="print" onclick="PrintDiv();" class="btn"><!-- style="margin-left:30px; margin-top:20px; " />-->
&nbsp&nbsp&nbsp&nbsp
 <a href="userhome.php">BACK</a>
</div>
<br>
<br>
           <div id="divToPrint" >

<h3 style="text-align:center;">JOB CARD</h1>
<h4 style="text-align:center;">This is the lisenced jobcard generated from e-Thozhil given by government of kerala with all rights preserved</h4>  
<!--<div  class="" style="background-color:orange; color:#ffffff; padding:13px;">
 <a href="userhome.php">BACK</a>

<div  class="div" style="background-color:grey; color:#ffffff; padding:25px;margin-top:10px;margin-left:190px;margin-right:190px;">-->
<form> 
<table>
<td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td>
<td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td>
<td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td>
<td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td>
<td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td>
<td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td>


 <table border="1"style="align:left;height:100%;">
  <tr>
	<td><b><label for="fname">Name</label><b></td>
    <td><input type="text" id="name" name="name" value='<?php echo $a ?> ' readonly></td></tr>

  <tr><td> <b> <label for="address">Address</label></b></td>
    <td><input type="text" name="address" id="address"  value='<?php echo $b; ?> 'readonly></td></tr>
	
	<tr><td><b><label for="dob">Date Of Birth</label></b></td>
    <td><input type="text" id="dob" name="dob" value='<?php echo $c ?> 'readonly></td></tr>
	<!--<tr><td><b><label for="gender">Gender</label></b>
    <input type="text" id="gender" name="gender" value='<?php echo $d ?> 'readonly>
	
	<tr><td><b><label for="category">Category</label></b>
    <input type="text" id="category" name="category" value='<?php echo $e ?> 'readonly>-->
	<tr><td><b><label for="phone">Phone</label></b></td>
    <td><input type="text" id="phone" name="phone" value='<?php echo $f ?> 'readonly></td></tr>
	
	<!--<b> <label for="adhar">Adhar Number</label></b>
    <input type="text" id="ano" name="adhar" value='<?php echo $i ?> 'readonly>-->
	<tr><td><b><label for="state">State</label></b></td>
        <td><input type="text" id="state" name="state" value='<?php echo $state ?> 'readonly></td>

    
	<tr><td><b><label for="district">District</label></b></td>
    <td><input type="text" id="district" name="district" value='<?php echo $district ?> 'readonly></td></tr>
               
	<tr><td><b><label for="city">Panchayath</label></b></td>
       <td><input type="text" id="city" name="city" value='<?php echo $panchayath ?> 'readonly></td></tr>

      
   
	<tr><td><b><label for="account">Account Number</label></b></td>
    <td><input type="text" id="ano" name="ano" value='<?php echo $r ?> 'readonly></td></tr>

   	<tr><td><b><label for="ifsc">Ration Card Number</label></b></td>
   <td> <input type="text" id="ifsc" name="ifsc" value='<?php echo $s ?> 'readonly></td></tr>

   </table>
     <table><tr><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td>
	 <td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td>

</form>
</table>

 </div>
 <form>
</form>
</body>


<!-- Mirrored from www.w3schools.com/css/tryit.asp?filename=trycss_forms By www.freedomhunt.tk, Thu, 02 Jun 2016 12:17:52 GMT -->
</html>
