<?php
include 'connection.php';
//session_start();
if(!(isset($_SESSION['user_name'])))
{

header('location:userhome.php');
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
button{
	width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	
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
<td><h1 align="center">CHANGE PASSWORD</h1></td>
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
  <b> <label for="bank">Username</label></b>
    <input type="text" id="uname" name="uname">
    <b><label for="account">Old Password</label></b>
    <input type="password" id="op" name="op">

   	<b><label for="ifsc">New Password</label></b>
    <input type="password" id="np" name="np">
	<b><label for="cif">Confirm Password</label></b>
    <input type="password" id="cp" name="cp">
	<button class="button" name="submit">change</button     
  </form>
</div>
	  
</form>

  </div>
<!--<center><img src="clg.png" id="ajce_img"width="1100px" height="300px" ></center>-->

   
      

      
    </body>
    </html>
