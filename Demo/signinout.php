<?php
session_start();
include('connect.php');
$_SESSION['username'] = $_POST['username'];
$res = mysql_query("insert into online values (NULL, '".$_POST['username']."')");
?>