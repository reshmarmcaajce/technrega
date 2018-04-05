<?php
include 'connection.php';
/* session_start();
    if(!isset($_SESSION['uid'])){
        header("location:login.php");
    }
		
if(isset($_REQUEST['delete'])) //check on submit time
{
	$id=$_POST['hidden'];
	$sql5="DELETE FROM `notification` WHERE nid='$id'";
	$result5=mysqli_query($con,$sql5);
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
if($result){
	echo"<script>
window.location='approvejobreq.php';
alert('approved')
</script>";}
}
?>
<!DOCTYPE html>
<html>
<style>
table {
    border-collapse: collapse;
    width: 50%;
	align:center;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}

.div {
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
	text-align:center;
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

</style>
<body>
<div  class="" style="background-color:grey; color:#ffffff; padding:13px;">
 <a style="color:white;" href="adminhome.php">HOME</a>&nbsp&nbsp&nbsp&nbsp&nbsp
 <a style="color:white;" href="searchjobreq.php">SEARCH</a>

</div>

<h2>JOB REQUEST DETAILS</h2>


<div>
<table align="center" width="200" border="1">
  <tr>
      <th><font color="black">&nbsp;Requested Person</font></th>

    <th><font color="black">&nbsp;Jobtype</font></th>
    <th><font color="black">&nbsp;Place</font></th>
    <th><font color="black">&nbsp;Start Date</font></th>
	    <!--<th><font color="black">&nbsp;Details</font></th>-->
    <th><font color="black">&nbsp;Number of days</font></th>
	    <th><font color="white">&nbsp;Remarks</font></th>


  
  </tr><?php

$sql="SELECT  * FROM `requestjob` WHERE requeststatus=0";
	
$result=mysqli_query($con,$sql);

while($row3 = mysqli_fetch_array($result))
{ 
$p=$row3['requestid'];//text field name
$a=$row3['jbtype'];//text field name
$b=$row3['place'];//text field name
$c=$row3['jdate'];//text field name
$e=$row3['jdetail'];//text field name
$d=$row3['jdays'];//text field name
$f=$row3['uid'];//text field name

$sql1="SELECT  * FROM `registration` WHERE uid='$f'";
$result1=mysqli_query($con,$sql1);

//$row2 = mysqli_fetch_array($result1);
 while($row2 = mysqli_fetch_array($result1))
 {
	 


?>
<form  method="post" name="notif">

<tr>
<td><input type="text" name="name" style="border:none;" id="noti" rows="5" cols="20" value='<?php echo $row2['name']; ?> ' readonly></td>

<td><input type="text" name="name" style="border:none;" id="noti" rows="5" cols="20" value='<?php echo $a ?> ' readonly></td>
<td><input type="text" name="place" style="border:none;" id="place" rows="5" cols="20" value='<?php echo $b ?> ' readonly></td>
<td><input type="text" name="start" style="border:none;" id="start" rows="5" cols="20" value='<?php echo $c ?> ' readonly></td>
<!--<td><input type="text" name="details" style="border:none;" id="details" rows="5" cols="20" value='<?php echo $e ?> ' readonly></td>-->
<td><input type="text" name="ndays" style="border:none;" id="ndays" rows="5" cols="20" value='<?php echo $d ?> ' readonly></td>
<input type="hidden" name="id" id="id" rows="5" cols="20" value='<?php echo $p ?> ' readonly>
<td><button class="" name="submit">Approve</button>
</tr>
<?php
}
}
?>
</table>
     </form>
</div>
<div style="margin-top:10px;margin-left:480px;">

 <!--<button class="button" style="color:blue;" ><a href="adminhome.php">Back</a></button>-->
 </div>
</body>

<!-- Mirrored from www.w3schools.com/css/tryit.asp?filename=trycss_forms By www.freedomhunt.tk, Thu, 02 Jun 2016 12:17:52 GMT -->
</html>
