<?php
include('connect.php');
$res = mysql_query("select * from online");
while($user = mysql_fetch_array($res))
	echo $user['user']."<br>";

?>