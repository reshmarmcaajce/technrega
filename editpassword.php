<?php
include 'connection.php';

 session_start();
    if(!isset($_SESSION['uid'])){
        header("location:login.php");
    }
function decryptIt( $q ) {
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
    return( $qDecoded );	
	}
	function encryptIt($q){
                $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
                $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
                return( $qEncoded );
            }
$uid=$_SESSION['uid'];
//echo $uid;
if(isset($_REQUEST['submit'])) //check on submit time
{

$op=$_REQUEST['op'];
$np=$_REQUEST['np'];
$cp=$_REQUEST['cp'];
$np1=encryptIt($np);
if ($np!=$cp) {
	echo "<script>alert('password is incorrect');</script>";
}
else if($op==$np)
{
	echo "<script>alert('Enter a Password Different From The Current Password');</script>";
	
}
else
{
	$sql="UPDATE `login` SET `password`='$np1' WHERE uid='$uid'";//$result=mysqli_query($con,$sql)"; //or die("DB Error");print on database
	$result=mysqli_query($con,$sql);

	echo "<script>alert('Password changed');</script>";
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
h2{
	color:green;
}
a{
	align:left;
	size:20pt;
}


</style>
<body>
<div  class="" style="background-color:grey; color:#ffffff; padding:13px;">
 <a href="userhome.php">BACK</a>
</div>
<table border="0" style="height:100px;width:100%;">
<tr>
<td><h2 align="center">CHANGE YOUR PASSWORD HERE!</h2></td>
</td>
</tr>
</table>
<div  class="div" style="background-color:grey; color:#ffffff; padding:25px;margin-left:190px;margin-right:190px;">
  <form action="#" name="myform" id="myform" method="get">
     	 
	<b><label for="password">Old Password</label></b>
	    <input type="password" id="op" name="op">
    <b><label for="password">New Password</label></b>
	    <input type="password" id="np" name="np">
    <b><label for="password">Confirm Password</label></b>
	    <input type="password" id="cp" name="cp">

  
    <input type="submit" name="submit" value="Change">
  </form>
  </div >

 </form>
</div>

</body>

<!-- Mirrored from www.w3schools.com/css/tryit.asp?filename=trycss_forms By www.freedomhunt.tk, Thu, 02 Jun 2016 12:17:52 GMT -->
</html>
