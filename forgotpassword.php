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

	
	
	 if(isset($_POST['submit']))
    {   
        $a=$_POST["mail"];
		$b=$_POST["phone"];
        //echo $a;
		//echo $b;
        $sql="SELECT * FROM login where username='$a'";
        $result=mysqli_query($con,$sql);
        while($row=(mysqli_fetch_array($result))){
        $d=$row['username'];
        //echo $d;
        $pw=decryptIt( $row['password'] );
        //echo $pw;
        }
        if($a==$d)
        {
        //$to ="$b";
        
            //$subject = "online boutique";
            //$message ="<html>
			
			
			$ms="PASSWORD = $pw  - MGNREGA";
	        //echo $ms;
	        send($ms,$b);
			//$message="Your Password Is Send To Your PhoneNumber";
			//echo $message;
			
		  echo "<script> alert('Your Password Is Send To Your PhoneNumber')</script>";

            
    }
    
    
    }
    
    ?>


<html>
<head>
<script src='https://www.google.com/recaptcha/api.js'></script>
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
<hr> <a href="login.php" style="font-size:20pt; color:#ffffff;">Back To Login</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
</hr>

<div  class="" style="background-color:green; color:#ffffff; padding:25px;margin-left:360px;margin-right:360px;margin-top:1px;">

<div>
  <form action="#" name="myform" id="myform" method="POST">
    <b> <label for="fname">Username</label></b>
    <input type="text" id="mail" name="mail">
	<br>
	<br>

   	<b><label for="phone">PhoneNumber</label></b>&nbsp
    <input type="text" name="phone" id="phone">
     
    <input  align="center" type="submit" name="submit" value="Recover">
	
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

</body>
</html>
