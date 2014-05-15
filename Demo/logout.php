<?php
session_start();
include('connect.php');
$res = mysql_query("delete from online where user = '".$_SESSION['username']."'");
unset($_SESSION['username']);
?>