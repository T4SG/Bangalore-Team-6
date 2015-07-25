<?php

$qry="SELECT name,school,priority FROM LeaderProfile,Priorities WHERE username='$username';
	$result=mysql_query($qry);
 
 echo "<html>";
 echo "<h2> $name";
 echo "</h2>";
 echo "<br /> <br />";
 echo "<h3> $school </h3>";
 echo "<br /> <br />";
 echo "<h3> $priority </h3> ";
 echo "<br /> <br />";


?>