<?php
include 'connection.php';
//include 'logcheck.php';
function encryptIt($q){
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
    return( $qEncoded );
}
function decryptIt( $q ) {
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
    return( $qDecoded );
    }
?>
<?php




//if(!isset($_SESSION["uid"])){
 // header("location: ./");
//}
if(isset($_POST['pw_change'])){
		$pww=$_POST['cpassword'];
		$pw1=encryptIt($_POST['newpassword']);
        $pw=encryptIt($_POST['conpassword']);
        $userid=$_SESSION["uid"];
		$pass=encryptIt($pw1);
		if($pw1==$pw)
		{
        $query=mysqli_query($con,"update `login` set password='$pw1' where uid='$userid'") or die("Error is".mysqli_error($con));
		}
		//echo $userid;
	echo "<script>window.location.href='logout.php'</script>";
        //header('location: ./logout.php');
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="https://rawgit.com/ozonhub/oh-autoVal/master/css/oh-autoval-style.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>

<script src="https://rawgit.com/ozonhub/oh-autoVal/master/js/oh-autoval-script.js"></script>
<title>CLICK AND BUY</title>
<link rel="stylesheet" href="coe.css" type="text/css">
<style>
body {margin:0;}
.dropbtn {
    background-color: #4d4d00;
    color: white;
    padding: 10px;

    font-size: 10px;
    border: none;
    cursor: pointer;
}

.dropdown {
	margin-left:1050px;
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: #8400ff;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #7070db;
    position: fixed;
    top: 0;
    width: 100%;
}
 .footer
  {
	  width:100%;
	  height:20%;
	  background-color:black;
	  float:left;
	  position:relative;
	  text-align:center;
	  color:white;
  }

li {
    float:right;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #1a1a00;
}

.active {
    background-color: white;
}
h1 {
    text-shadow: 2px 2px #FF0000;
}
p {
    text-indent: 50px;
}
.left {
    position: relative;
    right: 0px;
    width: 300px;
    float:left;
    padding: 10px;
}
.right {
    position: absolute;
    right: 0px;
    width: 300px;
    float:left;
    padding: 10px;
}
  .dropdown
{
position: relative;
display: inline-block;
}
.dropdown-content
 {
	z-index:2;
	border-radius: 5px;
	font-size:20px;
  display: none;
  position: absolute;
  background-color: black;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	box-width:10%;
  padding: 12px 24px;
}
.dropdown:hover .dropdown-content
  {
  display: block;
  }
ul {
    list-style-type: none;
    margin: 5;
    padding: 0;
    overflow: hidden;
    background-color: #2441C7;
    top: 0;
    width: 100%;
}

li {
    float: right;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
li a:hover {
    background-color:#000;
}
div.header{
text-align:center;
font-family:serif;
height:100px;
color:green;
background-color:white;
margin-top:0px;
}

#heading{
position:absolute;
top:10px;
right:20px;
width:100%;
}


.button{
	width:130px;
	height:30px;
	background-color:#4CAF50;
	border-radius:13px;
	cursor: pointer;
}
.login{
	border:black;
	height : 400px;
	width: 250px;
	position: absolute;
	left:1000px;
	top:168px;
	color:blue;
}
	.login7{
	border:black;
	height : 400px;
	width: 650px;
	position: absolute;
	rightt:1000px;
	top:168px;
	color:blue;
}
	.login6{
	border:black;
	height : 400px;
	width: 250px;
	position: absolute;
	right:900px;
	top:200px;
	color:blue;
}
.footer{
	position:absolute;
	top:800px;
	width:100%;
	color:white;
	background-color:#060001;
	height:150px;
}
.imagegalllery1{
	position:absolute;
	top:168px;
	width:100%;
	height:300px;
}
.imagegalllery{
	position:absolute;
	top:600px;
	width:100%;
	height:300px;
}
.img{
	position: absolute;
	border: 3px solid black;
	width: 900px;
	height: 600px;
	top: 145px;
}
.login_pic{
    width: 30%;
    border-radius: 50%;
}
.login_image_container{
    padding-top: 5px;
    padding-bottom: 5px;
    padding-right:16px;
    padding-left: 16px;
}
.div {
       background-color:black;
       height:10%;
}
.floating-box{
           float:left;
           width:500px;
           height:350px;
           margin:10px;

          }
.float-box{
            float:right;
            width:300px;
            height:500px;
            margin:30px;

            }
.float-box1{
             float:left;
             width:1318px;
             height:175px;
             margin:10px;
             background-color:gray;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
   box-sizing: border-box;

}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 60%;
}
form {
    border: 3px solid #f1f1f1;
}






.container {
    padding: 60px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }

}
html{
background:url('hj.jpg') no-repeat center fixed;
background-size:cover;
}
</style>
</head>
<body>
<link rel="style sheet" type="text/css" href="style2.css">
</br></br></br></br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="LOGO1.png" style="margin-left:0px"><font style="color:#555555;font-family:Agency FB;margin-right:10px">
<ul>
        <h2><li><a href="logout.php">Logout</a></li></h2>
        <h2><li><a href="changepassword.php">Change Password</a></li></h2>
        
        <h2><li><a href="inbox.php">Inbox</a></li></h2>
        <h2><li><a href="mygroup.php">Group</a></li></h2>
        <h2><li><a href="feedback.php">Feedback</a></li></h2>
        <h2><li><a href="deliveryshow.php">Delivery details</a></li></h2>
        
         <h2><li><a href="bank.php">Bank Details</a></li></h2>
        <h2><li><a href="userproduct.php">Products</a></li></h2>
        <h2><li><a href="myprofile.php">Profile</a></li></h2>
        <h2><li><a href="usershome.php">Home</a></li></h2>
      </ul>
      

<form name="myform" method="post" action ="#">
<table align="center" >
<td>
</td>
<tr>
<tr><td><font color="blue">Current Password:</font></td><td><input type="password" name="cpassword" class="oh-autoval av-password" av-message="Invalid password"/></td></tr>

<tr><td><font color="blue">New  Password:</font></td><td><input type="password" name="newpassword" class="oh-autoval av-password" av-message="Invalid password"/></td></tr>
<tr><td><font color="blue">Confirm  Password:</font></td><td><input type="password" name="conpassword" class="oh-autoval av-password" av-message="Invalid password"/></td></tr>
<tr><td><input type="submit" name="pw_change"></td></tr>
</tr>
</table>
</form>
<script src="jquery-3.2.1.min.js"></script>
<script src="js/oh-autoval-script.js"></script>
</div>
</body>
</html>
