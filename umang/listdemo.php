<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Umang</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</head>

<body>
<form class="needs-validation" action="scheduledemo.php" method="post">  
    <nav class="navbar navbar-expand-lg" style="height: 70px;">

        <div class="container-fluid">
            <a class="navbar-brand" href="bootstrap.html"><img style="height:40px; padding-top:3px; "
                    src="images/sansoftwares_newlogo.png "></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="about.html">
                            <h5>About</h5>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/projects.html">
                            <h5>Projects</h5>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="contact.html">
                            <h5>Contact Us</h5>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="team.html">
                            <h5>SanTeam</h5>
                        </a>
                    </li>
                </ul>


                <a href="tel:9810018735" class="ps-4">
                    <button class="btn btn-primary" name="phone" type="tel:9810018735"
                        style="box-shadow: rgba(0,0,0,0.8) 0 0 10px; border-radius: 20px; color: white;">98100-18735</button>
                </a>
                <a href="scheduledemo.php" class="ps-4">
                    <button class="btn btn-warning" name="button" type="button"
                        style="box-shadow: rgba(0,0,0,0.8) 0 0 10px; border-radius: 20px; color: white;">Schedule Demo
                        <strong>-></strong></button>
                </a>

            </div>
        </div>
    </nav>
    <hr>

    
        



 </form>
</div>


<?php
include 'dbconfig.php';

// print_r($_POST);die;

$id= $_POST["id"];

if (isset($_POST['delete'])){
    $sql="Delete From scheduledemo where id='$id'";
    $result=mysqli_query($conn, $sql);
       
       if($result == true){

        header ("Loaction: listdemo.php");
       }
}
   

    $sql = "SELECT * FROM scheduledemo";
    $result = (mysqli_query($conn ,$sql));

   

    if (mysqli_num_rows($result) > 0) {
        echo "<div class='container' style='box-shadow: rgba(0,0,0,0.8) 0 0 10px; border-radius: 20px; margin-top:70px; margin-bottom:30px;'>
        <h1>List</h1>
      <div class='row'>
          <div class='col-sm-1'>
          <button  class='btn btn-primary btn-md' name='submit' type='submit' value='submit'><a href='scheduledemo.php' class='text-decoration-none text-light'>Add/Edit</a></button>
        </div>

        <div class='col-sm-1 ms-1'>
          <button  class='btn btn-primary btn-md' name='list' type='submit' value='list'><a href='listdemo.php' class='text-decoration-none text-light'>List</a></button>
        </div>


        </div><hr>";
        echo "<table class='table  table-bordered'>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Designation</th>
                <th>email</th>
                <th>phone_no</th>
                <th>company_name</th>
                <th>Delete</th>
              </tr>";

        // Output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
            <form action='listdemo.php' method='post'>
                    <td>" . $row["id"]. "</td>
                    <td><a href='listdemodata.php' class='text-decoration-none'>" . $row["fullname"]. "</a></td>
                    <td>" . $row["designation"]. "</td>
                    <td>" . $row["email"]. "</td>
                    <td>" . $row["phone_no"]. "</td>
                    <td>" . $row["company_name"]. "</td>
                    <td><button name='delete' value='delete' class='btn btn-danger'><img src='images/trash.svg'></button><input type=hidden name=id value=".$row["id"]." ></td>
              </form>      
                  </tr>
                  </div>";
        }

        echo "</table> </div>";
    } else {
        echo "No results found";
    }

$conn->close();
?>
</body>

</html>