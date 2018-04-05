<html>
<head></head>
<body>
<?php
include 'connection.php';
 session_start();
    if(!isset($_SESSION['uid'])){
        header("location:login.php");
    }

$a=$_GET['id'];
//echo $a;


$results=mysqli_query($con,"SELECT `image` FROM `registration` WHERE regid='$a'");
while($row=mysqli_fetch_array($results))
{
?>


<form name="myform"  method="post">
		<div class="wrap"> <img src="<?php echo $row['image'];?>" width="300" height="300"/>
          
        </div>
		</form>

<?php } ?>
</body>
</html>
