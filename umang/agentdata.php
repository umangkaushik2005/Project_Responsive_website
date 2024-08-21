<?php 
include('./check.php');
?>


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
    
    <a  id="logo" href="inheritance.php">Sansoftwares.com</a><br><br>
    <a style="color: white;" href="student.php">Student Form</a><br><br><br>
    <a style="color: white;" href="agentmaster.php">Agent Master</a><br><br><br>
    <a style="color: white;" href="report.php">Report</a><br><br><br>
    <!-- <a style="color: white;" href="logout.php">Logout</a><br><br><br> -->
    <!-- <input placeholder="sansoftwares" name="san"> -->
    <!-- <button type="submit" name="submit" value="Submit">logout</button> -->
  </div>
    <h2><center>Agent</center></h2>
</div><br><br><br>
    <form action="agentdata.php" method="get">
        <label for="Name">Search by Name:</label>
        <input type="text" id="Name" name="search" placeholder="Name" ><br><br>
        <label for="email">Search by Email:</label>
        <input type="email" id="email" name="search" placeholder="Email" ><br><br>

        <input type="submit" value="Search">
    </form>
</div>
</div>
    <?php
include 'dbconfig.php';

if (isset($_GET['search'])) {
    $search = htmlspecialchars($_GET['search']);
    $search = mysqli_real_escape_string($conn, $search);

    // Prepare the SQL query
    $sql = "SELECT * FROM my_users WHERE username LIKE '%$search' OR email LIKE '%$search%'";
    $result = (mysqli_query($conn ,$sql));

    if (mysqli_num_rows($result) > 0) {
        echo "<h1>Search Results</h1>";
        echo "<table border='5'>
              <tr>
                <th>ID</th>
                <th>userame</th>
                <th>password</th>
                <th>email</th>
                <th>Teamleader</th>
                 <th>Created At</th>
              </tr>";

        // Output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>" . $row["srno"]. "</td>
                    <td>" . $row["username"]. "</td>
                    <td>" . $row["password"]. "</td>
                    <td>" . $row["email"]. "</td>
                    <td>" . $row["teamleader"]. "</td>
                    <td>" . $row["Date"]. "</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "No results found";
    }
}

// Close the connection
$conn->close();
?>

</body>
</html>



