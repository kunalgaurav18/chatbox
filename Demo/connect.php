<?php
session_start();

$connect = mysql_connect('localhost','root','root');
mysql_select_db('chat', $connect);


?>