<?php


$servername="localhost";
 $username ="root";
 $password="*1Sansoftwares#";
 $db="santest";



//  create connection

$conn= mysqli_connect($servername,$username,$password,$db);

if(!$conn){

die ("connection failed:" .mysqli_connect_error());
}
// else{
//     echo "connected";
// }


?>