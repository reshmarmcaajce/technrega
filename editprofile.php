<?php
include 'connection.php';
if(isset($_REQUEST['submit'])) //check on submit time
{
$a=$_REQUEST['name'];//text field name
$b=$_REQUEST['address'];
$c=$_REQUEST['dob'];
$d=$_REQUEST['gender'];
$e=$_REQUEST['category'];
$f=$_REQUEST['phone'];
$g=$_REQUEST['mail'];
$h=$_REQUEST['password'];
$i=$_REQUEST['adhar'];//text field name
$m=$_REQUEST['photo'];
$n=$_REQUEST['state'];//text field name
$o=$_REQUEST['district'];
$p=$_REQUEST['city'];
$r=$_REQUEST['ano'];
$s=$_REQUEST['ifsc'];
$sql="INSERT INTO `registration`(`name`, `address`, `dob`, `gender`, `categor`, `phone`, `adhar`, `photo`, `sname`, `dname`, `panchayath_name`,`account`, `ifsc`) VALUES ('$a','$b','$c','$d','$e','$f','$i','$m','$n','$o','$p','$r','$s')";
//$result=mysqli_query($con,$sql)"; //or die("DB Error");print on database
$sql1="INSERT INTO `login`(`roleid`, `username`, `password`, `status`) VALUES (3,'$g','$h',0)";
if (mysqli_query($con,$sql) > 0) {
if (mysqli_query($con,$sql1) > 0) {
		echo "<script>alert('Success');</script>";
}
}
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
<td><h2 align="center">CHANGE PROFILE</h2></td>
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
  <form action="#" name="myform" id="myform" method="get">
     <b><label for="fname">Name</label><b>
    <input type="text" id="name" name="name">

   <b> <label for="address">Address</label></b>
    <textarea name="address" id="address" rows="4" cols="20"></textarea>
	<b><label for="dob">Date Of Birth</label></b>
    <input type="date" name="dob" id="dob">
	<b><label for="gender">Gender</label></b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="radio" name="gender" id="gender" value="male" >Male
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="radio" name="gender" id="gender" value="female">Female
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="radio" name="gender" id="gender" value="others">Others
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp


	
	<b><label for="category">Category</label></b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="radio" name="category" id="category" value="general" >General
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="radio" name="category" id="category" value="obc">OBC
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="radio" name="category" id="category" value="sc">SC
	&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="radio" name="category" id="category" value="st">ST
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

	<b><label for="phone">Phone</label></b>
    <input type="number" id="phone" name="phone">
	
	<b> <label for="adhar">Adhar Number</label></b>
    <input type="number" id="ano" name="adhar">
	<b><label for="fname">Photo</label></b>
    <input type="file" id="photo" name="photo">
	<b><label for="state">State</label></b>
    <select id="state" name="state" onchange="getId(this.value);">
      <option value="select">Select</option>
      <?php
	  $query = "SELECT * FROM state";
	  $results = mysqli_query($con,$query);
	  while($result=mysqli_fetch_array($results))
	  {
		  ?>
		 <option value="<?php echo $result["sid"];?>">
		 <?php echo $result["sname"];?></option> 
<?php
	  }
?>	  
    </select>
	<b><label for="district">District</label></b>
    <select id="district" name="district" onchange="getIdP(this.value);">
      <option value="distict">District</option>
          </select>
	<b><label for="city">Panchayath</label></b>
    <select id="city" name="city">
	 <option value="city">Panchayath</option>
      
    </select>
	<b><label for="account">Account Number</label></b>
    <input type="number" id="ano" name="ano">

   	<b><label for="ifsc">IFSC Code</label></b>
    <input type="text" id="ifsc" name="ifsc">
     
    <b><label for="mail">Mail Id</label></b>
    <input type="text" id="mail" name="mail">
	<b><label for="password">Password</label></b>
	    <input type="password" id="password" name="password">

  
    <input type="submit" name="submit" value="Change">
  </form>
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

  </form>
</div>

</body>

<!-- Mirrored from www.w3schools.com/css/tryit.asp?filename=trycss_forms By www.freedomhunt.tk, Thu, 02 Jun 2016 12:17:52 GMT -->
</html>
