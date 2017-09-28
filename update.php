<?php
mysql_connect("localhost","root","asdf1234")||die("error");
mysql_select_db("hotel")||die("error");
$val = $_POST["nam"];
$fie = $_POST["field"];
$upd = $_POST["values"];
echo $val;
echo $fie;
echo $upd;

mysql_query("update occupied set $fie = '{$upd}' where name = '{$val}' ")||die("Error");

header("Location: occup.php");

?>