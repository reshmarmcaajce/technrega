<?php
include_once "connection.php";
session_start();
    $uid=$_SESSION['uid'];
	$r = date('y-m-d');
?>
<html>
<style>
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
table {
    border-collapse: collapse;
    width: 50%;
	align:center;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
h2{
	color:green;
	text-align:center;
}
</style>
<body>
<div  class="" style="background-color:grey; color:#ffffff; padding:13px;">
 <a style="color:white;" href="matehome.php">HOME</a>
</div>
<form action="" method="POST">
<center><h3>EMPLOYEE ATENDANCE</h3>
<table >
					<thead>
                       
                        <tr class="new-b">
                            
                            <th class="text-center"> SL NO:</th>
                            <th class="text-center">Employees</th>
							<th class="text-center" >Date </th>
							<th class="text-center" >Attendance </th>

                        </tr>
		
                    </thead>
					
                    <tbody style="text-align: center;" class="ui1">
					
                        <tr  class="danger">
						<?php
						
                           $result1=mysqli_query($con,"select mpanchayath_name from mate where uid='$uid'");
							$row1=mysqli_fetch_array($result1);
							 $p=$row1['mpanchayath_name'];
						
                           $result=mysqli_query($con,"SELECT `regid`,`uid`, `name` FROM `registration` WHERE `panchayath_name`='$p'");
							
							/* selecting members list */
							$num=1;
					
                            while($row=mysqli_fetch_array($result))
                                  { 
							  /* printing members list */
									$f=$row["name"];
									 //$l=$row["l_name"];
									 $n=" ";
									 //$name=$f.' '.$l;
							
							  ?>
                            <td><?php echo $num; ?></td>
                            <td><?php echo $f; ?></td>
							
							<td><?php echo $r; ?></td>
							 <td>
							
									
							<input type="checkbox" name="cblist[]" value="<?php echo $row["uid"];?>" checked/>
							 </td>
                        </tr>
								  <?php
								   $num+=1;
								  }
								  
								  ?>
                        
                    </tbody>

                     
                </table></center>
				<div style="margin-top:10px;margin-left:480px;margin-right:500px;">

 <!--<button class="button" style="color:blue;" ><a href="matehome.php">Back</a></button>-->
     
	 <input class="button"  style="color:blue;" type="submit" name="submit" value="Submit">
	

	</form>
 </div>
 <div style="margin-top:10px;margin-left:485px;margin-right:500px;">

 <!--<button class="button" style="color:blue;" ><a href="matehome.php">Back</a></button>-->
 </div>
				<?php
				
				
if(isset($_POST["submit"])){
	
	
	 $result1=mysqli_query($con,"SELECT `regid`, `name` ,`uid` FROM `registration` WHERE `panchayath_name`='$p'");
							
							/* selecting members list */
							$num=1;
					
                            while($row1=mysqli_fetch_array($result1))
                                  {
									$uid=$row1["uid"]; 
									 $name=$row1["name"];
									  //0 for abcent
									  $sq="insert into attendance(`uid`, `empname`, `date`, `attendance_status`)
									  values('$uid','$name','$r','0')";
									  $s1=mysqli_query($con,$sq);
									  
								  }
	
	
//checking checkbox and updating the status
	 foreach($_POST['cblist'] as $item)
	 {
		//updating status=1 for present 
		$sql="update attendance set attendance_status=1 where uid=$item";
		$s=mysqli_query($con,$sql);
      
					}//foreach close
}


				
				?>
				</body>
				</html>