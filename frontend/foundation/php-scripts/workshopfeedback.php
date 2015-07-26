<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
$con=mysqli_connect("localhost","root","code4good","isli") or die("dead");

$q1=$_POST['q1'];
$q2=$_POST['q2'];
$q3=$_POST['q3'];
$q4=$_POST['q4'];
$d=  date("Y-m-d");
$result = mysqli_query($con,"Insert into workshop(q1,date,q2,q3,q4) values('$q1','$d','$q2','$q3','$q4')");

#$result = "Insert into comments(name,comment) values(\"". $name. "\",\""  . $comment. "\")";
if($result)
{ echo "Success";
}
else
echo "failure";
mysqli_close($con);
?>