<?php 
include('./check.php');
?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="CSS/inheri.css"> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>agent master</title>
</head>
<body>




  
<!-- <?php
session_start();


if(isset($_POST["update"]))
include 'dbconfig.php';

$username = $_POST['username'];
        $password = $_POST['oldpassword'];
        $newpassword = $_POST['newpassword'];
        $confirmnewpassword = $_POST['confirmnewpassword'];
        $result = mysql_query("SELECT password FROM user_info WHERE 
user_id='$username'");
        if(!$result)
        {
        echo "The username you entered does not exist";
        }
        else if($password!= mysql_result($result, 0))
        {
        echo "You entered an incorrect password";
        }
        if($newpassword=$confirmnewpassword)
        $sql=mysql_query("UPDATE user_info SET password='$newpassword' where 

 user_id='$username'");
        if($sql)
        {
        echo "Congratulations You have successfully changed your password";
        }
       else
        {
       echo "Passwords do not match";
       }
      ?> -->


<div class="nav1" >
<div class="dropdown" style="margin-left: 94%; padding-top: 2px;">
      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
      <div class="media">
    <div class="media-body">
    
    </div>
    <div class="media-right" style="height:10px;" >
      <img src="images/img_avatar1.png" class="media-object" style="height:25px;">
    </div>
  </div>
      </button>
      <ul class="dropdown-menu" style="">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="changepasswd.php">Change Password</a></li>
        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
      </ul>
    </div>       
</div>



  <div id="navbar">
    <br>
    
    <a  id="logo" href="https://sansoftwares.com/">Sansoftwares.com</a><br><br>
    <a style="color: white;" href="student.php">Student Form</a><br><br><br>
    <a style="color: white;" href="agentmaster.php">Agent Master</a><br><br><br>
    <a style="color: white;" href="report.php">Report</a><br><br><br>
    <!-- <a style="color: white;" href="logout.php">Logout</a><br><br><br> -->
    <!-- <input placeholder="sansoftwares" name="san"> -->
    <!-- <button type="submit" name="submit" value="Submit">logout</button> -->
  </div>
        <div class="section" >
            <div class="div1" >
    <h2><center>Change Password</center></h2>
</div><br><br><br>
    <form action="changepasswd.php" method="post">

    <label for="username">username:</label>
        <input type="text" id="username" name="username" placeholder="username" ><br><br>     
        <label for="old">Old Password:</label>
        <input type="password" id="old" name="old" placeholder="old password" ><span class="error">*<?php echo $error;?></span><br><br>

        <label for="New">New Password:</label>
        <input type="password" id="new" name="new" placeholder="New Password" ><br><br>

        <label for="Confirm">Confirm Password:</label>
        <input type="password" id="confirm" placeholder="Confirm Password" name="confirm" >
<br><br>


  

        <input type="submit" name="update" value="update password" required>

    </form>
</div>
</div>
</body>
</html>


