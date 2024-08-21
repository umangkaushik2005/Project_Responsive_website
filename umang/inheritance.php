<!-- <?php 
include('./check.php');
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/inheri.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<body>

<div class="nav1">
<a href="inheritance.php"><img style="height:40px; position:fixed;" src="images/Company_Logo (1).png "></a>
<div class="dropdown" style="margin-left:94%;">
      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
      <div class="media">
    <div class="media-body">
    
    </div>
    <div class="media-right" style="height:10px;" >
      <img src="images/img_avatar1.png" class="media-object" style="height:25px; padding-top:2px; ">
    </div>
  </div>
      </button>
      <ul class="dropdown-menu" style="">
        <li><a class="dropdown-item" href="inheritance.php">Home</a></li>
        <li><a class="dropdown-item" href="changepasswd.php">Change Password</a></li>
        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
      </ul>
    </div>       
</div>



  <div id="navbar">
    <br>
    
    <!-- <a  id="logo" href="inheritance.php">Sansoftwares.com</a><br><br> -->
    <a style="color: white; text-decoration:none;" href="student.php">Student Form</a><br><br>
    <a style="color: white; text-decoration:none;" href="agentmaster.php">user master</a><br><br>
    <a style="color: white; text-decoration:none;" href="report.php">Report</a><br><br>
    <!-- <a style="color: white;" href="logout.php">Logout</a><br><br><br> -->
    <!-- <input placeholder="sansoftwares" name="san"> -->
    <!-- <button type="submit" name="submit" value="Submit">logout</button> -->
  </div>
  <!-- <div style="color:black"><?php echo $_SESSION['username']; ?></div> -->
 
</body>
</html>