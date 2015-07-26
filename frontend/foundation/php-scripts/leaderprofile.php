<?php
@session_start();
echo "working";
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
$con=mysqli_connect("localhost","root","code4good","isli") or die("dead");

$name = $_SESSION['username'];
$comment = $_POST['content'];
#echo "$name";
$result = mysqli_query($con,"Insert into comments(name,comments) values('$name','$comment')");
echo "Insert into comments(name,comments) values('$name','$comment')";
#$result = mysqli_query($con,"Insert into workshop(q1,date,q2,q3,q4) values('$q1','$d','$q2','$q3','$q4')");

#$result = "Insert into comments(name,comment) values(\"". $name. "\",\""  . $comment. "\")";
mysqli_commit($con);


#echo "ddd".$mysqli->commit();
#$con=mysqli_connect("localhost","root","code4good","isli") or die("dead");
$query1 = "Select * from comments";
$result= mysqli_query($con, $query1);
#echo ;


while($row = mysqli_fetch_array($result,MYSQLI_BOTH))
{
echo $row['name'];
echo $row['comments'];
}


mysqli_close($con);

?>
