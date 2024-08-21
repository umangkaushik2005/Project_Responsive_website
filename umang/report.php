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
<div class="container">
        <div id="navbar">
            <br><br>
            
            <a id="logo" href="https://sansoftwares.com/">Sansoftwares.com</a><br><br>
            <a href="student.php">Student Form</a><br><br><br>
            <a href="agentmaster.php">Agent Master</a><br><br><br>
            <a href="report.php">Report</a><br><br><br>
            <a href="logout.php">Logout</a><br><br><br>
            <!-- <input placeholder="sansoftwares" name="san"> -->
            <!-- <button type="submit" name="submit" value="Submit">logout</button> -->
        </div>
        <div class="section">
   
    <form action="report.php" method="get">
        <label for="search">Search by Name or Email:</label>
        <input type="text" id="search" name="search" placeholder="Name" required><br><br>

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
    $sql = "SELECT * FROM student WHERE name LIKE '%$search%' OR email LIKE '%$search%'";
    $result = (mysqli_query($conn ,$sql));

    if (mysqli_num_rows($result) > 0) {
        echo "<h1>Search Results</h1>";
        echo "<table border='5'>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>email</th>
                <th>course</th>
                <th>Created At</th>
              </tr>";

        // Output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>" . $row["ID"]. "</td>
                    <td>" . $row["Name"]. "</td>
                    <td>" . $row["email"]. "</td>
                    <td>" . $row["course"]. "</td>
                    <td>" . $row["reg_date"]. "</td>
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



