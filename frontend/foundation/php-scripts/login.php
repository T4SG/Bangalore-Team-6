<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
$con=mysqli_connect("localhost","root","code4good","isli") or die("dead");

$username=$_POST['uname'];
$password = $_POST['password'];
$result = mysqli_query($con,"SELECT type FROM Login where username='$username'");

$row = mysqli_fetch_array($result);

$data = $row[0];

if($data == "leader"){
header("Location: http://ec2-52-69-3-144.ap-northeast-1.compute.amazonaws.com/leaderprofile.html");
}
else if($data == "isli")
{
header("Location: http://ec2-52-69-3-144.ap-northeast-1.compute.amazonaws.com/isliprofile.html");
}
else
{
header("Location: http://ec2-52-69-3-144.ap-northeast-1.compute.amazonaws.com/admin.html");
}
mysqli_close($con);
?>