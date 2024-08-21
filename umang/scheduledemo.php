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

<?php
 
 session_start();
// print_r($_POST);die;
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])){

    include('dbconfig.php');


    
    

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
     
    //   print_r(function test_input($data));die;

    //   $fullname = $_POST("fullname");

    //   print_r($fullname);die;


      $fullname = test_input($_POST["fullname"]);
      $designation = test_input($_POST["designation"]);
      $phone = test_input($_POST["phone"]);
      $email = test_input($_POST["email"]);
      $companyname = test_input($_POST["companyname"]);
      $heardabout = test_input($_POST["heardabout"]);
      $address = test_input($_POST["address"]);
      $country = test_input($_POST["country"]);
      $state = test_input($_POST["state"]);
      $zipcode = test_input($_POST["zipcode"]);
      $Contact = test_input($_POST["Contact"]);
      $information = test_input($_POST["information"]);

    //   if (!preg_match ("/^[0-9]*$/", $phone) ){  
    //     $ErrMsg = "Only numeric value is allowed";  
    //     echo $ErrMsg;die;  
    // } 

      if(empty($Contact)){

        $Contact='0';
      }

      if(empty($information)){

        $information='0';
      }

      $sql=" insert into scheduledemo (fullname,designation,email,phone_no,company_name,heard,company_address,Country,State,ZIP,Email_only,Informstion)
      value('$fullname','$designation','$email','$phone','$companyname','$heardabout','$address','$country','$state','$zipcode','$Contact','$information');";
     


     $result= mysqli_query($conn, $sql);



     if($result == true){

        $_SESSION["status"] = " Thank you for showing interest";

        header("location: scheduledemo.php");
        exit();

     }

     mysqli_close ($conn);
  
}

?>

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
                    <a class="nav-link active" aria-current="page" href="about.html"><h5>About</h5></a>
                </li>
                <li class="nav-item">   
                    <a class="nav-link active" href="/projects.html"><h5>Projects</h5></a>
                </li>
              
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="contact.html"><h5>Contact Us</h5></a>
                </li>

                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="team.html"><h5>SanTeam</h5></a>
              </li>
            </ul>

            
            <a href="tel:9810018735" class="ps-4">
              <button class="btn btn-primary" name="phone" type="tel:9810018735" style="box-shadow: rgba(0,0,0,0.8) 0 0 10px; border-radius: 20px; color: white;">98100-18735</button>
              </a>
            <a href="scheduledemo.php" class="ps-4">
              <button class="btn btn-warning" name="button" type="button" style="box-shadow: rgba(0,0,0,0.8) 0 0 10px; border-radius: 20px; color: white;" >Schedule Demo <strong>-></strong></button>
            </a>
           
        </div>
    </div>
</nav>
<hr>

<div class="row">
    <div class="col-5">
   <?php 
         if(isset($_SESSION["status"])){
              ?>
           <div class="alert alert-success" role="alert">
               <strong>Submitted Succesfully! </strong><?php echo $_SESSION["status"]; ?>
              </div> 
             <?php
            unset($_SESSION["status"]);
         }
   ?>

        </div>
        </div>
<div class="container" style="box-shadow: rgba(0,0,0,0.8) 0 0 10px; border-radius: 20px; margin-top:70px; margin-bottom:30px;">

  
 <div class="row g-4 ">
    
      <div class="col-md-5 col-lg-4 order-md-last">
        
       <div class="container">
        <img src="https://sansoftwares.com/wp-content/uploads/2024/05/Live-Monitoring.svg">
       </div>

       <div class="container">
        <img src="https://sansoftwares.com/wp-content/uploads/2024/05/Admin-Dashboard.svg">
       </div>

       <div class="container">
        <img src="http://192.168.1.242/umang/images/thumbnail3.svg">
       </div>

        
        

     
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="text-center">Please fill out the form below</h4>
        <div class="row">
          <div class="col-sm-1">
          <button  class="btn btn-primary btn-md" name="submit" type="submit" value="submit"><a href='scheduledemo.php' class='text-decoration-none text-light'>Add/Edit</a></button>
        </div>

        <div class="col-sm-1 ms-5">
          <button  class="btn btn-primary btn-md" name="list" type="submit" value="list"><a href='listdemo.php' class='text-decoration-none text-light'>List</a></button>
        </div>


        </div>
        <hr>
        
        <form class="needs-validation" action="scheduledemo.php" method="post">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="fullname" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="fullname" name="fullname" placeholder="  Enter Your Name" value="" required="">
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="Designation" class="form-label">Designation</label>
              <input type="text" class="form-control" id="lastName" name="designation" placeholder="   Enter Your Designation" value="" required="">
              <div class="invalid-feedback">
                Valid Designation is required.
              </div>
            </div>
 
        <div class="row g-3">
            <div class="col-sm-6">
              <label for="mobile number" class="form-label">Enter Your Mobile Number</label>
              <div class="input-group has-validation">
                <input type="phone" class="form-control" id="mobilenumber" name="phone" placeholder="  Enter Your Mobile Number" pattern="[0-9]{15-15}" required="">
              <div class="invalid-feedback">
                </div>
              </div>
             </div>

             <div class="col-sm-6">
              <label for="email" class="form-label">Email <span class="text-body-secondary">(Optional)</span></label>
              <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>
        </div>

        <div class="row g-3">
            <div class="col-sm-6">
              <label for="companyname" class="form-label">Company Name</label>
              <div class="input-group has-validation">
                <input type="text" class="form-control" id="mobilenumber" name="companyname" placeholder="  Enter Your Company Name" required="">
              <div class="invalid-feedback">
                  Your company is required.
                </div>
              </div>
             </div>

             <div class="col-sm-6">
             <label for="heardabout" class="form-label">Where did you heard about sansoftwares</label>
                <select class="form-select" id="heardabout" name="heardabout">
                    <option></option>
                    <option>Google</option>
                    <option>Software Advice</option>
                    <option>Facebook</option>
                    <option>Instagram</option>
                </select>
                <div class="invalid-feedback">
                Please select a valid.
              </div>
                        
            </div>
        </div>

          

            <div class="col-12">
              <label for="address" class="form-label">Company Address</label>
              <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required="">
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="col-md-5">
              <label for="country" class="form-label">Country</label>
              <select class="form-select" id="country" name="country" required="">
                <option value="">Choose...</option>
                <option>India</option>
                <option>Canada</option>
                <option>Dubai</option>
                <option>United States</option>
                <option>Other</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

            <div class="col-md-4">
              <label for="state" class="form-label">Only For India State</label>
              <select class="form-select" id="state" name="state" required="">
                <option value="">Choose...</option>
                <option>Haryana</option>
                <option>Rajasthan</option>
                <option>UP</option>
                <option>Uttrakhand</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>

            <div class="col-md-3">
              <label for="zip" class="form-label">Zip</label>
              <input type="text" class="form-control" id="zip" name="zipcode" placeholder="" required="">
              <div class="invalid-feedback">
                Zip code required.
              </div>
            </div>
          </div>

          <hr class="my-4">

          <div class="form-check">
            <input type="checkbox" class="form-check-input" name="Contact" id="same-address" value="1">
            <label class="form-check-label" for="same-address">Contact me only on Email</label>
          </div>

          <div class="form-check">
            <input type="checkbox" class="form-check-input" name="information" id="save-info" value="1">
            <label class="form-check-label" for="save-info">Save this information for next time</label>
          </div>
          <hr class="my-3">
           <div class="px-2 mb-3">
          <button  class="btn btn-primary btn-md" name="submit" type="submit" value="submit">Submit</button>
          <div>
        </form>
      </div>
    </div>

    </div> 

    
    

</body>

</html>














