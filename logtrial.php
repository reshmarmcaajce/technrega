<!DOCTYPE html>
<html lang="en">
    <?php
        include './conn.php';
        session_start();
    ?>

<head>
    <meta charset="utf-8">
    <title>Global Store </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- CSS -->
    <link href="css/mystyle.css" rel="stylesheet" type="text/css" />
    <script>
        function  addUser(){
                var gl_reg_name= document.gl_reg_form.gl_reg_name.value;
                if((gl_reg_name===null)||(gl_reg_name.length<5)){
                    document.gl_reg_form.gl_reg_name.style.border = "1px solid red";
                    alert("Enter Full Name");
                    document.gl_reg_form.gl_reg_name.focus();
                    return false;
                }
                if((gl_reg_name.length>25)){
                    document.gl_reg_form.gl_reg_name.style.border = "1px solid red";
                    alert("Name Must Not Exceed 24 Characters");
                    document.gl_reg_form.gl_reg_name.focus();
                    return false;
                }
                var gl_reg_num=document.gl_reg_form.gl_reg_num.value;
                if(isNaN(gl_reg_num)){
                    document.gl_reg_form.gl_reg_num.style.border = "1px solid red";
                    alert("Phone Number Only Contain Digits");
                    document.gl_reg_form.gl_reg_num.focus();
                    return false;
                }
                if(gl_reg_num.length !== 10){
                    document.gl_reg_form.gl_reg_num.style.border = "1px solid red";
                    alert("Phone Number must be 10 Digits");
                    document.gl_reg_form.gl_reg_num.focus();
                    return false;
                }
                
                var gl_reg_adhar=document.gl_reg_form.gl_reg_adhar.value;
                if(gl_reg_adhar.length !== 12){
                    document.gl_reg_form.gl_reg_adhar.style.border = "1px solid red";
                    alert("Adhar Number Must Contain 12 Numbers");
                    document.gl_reg_form.gl_reg_adhar.focus();
                    return false;
                }
                if(isNaN(gl_reg_adhar)){
                    document.gl_reg_form.gl_reg_adhar.style.border = "1px solid red";
                    alert("Admission Number Only Contain Digits");
                    document.gl_reg_form.gl_reg_adhar.focus();
                    return false;
                }
                
                var gl_reg_id=document.gl_reg_form.gl_reg_id.value;
                if(gl_reg_id.length<4){
                    document.gl_reg_form.gl_reg_id.style.border = "1px solid red";
                    alert("Admission Number Must Be 4 characters Long");
                    document.gl_reg_form.gl_reg_id.focus();
                    return false;
                }
                if(gl_reg_id.length>5){
                    document.gl_reg_form.gl_reg_id.style.border = "1px solid red";
                    alert("Admission Number Must Not Exceed 5 characters");
                    document.gl_reg_form.gl_reg_id.focus();
                    return false;
                }
                if(isNaN(gl_reg_id)){
                    document.gl_reg_form.gl_reg_id.style.border = "1px solid red";
                    alert("Admission Number Only Contain Digits");
                    document.gl_reg_form.gl_reg_id.focus();
                    return false;
                }
                
                
                var gl_reg_email=document.gl_reg_form.gl_reg_email.value;
                var atpos = gl_reg_email.indexOf("@");
                var dotpos = gl_reg_email.lastIndexOf(".");
                if((atpos<1)||(dotpos<atpos+2)||(dotpos+2>gl_reg_email.length)){
                    document.gl_reg_form.gl_reg_email.style.border = "1px solid red";
                    document.gl_reg_form.gl_reg_email.focus();
                    alert("Enter a Valid Email Address");
                    return false;
                }
                
                var gl_reg_pwd= document.gl_reg_form.gl_reg_pwd.value;
                var gl_reg_cpwd=document.gl_reg_form.gl_reg_cpwd.value;
                if(gl_reg_pwd.length < 4 ){
                    document.gl_reg_form.gl_reg_pwd.style.border = "1px solid red";
                    document.gl_reg_form.gl_reg_pwd.focus();
                    alert("Password Should contain atleast 4 characters");
                    return false;
                }
                if(gl_reg_pwd !== gl_reg_cpwd){
                    document.gl_reg_form.gl_reg_cpwd.style.border = "1px solid red";
                    document.gl_reg_form.gl_reg_cpwd.focus();
                    alert("Mismatching Passwords");
                    return false;
                }
            }
        </script>
</head>	
<body>
    <div class="menu_container" >
        <div class="container clearfix">

            <!-- LOGO -->
            <div class="logo">
                <a href="index.php" ><img src="images/logo.png" alt="" style=" height:60px;" /></a>
            </div><!-- //LOGO -->

            <!-- MENU -->
            <ul class="navmenu center">
                <li class="sub-menu"><a href="index.php" >Home</a>
                    </li>
                    <li class="sub-menu"><a href="about.php" >about</a>
                    </li>
                    <li class="sub-menu"><a href="contacts.php" >contact</a>
                    </li>
                    <li class="sub-menu"><a href="javascript:void(0);" >Blog</a>
                    </li>
                    <li class="first active"><a href="login.php" >Login</a></li>
            </ul><!-- //MENU -->
        </div>
    </div>
    <hr />
    <!-- CONTAINER -->
    <div class="gl_login_container">
        <div class="gl_login_image_container">
            <center>
                <img src="images/login_image.png" alt="loginpic" class="gl_login_pic" id="gl_login_pic">
            </center>
        </div>
        <div class="gl_login_content_container">
                    <form id="frmLogin" method="POST" action="login.php" class="frmLogin" name="frmLogin">
                        <input type="hidden" id="hdaim" name="hdaim" value="one" />
                        <table class="gl_login_input_table" align="center" >
                            <tr>
                                <td>
                                    <input type="number" name="llid" id="llid"  style="width:100%;padding:20px 20px;" required placeholder="Login Id" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="password" name="lpwd" id="lpwd" style="width:100%;padding:20px 20px;" required placeholder="Password"/>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><a href="forgotpassword.php">Forgot Password </a></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" value="LOGIN" name="gl_login_button" class="gl_login_button" id="gl_login_button" onclick="" />
                                </td>
                            </tr>

                            <tr></tr>
                            <tr></tr>

                        </table>
                    </form>
            </div>
    </div>
     <div class="gl_main_login_reg_container">
        <div class="gl_login_reg_container">
            <center>
            <div class="gl_conternt_login_reg_container">
                <p><a class="log_reg_link" onclick="document.getElementById('id01').style.display='block'" style="width:auto;" alt="New users click Here">I'm New</a></p>
            </div>
            </center>   
        </div>
    </div>
    <div id="id01" class="gl_reg_modal">
        <?php
            if(isset($_POST["gl_reg_signupbtn"])){
            $name= htmlspecialchars($_POST['gl_reg_name']);
            $utype= htmlspecialchars($_POST['gl_reg_utype']);
            $dept= htmlspecialchars($_POST['gl_reg_dept']);
            $gender= htmlspecialchars($_POST['gl_reg_gender']);
            $email= htmlspecialchars($_POST['gl_reg_email']);
            $pno= htmlspecialchars($_POST['gl_reg_num']);
            $adharno= htmlspecialchars($_POST['gl_reg_adhar']);
            $id= htmlspecialchars($_POST['gl_reg_id']);
            $pwd= htmlspecialchars($_POST['gl_reg_pwd']);
            
            $picfile= "profile/".time()."".htmlspecialchars($_FILES['gl_reg_picname']['name']);
//                echo "$picfile";
            move_uploaded_file($_FILES['gl_reg_picname']['tmp_name'], $picfile);

            $sql1="insert into user (uname,name,department,email,phone,adhar,gender,pic,status)"
                    . "values('$id','$name','$dept',"
                    . "'$email',$pno,'$adharno','$gender','$picfile',2);";
            
            $sql2="insert into login (uname,password,utype,status)"
                    . "values('$id','$pwd','S',1);";
//                echo $sql1;
//                echo $sql2;
            if (mysqli_query($con,$sql1) > 0){
            if (mysqli_query($con,$sql2) > 0){
                echo "<script> alert('Success'); </script>";
            }
            }
            else{
                    echo "<script> alert ('Admission Number / Staff ID Already Exists !'); </script>";
                }
            }
    ?>
        
        
        
        
            <span onclick="document.getElementById('id01').style.display='none'" class="gl_form_close" title="Close Modal">×</span>
                <form class="gl_reg_modal-content animate" id="gl_reg_form" name="gl_reg_form" action="login.php" method="POST"  onsubmit="return addUser()" enctype="multipart/form-data" >
                    <div class="gl_form_container" align="center">
                        <h2 align="center" style="color: black;">I'M NEW</h2>
                        <input type="text" placeholder="Enter Name" name="gl_reg_name"  id="gl_reg_name" required>
                        <br/>
                        
                        <select name="gl_reg_utype" id="gl_reg_utype" required>
                            <option value="T">Staff</option>
                            <option value="S">Student</option>
                        </select>
                        <br/>
                        
                        <select name="gl_reg_dept" id="gl_reg_dept" required>
                            <option value="">Department</option>
                            <option value="MCA">MCA</option>
                            <option value="Auto Mobile">Auto Mobile</option>
                            <option value="Machanical">Machanical</option>
                            <option value="EEE">EEE</option>
                            <option value="EC">EC</option>
                            <option value="Computer Science">Computer Science</option>
                            <option value="Chemical">Chemical</option>
                            <option value="IT">IT</option>
                            <option value="Metallaurgy">Metallaurgy</option>
                            <option value="Civil">Civil</option>
                        </select>
                        <br/>
                        
                        <select name="gl_reg_gender" id="gl_reg_gender" required>
                            <option value="">Gender</option>
                            <option value="m">Male</option>
                            <option value="f">Female</option>
                            <option value="t">Transgender</option>
                        </select>
                        <br/>
                        
                        <input type="email" placeholder="Email" name="gl_reg_email" id="gl_reg_email" required>
                        <br/>
                        
                        <input type="phone" placeholder="Phone Number" name="gl_reg_num"  id="gl_reg_num" required>
                        <br/>
                        
                        <input type="number" placeholder="Adhar Number" name="gl_reg_adhar"  id="gl_reg_adhar" required >
                        <br/>
                        
                        <input type="number" placeholder="Admission No/Staff ID" name="gl_reg_id"  id="gl_reg_id" required>
                        <br/>
                        
                        <input type="password" placeholder="Password" name="gl_reg_pwd"  id="gl_reg_pwd" required>
                        <br/>
                        
                        <input type="password" placeholder="Confirm Password" name="gl_reg_cpwd"  id="gl_reg_cpwd" required>
                        <br/>
                        
                        <input type="file" id="gl_reg_picname" name="gl_reg_picname" placeholder="Upload Profile Pic" required />
                        <br/>
                        <br/>
                        
                        
                            <div class="gl_reg_clearfix">
                                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="gl_reg_cancelbtn">Cancel</button>
                                <input type="submit" name="gl_reg_signupbtn" class="gl_reg_signupbtn" id="gl_reg_signupbtn"  value="Sign Up">
                            </div>
                    </div>
                </form>
        </div>

        <script>
            // Get the modal
            var modal = document.getElementById('id01');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target === modal) {
                    modal.style.display = "none";
                }
            }
        </script>
        <?php
            if(isset($_POST["gl_login_button"])){
                $uname= htmlspecialchars($_POST['llid']);
                $p=htmlspecialchars($_POST['lpwd']);
                
                
                $sql3=mysqli_query($con,"SELECT  * FROM `login` where uname=$uname and password='$p' and status=1 ");
                if($row= mysqli_fetch_array($sql3)){
                    $_SESSION['uname']=$uname;
//                    $_SESSION['password']=$p;
//                    $_SESSION['name']=$row['name'];
//                    $_SESSION['pic']=$row['pic'];
                    $_SESSION['utype']=$row['utype'];
                    $sql4=mysqli_query($con,"SELECT  * FROM `user` where uname=$uname");
                    $row1= mysqli_fetch_array($sql4);
                    if($row1['status']==2){
                        echo "<script> alert('Waiting for Admin Approval')</script>";
                    }
                    else{
        ?>
                        <script>
				window.location="userhome.php";
			</script>
        <?php
                }
                }
                else{
                    echo "<script> alert('Invalid username/Password')</script>";
                }
                }
        ?>
    
</body>
</html>

                