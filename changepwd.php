<?php
include 'dbcon.php';
//session_start();
if(!(isset($_SESSION['user_name'])))
{

header('location:index.php');
}

if(isset($_POST['submit']))
{
$a=$_POST["uname"];
$b=$_POST["pwd"];
$c=$_POST["pwd2"];
$d=$_POST["pwd3"];
//print_r($b);
}

$sql="SELECT * FROM `tbl_login`";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
	$id=$_SESSION['log_id'];
	?>
	<?php
	
	if($a==  $row['user_name']&&$b==$row['password']&&$row['role_id']==2)
	{
			if($d!=$c)	
			{
				
				header('location:schangepsw.php');
				echo("password are not same");
				break;
			}

			else{
				
				$sql2="update `tbl_login` set password='$c' where log_id=$id";
				$result=mysqli_query($con,$sql2) ;
				echo("sucess");
				header('location:stafflogin.php');
				break;
				}
			}
	else
	{
		
		echo(" incorrect password");
		header('location:schangepsw.php');
		
	}
	
	if($a==  $row['user_name']&&$b==$row['password']&&$row['role_id']==3)
	{
			if($d!=$c)	
			{
				header('location:mchangepsw.php');
				echo("password are not same");
				break;
			}

			else{
				
				$sql2="update `tbl_login` set password='$c' where log_id=$id";
				$result=mysqli_query($con,$sql2) ;
				header('location:memberlogin.php');
				break;
				}
			}
	else
	{

		header('location:mchangepsw.php');
		echo(" incorrect password");
	}
	
	
	
	if($a==  $row['user_name']&&$b==$row['password']&&$row['log_id']==1)
	{
			if($d!=$c)	
			{
				header('location:adminchangepsw.php');
				echo("password are not same");
				break;
			}

			else{
				
				$sql2="update `tbl_login` set password='$c' where id=$id";
				$result=mysqli_query($con,$sql2) ;
				header('location:adminhome.php');
				break;
				}
			}
	else
	{

		('location:adminchangepsw.php');
		echo(" incorrect password");
	}
	
	

	
	

	?>	
	
	<?php	
}
?> 