<?php
$servname="localhost";
 $username ="root";
 $password="*1Sansoftwares#";
 $db="santest";

//  create connection

$conn= mysqli_connect($servername,$username,$password,$db);

if(!$conn){

die ("connection failed:" .mysqli_connect_error());
}

// echo "connected successfully";

// insert data in table 

// $sql= "insert into MyGuests (firstname,lastname,email)
// value('umang','kaushik','umang.kaushik@sansoftwares.in')";

// if (mysqli_query($conn, $sql)) {
//   $last_id = mysqli_insert_id($conn);
//   echo "New record created successfully. Last inserted ID is: " . $last_id;
// } else {
//   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }
//  mysql_close ($conn)

$sql = "SELECT id, firstname, lastname,reg_date FROM MyGuests";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "       (date) -        " .$row[reg_date]. "<br>";
  }
} else {
  echo "0 results";
}

 

?>