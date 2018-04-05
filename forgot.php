<?php
include 'connection.php';

if(isset($_POST['submit'])) //check on submit time
{
	
$a=$_POST['name'];//text field name
$b=$_POST['address'];

$result2="SELECT `username`,`phone` FROM login l,registration r where sid='$n'";
$result4=mysqli_query($con,$result2);
while($row4 = mysqli_fetch_array($result4))
{
	$state=$row4['sname'];

	
	
}

?>
<!DOCTYPE html>
<html>
<style>
input[type=radio],select {
	color:black;
}
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
.c,radio{
	color:black;
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
input[type=button],radio {
    width: 100%;
    padding: 8px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	background-color: #4CAF50;
}
input[type=button]:hover {
    background-color: #45a049;
}

.b {
    width: 100%;
    padding: 10px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	text-align:center;
	background-color:#4CAF50;
}


.div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
	border-color:grey
}
button
{
width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;	
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
.error{
	color:red;
}
a{
	align:left;
	size:20pt;
}

</style>
<body>
<div  class="" style="background-color:orange; color:#ffffff; padding:13px;">
 <a href="index.php">HOME</a>
</div>
<div  class="div" style="background-color:grey; color:#ffffff; padding:25px;margin-top:10px;margin-left:190px;margin-right:190px;">
<div class="a">
  <form action="#" name="myform" id="myform" method="post" enctype="multipart/form-data" onsubmit="return">

     <b><label class="c" for="fname">Username</label><b>
    <input type="text" id="name" name="name">
	<span class="error" id="name_error"></span>

   <b> <label class="c" for="address">Phone</label></b>
    <textarea name="address" id="address" rows="4" cols="20"></textarea>
	<span class="error" id="address_error"></span>
	

  
    <input type="submit" name="submit" value="Submit">
  </form>
</div>
</div>
<script src="jss/jquery.js"></script>
<script>
function getId(val){
	$.ajax({
		type:"POST",
		url:"get.php",
		data:"sid="+val,
		success:function(data){
			$("#district").html(data);
		}
	});
}
function getIdP(val){
	$.ajax({
		type:"POST",
		url:"getpanch.php",
		data:"did="+val,
		success:function(data){
			$("#city").html(data);
		}
	});
}
</script>
</div>

<!--<script src="js/jquery-3.2.1.js"></script>
<script src="js/usereg.js"></script>-->




</body>

<!-- Mirrored from www.w3schools.com/css/tryit.asp?filename=trycss_forms By www.freedomhunt.tk, Thu, 02 Jun 2016 12:17:52 GMT -->
</html>
