<?php
include 'connection.php';
 session_start();
    if(!isset($_SESSION['uid'])){
        header("location:login.php");
    }
?>
<!DOCTYPE html>
	<body>
		
			
		<div  class="" style="background-color:grey; color:#ffffff; padding:13px;">
 <a style="color:white;" href="matehome.php">HOME</a>
</div>
	<br><br><table>
	<form action="#" name="myForm" id="myForm" class="oh-autoval-form" method="post" onSubmit="return" >
<center>Upload Your Events</center><br>

					<center><input type="file" class="av-video" av-message="invalid video format" name="v" id="video"></center><br>
					<center><b>Event Description</b></center><br>
					<center><textarea name="description" class="av-name" av-message="enter valid description" id="description" cols="50" rows="5"></textarea></center><br>
					
					
					<center><input style="background-color: green;
						border: none;
						color: white;
						padding: 15px 32px;
						text-align: center;
						text-decoration: none;
						display: inline-block;
						font-size: 16px;
						margin: 4px 2px;
						cursor: pointer;
						border-radius:10px;
						height:40px;
						width:200px;
						margin-top:30px;
						margin-left:-3px;" 
					
					type="submit" name="submit" value="SUBMIT"></center>
					</form>
					<?php if(isset($_POST['submit']))
	{
		//$courseid=$_POST["course"];
		$video=$_POST["v"];
		$description=$_POST["description"];
		
		$sql="INSERT INTO `events`(`event`, `eventname`, `eventstatus`) VALUES('$video','$description',0)";
		//echo "$sql";
		$result=mysqli_query($con,$sql);
		
	}	?>
	
				    </div>
 </table>
    <div class="clear"></div>
  </main>
</div>


					</div>
					<div class="clear"></div>
					
					
<!--==============================footer=================================-->
			
		</div>
	</body>
</html>