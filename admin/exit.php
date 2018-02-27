<?php
require_once ("header.php");
if(isset($_COOKIE['id'])){
    setcookie("id", "", time()-60*60*24*30*3);
}
if(isset($_COOKIE['name'])){
    setcookie("name", "", time()-60*60*24*30*3);
}
if(isset($_COOKIE['status'])){
    setcookie("status", "", time()-60*60*24*30*3);
}
if(isset($_COOKIE['photo'])){
    setcookie("photo", "", time()-60*60*24*30*3);
}
if(isset($_COOKIE[session_name()])){
    setcookie(session_name(), '', time()-60*60*24*30*3);
}
$_SESSION=array();
session_destroy();
echo "Exit succesful. <a href='login.php'>Login</a>";
header("refresh:2;url=index.php");