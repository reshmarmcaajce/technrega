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


$results=mysqli_query($con,"SELECT `event` FROM `events` WHERE eventid='$a'");
while($row=mysqli_fetch_array($results))
{
?>


<form name="myform"  method="post">
		<div class="wrap"> <object width="1350"  height="625" data="<?php echo $row['event'];?>"/>
          
        </div>
		</form>

<?php } ?>
</body>
</html>
