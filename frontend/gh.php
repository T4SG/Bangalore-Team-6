<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
$con=mysqli_connect("localhost","root","code4good","isli") or die("dead");

$username='p';
$password = 'p';
$result = mysqli_query($con,"SELECT type FROM Login where username='$username' and password='$password'");

$row = mysqli_fetch_array($result);

$data = $row[0];

if($data){
echo 'Login successful';
}
mysqli_close($con);
?>