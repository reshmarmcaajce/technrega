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
$e=$row3['categor'];
$f=$row3['phone'];
//$h=$row3['password'];
$i=$row3['adhar'];//text field name
//$m=$row3['photo'];
$n=$row3['sname'];//text field name
$o=$row3['dname'];
$p=$row3['panchayath_name'];
$r=$row3['account'];
$s=$row3['ifsc'];	

$result2="SELECT * FROM state where sname='$n'";
$result4=mysqli_query($con,$result2);
while($row4 = mysqli_fetch_array($result4))
{
	$state=$row4['sname'];

	
	
}
$result5="SELECT * FROM district where dname='$o'";
$result6=mysqli_query($con,$result5);
while($row5 = mysqli_fetch_array($result6))
{
	$district=$row5['dname'];

}
$result7="SELECT * FROM panchayath where panchayath_name='$p'";
$result8=mysqli_query($con,$result7);
while($row6 = mysqli_fetch_array($result8))
{
	$panchayath=$row6['panchayath_name'];

}if(isset($_POST["submit"])){
	$ea=$_REQUEST['name'];//text field name
$eb=$_REQUEST['address'];
$ec=$_REQUEST['dob'];
$ed=$_REQUEST['gender'];
$ee=$_REQUEST['category'];
$ef=$_REQUEST['phone'];
$eg=$_REQUEST['mail'];
//$eh=$_REQUEST['password'];
$ei=$_REQUEST['adhar'];//text field name
$en=$_REQUEST['state'];//text field name
$eo=$_REQUEST['district'];
$ep=$_REQUEST['city'];
$er=$_REQUEST['ano'];
$es=$_REQUEST['ifsc'];

$result5="SELECT * FROM state where sname='$en'";
	$result6=mysqli_query($con,$result5);
	while($row5 = mysqli_fetch_array($result6))
	{
		$sid=$row5['sid'];
	}
	
	$result1="SELECT * FROM district where dname='$eo'";
	$result2=mysqli_query($con,$result1);
	while($row1 = mysqli_fetch_array($result2))
	{
		$did=$row2['did'];
	}
	
	$result3="SELECT * FROM panchayath where panchayath_name='$ep'";
	$result4=mysqli_query($con,$result1);
	while($row3 = mysqli_fetch_array($result4))
	{
		$did=$row3['panch_id'];
	}
$sql="UPDATE `registration` SET `name`='$ea',`address`='$eb',`dob`='$ec',`gender`='$ed',`categor`='$ee',`phone`='$ef',`adhar`='$ei',`sname`='$sid',`dname`='$did',`panchayath_name`='$ep',`account`='$er',`ifsc`='$es' where uid='$uid'";
$result=mysqli_query($con,$sql);
}

}

?>
<!DOCTYPE html>
<html>
<style>
input[type=text],select {
    width: 100%;
    padding: 10px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=number],radio {
    width: 100%;
    padding: 10px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=password],radio {
    width: 100%;
    padding: 10px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=date] {
    width: 100%;
    padding: 10px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}


input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}
input[type=file],radio {
    width: 100%;
    padding: 10px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	background-color: #f8f8f8;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
	border-color:grey
	
}

textarea {
    width: 100%;
    height: 70px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 16px;
    resize: none;
}
h2{
	color:green;
}

</style>
<body>
  <form action="#" name="myform" id="myform" method="post" enctype="multipart/form-data">

<table border="0" style="height:100px;width:100%;">
<tr>
<td>
<td>
<td>
<td>
<td>
<td>
<td>
<td>
<td>
<td >
<td>
<td>
<td>
<td>  
</td>
</td>
</td>
</td>
</td>
</td>
</td>
</td>
</td>
</td>
</td>
</td>
</td>
</td>
<td><h2 align="center">PERSONAL DETAILS</h2></td>
<td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td>
<td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td>
<a href="userhome.php">
<img src="bac.jpg">
</a>
</td></td></td></td></td></td></td></td></td></td></td></td></td></td></td>
</td></td></td></td></td></td></td></td></td></td></td></td></td></td></td>

</td>
</td>
</td>
</td>
</tr>
</table>
<div>
  <tr>
  <td>
   </td>
</tr>
	<tr><td><b><label for="fname">Name</label><b>
    <input type="text" id="name" name="name" value='<?php echo $a ?> ' >

  <tr><td> <b> <label for="address">Address</label></b>
    <input type="text" name="address" id="address"  value='<?php echo $b; ?> '>
	<tr><td><b><label for="dob">Date Of Birth</label></b>
    <input type="text" id="dob" name="dob" value='<?php echo $c ?> '>
	<tr><td><b><label for="gender">Gender</label></b>
    <input type="text" id="gender" name="gender" value='<?php echo $d ?> '>
	
	<tr><td><b><label for="category">Category</label></b>
    <input type="text" id="category" name="category" value='<?php echo $e ?> '>
	<tr><td><b><label for="phone">Phone</label></b>
    <input type="text" id="phone" name="phone" value='<?php echo $f ?> '>
	
	<b> <label for="adhar">Adhar Number</label></b>
    <input type="text" id="ano" name="adhar" value='<?php echo $i ?> '>
	<b><label for="state">State</label></b>
        <input type="text" id="state" name="state" value='<?php echo $state ?> '>

    
	<b><label for="district">District</label></b>
    <input type="text" id="district" name="district" value='<?php echo $district ?> '>
               
	<b><label for="city">Panchayath</label></b>
       <input type="text" id="city" name="city" value='<?php echo $panchayath ?> '>

      
   
	<b><label for="account">Account Number</label></b>
    <input type="text" id="ano" name="ano" value='<?php echo $r ?> '>

   	<b><label for="ifsc">IFSC Code</label></b>
    <input type="text" id="ifsc" name="ifsc" value='<?php echo $s ?> '>
     
    <b><label for="mail">Mail Id</label></b>
    <input type="text" id="mail" name="mail" value='<?php echo $email ?> '>
	  
    <input type="submit" name="submit" value="Edit">
	</table>   

  </form>


  </form>
</div>

</body>

<!-- Mirrored from www.w3schools.com/css/tryit.asp?filename=trycss_forms By www.freedomhunt.tk, Thu, 02 Jun 2016 12:17:52 GMT -->
</html>
