<?php
include 'connection.php';
if(isset($_REQUEST['submit'])) //check on submit time
{
$i=$_REQUEST['adhar'];//text field name
$j=$_REQUEST['rno'];
$k=$_REQUEST['hno'];
$l=$_REQUEST['fname'];
$m=$_REQUEST['photo'];
$sql="INSERT INTO `registration`(`adhar`, `ration`, `house`, `fname`, `photo`) VALUES ('$i','$j','$k','$l','$m')";
//$result=mysqli_query($con,$sql) //or die("DB Error");print on database
//$sql1="INSERT INTO `login`(`username`, `password`) VALUES ('$g','$h')";
if (mysqli_query($con,$sql) > 0) {
//if (mysqli_query($con,$sql1) > 0) {
		echo "<script>alert('Success');</script>";
}
//}
else
{
	echo "<script>alert('Unsuccessfull');</script>";
}
//$result1=mysqli_query($con,$sql1) //or die("DB Error");print on database
}
?>
<!DOCTYPE html>
<html>
<style>
input[type=text],radio {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=file],radio {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	
}
input[type=number],radio {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=password],radio {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=date] {
    width: 100%;
    padding: 12px 20px;
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
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
textarea {
    width: 100%;
    height: 80px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 16px;
    resize: none;
}
h1{
	color:green;
}
</style>
<body>
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
<td><a href="index.php">
<img src="h4.png">
</a>
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
<td><h1 align="center">IDENTIY DETAILS</h1></td>
<td>
<td>
<td>
<td>
<td>
<a href="appl.php">
<img src="bac.jpg">
</a>
</td>
</td>
</td>
</td>
</td>
</tr>
</table>


<div>
  <form action="#" name="myform" id="myform" method="get"
    <b> <label for="adhar">Adhar Number</label></b>
    <input type="number" id="ano" name="adhar">

   	<b><label for="ration">Rationcard Number</label></b>
    <input type="number" id="rno" name="rno">
	<b><label for="hname">House Number</label></b>
    <input type="text" id="hno" name="hno">
	<b><label for="fname">Father's Name</label></b>
    <input type="text" id="fname" name="fname">
	<b><label for="fname">Photo</label></b>
    <input type="file" id="photo" name="photo">
	
     
    <input type="submit" name="submit" value="Submit">
  </form>
</div>

</body>

<!-- Mirrored from www.w3schools.com/css/tryit.asp?filename=trycss_forms By www.freedomhunt.tk, Thu, 02 Jun 2016 12:17:52 GMT -->
</html>
