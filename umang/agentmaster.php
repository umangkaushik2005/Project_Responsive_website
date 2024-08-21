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
<?php


    $usernameErr = $emailErr = $passwordErr = $teamleaderErr = "";
    // print_r($_SERVER["REQUEST_METHOD"].'-'.$_POST["submit"]);

  

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])){
            include('dbconfig.php');}

            if (empty($_POST["username"])) {
                $usernameErr = "Name is required";
            } else {
                $username = test_input($_POST["username"]);
            }

            if(empty($_POST["email"])){
                $emailErr = "Email is required";
            } else{
                $Email = test_input($_POST['email']);
            }

            if(empty($_POST["password"])){
                $passwordErr = "password is required";
            }else{
                $password = test_input($_POST['password']);
            }

            if(empty($_POST["teamleader"])){
                $teamleaderErr = "teamleader is required";
            }else{
                $teamleader = test_input($_POST['teamleader']);
            }

            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;}

            
        
        // print_r($Email != '');die;
    
    if (!empty($username) && !empty($password) && !empty($Email) && !empty($teamleader)) {
        $sql=" INSERT INTO my_users(username,password,email,teamleader)
        values('$username','$password','$Email','$teamleader');";
    
    
    
    
        // insert record after sunmit
    
        if(mysqli_query($conn, $sql) == true){
            // echo "successfully inserted";
            header("Location: agentmaster.php");
            exit();
        }
    
    
        else{
            echo "error: $sql <br> $conn->error";
        }
   
        mysql_close ($conn);
    
    }

    
    



?>




<div class="nav1" >
<a href="inheritance.php"><img style="height:40px; position:fixed;" src="images/Company_Logo (1).png "></a>
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
    
    <!-- <a  id="logo" href="https://sansoftwares.com/">Sansoftwares.com</a><br><br> -->
    <a style="color: white;" href="student.php">Student Form</a><br><br><br>
    <a style="color: white;" href="agentmaster.php">Agent Master</a><br><br><br>
    <a style="color: white;" href="report.php">Report</a><br><br><br>
    <!-- <a style="color: white;" href="logout.php">Logout</a><br><br><br> -->
    <!-- <input placeholder="sansoftwares" name="san"> -->
    <!-- <button type="submit" name="submit" value="Submit">logout</button> -->
  </div>
        <div class="section" >
            <div class="div1" >
    <h2><center>User Master</center></h2>
</div><br><br><br>
    <form action="agentmaster.php" method="post">
        <a class="task" href="agentmaster.php">Add</a>
        <a class="task" href="agentdata.php">List</a><br><br>
        <label for="username">username:</label>
        <input type="text" id="username" name="username" placeholder="username" ><span class="error">*<?php echo $usernameErr;?></span><br><br>

        <label for="email">Email:</label>
        <input type="email" id="Email" name="email" placeholder="Email" ><span class="error">*<?php echo $emailErr;?></span><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" placeholder="password" name="password" ><span class="error">* <?php echo $passwordErr;?></span>
<br><br>

<label for="teamleader">Teamleader:</label>
 <input type="teamleader" id="teamleader" name="teamleader" placeholder="teamleader" ><span class="error">*<?php echo $teamleaderErr;?> </span>
<br><br>
  

        <input type="submit" name="submit" value="Submit" required>

    </form>
</div>
</div>
</body>
</html>


