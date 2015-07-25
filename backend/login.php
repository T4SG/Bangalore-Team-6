<?php
$con=mysqli_connect("http://ec2-52-69-3-144.ap-northeast-1.compute.amazonaws.com/","root","code4good","mysql");

if (mysqli_connect_errno($con))
{
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$username = 'p';
$password = 'p';
$result = mysqli_query($con,"SELECT Role FROM Login where
username='$username' and password='$password'");
$row = mysqli_fetch_array($result);
$data = $row[0];

if($data){
echo 'Login successful';
}
mysqli_close($con);
?>
