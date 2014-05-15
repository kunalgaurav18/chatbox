<?php

include('connect.php');

$date = new DateTime();
$date = date_timestamp_get($date);

if(isset($_POST['message'])) {
 mysql_query("INSERT INTO  messages VALUES (NULL ,  '".$_POST['message']."',  '".$_SESSION['username']."', '$date')");
}
else
 echo 'No message';

?>