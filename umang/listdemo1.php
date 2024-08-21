<?php
$dateOfBirth = "2002-12-29";
$today = date("Y-m-d");

// print_r($today);die;
$diff = date_diff(date_create($dateOfBirth), date_create($today));
echo 'Age is '.$diff->format('%y');

?>