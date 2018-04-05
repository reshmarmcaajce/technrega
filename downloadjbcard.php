<?php
include 'connection.php';
session_start();
$id=$_SESSION['uid'];

    /*if(!isset($_SESSION['uid'])){
        header("location:login.php");
    }
		
if(isset($_REQUEST['delete'])) //check on submit time
{
	$id=$_POST['hidden'];
	$sql5="DELETE FROM `notification` WHERE nid='$id'";
	$result5=mysqli_query($con,$sql5);
} */

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
<div  class="" style="background-color:orange; color:#ffffff; padding:13px;">
 <a href="userhome.php">BACK</a>
</div>
<h2>DOWMLOAD YOUR JOBCARD</h2>
<div  class="div" style="background-color:pink; color:#ffffff; padding:25px;margin-top:30px;margin-left:190px;margin-right:190px;">
<table>
<?php

$sql="SELECT  * FROM `jobcard` WHERE uid='$id'";
//echo $sql;	
$result=mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result))
{ 
$a=$row['jobcard'];//text field name
?>
<form  method="post" name="notif">

<tr>
<!--<td>
    <input type="text" name="name" id="noti" rows="5" cols="20" value='<?php echo $a ?> ' readonly>
	   

</td>-->
<td><a href="<?php echo $row['$jobcard'];?>" download>Download</a>
</tr>
<?php

?>
</table>
     </form>

<?php
}

?>

</div>

</body>

<!-- Mirrored from www.w3schools.com/css/tryit.asp?filename=trycss_forms By www.freedomhunt.tk, Thu, 02 Jun 2016 12:17:52 GMT -->
</html>
