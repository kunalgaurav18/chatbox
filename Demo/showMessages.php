<?php
include('connect.php');

$query = mysql_query("SELECT * FROM messages order by date");

while($row=mysql_fetch_assoc($query)) {
echo '<b>'.$row['user'].':</b> '. $row['message'].'<br/>';
}

?>