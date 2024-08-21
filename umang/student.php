<!DOCTYPE html>
<html>
<head>

    <title>Student Details Form</title>
    <link rel="stylesheet" href="CSS/inheri.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"]))
 {


include('dbconfig.php');

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  

  $Name = test_input($_POST["Name"]);
  $Email = test_input($_POST['email']);
$Course = test_input(implode(',',$_POST['course']));
$Class = test_input($_POST['Class']);
$Gender = test_input($_POST['gender']);
$sql=" insert into student (Name,email,course,Class,Gender)
value('$Name','$Email','$Course','$Class','$Gender');";




// insert record after sunmit

if(mysqli_query($conn, $sql) == true){
    // echo "successfully inserted";

    header("Location: student.php");
    exit();
}

else{
    echo "error: $sql <br> $conn->error";
}

mysql_close ($conn);
// mysql_close ($my);

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
        <li><a class="dropdown-item" href="inheritance.php">Home</a></li>
        <li><a class="dropdown-item" href="changepasswd.php">Change Password</a></li>
        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
      </ul>
    </div>       
</div>



  <div id="navbar">
    <br>
    
    <!-- <a  id="logo" href="inheritance.php">Sansoftwares.com</a><br><br> -->
    <a style="color: white;" href="student.php">Student Form</a><br><br><br>
    <a style="color: white;" href="agentmaster.php">Agent Master</a><br><br><br>
    <a style="color: white;" href="report.php">Report</a><br><br><br>
    <!-- <a style="color: white;" href="logout.php">Logout</a><br><br><br> -->
    <!-- <input placeholder="sansoftwares" name="san"> -->
    <!-- <button type="submit" name="submit" value="Submit">logout</button> -->
  </div>
        <div class="section">
            <h2><center>Student Details Form</center></h2>
            <form action="student.php" method="post">
                <label for="Name">Name:</label>
                <input type="text" id="Name" name="Name" placeholder="Name" required><br><br>
        
                <label for="email">Email:</label>
                <input type="email" id="Email" name="email" placeholder="Email" ><br><br>
        
                <label for="course">Course:</label>
                <select name="course[]" id="Course" multiple>
            <option value="computer">computer</option>
            <option value="English">English</option>
            <option value="German">German</option>
          </select>
          <br><br>
                <label for="class">Class:</label>
                <select id="Class   " name="Class">
                    <option></option>
                    <option>10th</option>
                    <option>11th</option>
                    <option>12th</option>
                </select><br><br>
                <label for="Gender">Gender:</label>
                <input type="radio" name="gender" value="female">Female
          <input type="radio" name="gender" value="male">Male
          <input type="radio" name="gender" value="other">Other
        <br><br>
        
        
          
        
                <input type="submit" name="submit" value="Submit" required>
            </form>

        </div>

    </div>
</body>
</html>









