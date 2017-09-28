<?php
mysql_connect("localhost","root","asdf1234")||die("error");
mysql_select_db("hotel")||die("error");
$username=$_POST["username"];
$password=$_POST["password"];
$res=mysql_query("select name from user where name='".$username."' and pass='".$password."'");
if($res != NULL)
{
    $row = mysql_fetch_row($res);  
ob_start();
session_start();
$_SESSION["uname"]=$row[0];
echo $_SESSION["uname"];
header("Location: index.php");
exit();
}
else if($res == NULL)
header("Location: login.php");


?>