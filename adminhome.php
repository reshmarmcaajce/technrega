<?php
include 'connection.php';
 session_start();
    if(!isset($_SESSION['uid'])){
        header("location:login.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:black;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color:orange;
}

li.dropdown {
    display: inline-block;
     font-size:20;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: orange;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: crimson;
	font-size:20;
    padding: 12px 19px;
    text-decoration: none; display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color:grey}

.dropdown:hover .dropdown-content {
    display: block;
}
body{
           background-image:url(v.jpg);
          background-size:100%;
	       background-repeat:no-repeat;
		   height:500px;
		   width:100%;
		   
		   }	

a:hover{
               background-color:orange;
}
</style>		
</head>
<body>
<table border="0" style="height:100px;width:100%;">
<tr>
<td ><img src="logo1.jpg" alt="Mountain View"></td>
<td  style="background-image:url(1.jpg);width:83%; background-repeat:repeat-x" <h1 align="center" style="font-size:45pt"><b>
<h1>MAHATHMA GANDHI NATIONAL RURAL EMPLOMENT GUARANTEE ACT-2005</h1></td>
<td  style="background-image:url(11.jpg);height:150px;width:80%; background-repeat:repeat-x"></td>
</tr>
</table>
<div  class="" style="background-color:grey; color:#ffffff; padding:5px;">
 <table style="background-color:grey;>  <tr><ul>
<a href="" style="font-size:20pt; color:#ffffff;"></a>
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

  
  <a href="logout.php" style="font-size:20pt; color:#ffffff;">Logout</a>
  
  <li class="dropdown">
    <a href="#" style="font-size:20pt; padding:3px; color:#ffffff;">Services</a>&nbsp&nbsp
	
	
	
    <div class="dropdown-content">

	  <a href="materegistration.php" style="font-size:15pt;">Mate Registration</a>
      <a href="notification.php" style="font-size:15pt;">Notification</a>
	<!--   <a href="uploadjobcard.php" style="font-size:15pt;">Upload JobCard</a>-->
<a href="approvejobreq.php" style="font-size:15pt;">Approve Job</a>
<a href="searchuser.php" style="font-size:15pt;">Search</a>
<a href="viewevents.php" style="font-size:15pt;">Events</a><br>
<a href="wallet.php" style="font-size:15pt;">Wallet</a><br>


<!--<a href="searchuser.php" style="font-size:15pt;">Approve Request</a>-->



     </div>
  </li>
  <li class="dropdown">
    <a href="#" style="font-size:20pt; padding:3px; color:#ffffff;">View</a>
		
    <div class="dropdown-content">
	  <a href="alluserpronew.php" style="font-size:15pt;">User Profile</a><br>
	  	  <a href="viewmateprofile.php" style="font-size:15pt;">Mate Profile</a><br>
	  	  <a href="gmap.php" style="font-size:15pt;">Sitemap</a><br>
		  	  	  <a href="viewattendance.php" style="font-size:15pt;">Attendance</a><br>


		  
&nbsp&nbsp&nbsp&nbsp
	  

     </div>
  </li>
 
  </ul></tr></table>
 </div>
<table border="1" style="height:100px;width:100%;">
<tr>
<td>
<table border="1" style="height:100px;width:100%;">
<tr>
<td style="background-color:grey;">
<p style="font-family:lucida calligraphy;color:white;font-size:8pt;"><i>"The Mahathma Gandhi National Rural Emploment 
Guarantee Act aims at enhancing the livelihood securit of people in rural areas b guaranteeing hundred days of wage employment 
in a financial year to a rural household whose adult members volunteern to do unskilled manual work
The act was first proposed in 1991 by P.V. Narasimha Rao.Based on this pilot experience, NREGA was scoped up to covered all 
the districts of India from 1 April 2008.The statute is hailed by the government as "the largest and most ambitious social 
security and public works programme in the world".The World Bank termed it a "stellar example of rural development"</i></p>
</td>
<td class="main" width="80%" style="vertical-align:top;" >
					<div>
					   <div alt="a" style="max-width:100px;position:relative;top:5px;">
                                 <img class="mySlides" src="m10.jpg" alt="d" style="width:850px;height:300px;">
 								 <img class="mySlides" src="m18.jpg" alt="b" style="width:850px;height:300px;">
 								 <img class="mySlides" src="m12.jpg" alt="c" style="width:850px;height:300px;">
                                 <img class="mySlides" src="m11.jpg" alt="d" style="width:850px;height:300px;">
								 <img class="mySlides" src="m16.jpg" alt="d" style="width:850px;height:300px;">
								 <img class="mySlides" src="m17.jpg" alt="d" style="width:850px;height:300px;">
								 <img class="mySlides" src="m25.jpg" alt="d" style="width:850px;height:300px;">
								 
								</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</div>
</tr>
</table>

</td>


</table>
</body>
</html>
