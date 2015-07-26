<?php
if($_POST)
{
#$name = $_SESSION['user'];
$name= "p";
$comment = $_POST['content'];
$connect=mysqli_connect("localhost","root","code4good","isli") or die("dead");


if($connect)
mysql_select_db("isli",$connect);


$query = "Insert into comments(name,comment) values(\"". $name. "\",\""  . $comment. "\")";
if(mysql_query($query))
{ echo "Success";
}

else
{
die("Failed:", mysql_error);
}
else
{
die ("Failed to connect to the database");
}
}
$connect = mysql_connect("host_name","root","code4good");
if($connect)
mysql_select_db("db",$connect);
$query1 = "Select * from comments";
$result= mysql_query($query1);

while($row = mysql_fetch_array($result))
{
echo $row['name'] . "<br />" $row['comment'];}
else{
die ("Failed to retrieve from mysql");}




?>

