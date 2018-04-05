<!DOCTYPE html>
<?php
	session_start();
	include './connection.php';
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
<html>
<head>
<style>

a:hover{
               background-color:orange;
}
input[type=text],radio {
    width: 100%;
    padding: 8px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=password],radio {
    width: 100%;
    padding: 8px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=button],radio {
    width: 100%;
    padding: 8px 20px;
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
    padding: 8px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}
input[type=button]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
label{
	color:green;
}
button
{
width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 8px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;	
}
</style>	
</head>
<body>


<!--<div  class="" style="background-color:grey; color:#ffffff; padding:5px;">-->
<table style="background-color:grey;>  <tr><ul>
<a href="" style="font-size:20pt; color:#ffffff;align:right;"></a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 <a href="index.php" style="font-size:20pt; color:#grey;">HOME</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <!--<a href="" style="font-size:20pt; color:#ffffff;">Mate Registration</a>-->
   </div>
<hr> <a href="index.php" style="font-size:20pt; color:#ffffff;">Home</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
</hr>

<div  class="" style="background-color:green; color:#ffffff; padding:25px;margin-left:360px;margin-right:360px;margin-top:1px;">

<div>
  <form action="#" name="myform" id="myform" method="POST">
    <b> <label for="fname">Username</label></b>
    <input type="text" id="mail" name="mail">
	<br>
	<br>

   	<b><label for="dob">Password</label></b>&nbsp
    <input type="password" name="password" id="password">
     
    <input  align="center" type="submit" name="submit" value="Login">
	<button> <a href="forgotpassword.php">Forgot Password</a></button>
  </form>
</div>

</div> 
</td>

</tr>
</table>


</td>
</td>
</tr>
</table>
<?php
		
            if(isset($_POST["submit"])){
				//$captcha = $_POST['g-recaptcha-response'];
//$secret = "6LfRVEEUAAAAADG0cdW86c3mTtpCoWAuCHkTcuTm";
//$ip = $_SERVER['REMOTE_ADDR'];
//$action = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip");
//$result = json_decode($action,TRUE);
                $email=$_POST['mail'];
                $p1=$_POST['password'];
				$p=encryptIt($p1);
                //echo $email;
				//echo $p;
				$c=decryptIt($p);
				//echo $c;
               // if($result['success']){
                $sql3=mysqli_query($con,"SELECT  * FROM `login` where username='$email' and password='$p' ");
                if($row= mysqli_fetch_array($sql3)){
					
					$result5="SELECT * FROM login where username='$email'";
					$result6=mysqli_query($con,$result5);
					while($row5 = mysqli_fetch_array($result6))
					{
						$uid=$row5['uid'];

					}
					$_SESSION['email']=$email;
                    $_SESSION['uid']=$uid;
					$_SESSION['roleid']=$row['roleid'];
					//echo $_SESSION['role_type'];
                    //$_SESSION['utype']=$row['utype'];
                    //$sql4=mysqli_query($con,"SELECT  * FROM `user` where uname=$uname");
                    //$row1= mysqli_fetch_array($sql4);
                    //if($row1['status']==2){
                        //echo "<script> alert('Waiting for Admin Approval')</script>";
                    //}
                    //else{
						
						if($_SESSION['roleid']==1){
					?>
							<script>
								window.location="adminhome.php";
							</script>
					<?php
						}
						else if($_SESSION['roleid']==2){
					?>
							<script>
								window.location="matehome.php";
							</script>
					<?php
						}
						else{
					?>		
							<script>
								window.location="userhome.php";
							</script>
							<?php
						}
					
        ?>
                        <script>
				window.location="userhome.php";
			</script>
        <?php
                //}
                }
                else{
                    echo "<script> alert('Invalid username/Password')</script>";
                }
               // }
		
		//else{
		//	echo "<script> alert('invalid ')</script>";
		//}
			}
        ?>
    
</body>
</html>
