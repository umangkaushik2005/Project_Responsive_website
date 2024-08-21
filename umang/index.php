<?php
session_start();
include("dbconfig.php"); 

$error = ""; 
if(isset($_POST["submit"]))
{
if(empty($_POST["username"]) || empty($_POST["password"]))
{
  $error = "Both fields are required.";
}else{
  $username= $_POST["username"];
  $password= $_POST["password"];
  // $username = stripslashes($username);
  // $password = stripslashes($password);
  // $username = mysqli_real_escape_string($conn, $username);
  // $password = mysqli_real_escape_string($conn, $password);

  $sql="select * from my_users where username='$username' AND password='$password'";
  $result=mysqli_query($conn, $sql);
  $num=mysqli_num_rows($result);

  // print_r($num);die;
  if($num == 1){
    $_SESSION['username'] = $username; 
    header("Location: inheritance.php");
    
  }else{
    echo"wrong credential";
  }
  }
}

?>