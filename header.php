<?php
require_once ("admin/param.php");
define("SMARTY_LIB", "libs/");
require_once (SMARTY_LIB."Smarty.class.php");
$smarty_main=new Smarty();
session_start();
if(isset($_COOKIE['id'])){
    $_SESSION['id']=$_COOKIE['id'];
}
if(isset($_SESSION['id'])){
    $smarty_main->assign("sesId", $_SESSION['id']);
}
if(isset($_COOKIE['fio'])&&isset($_COOKIE['login'])&&isset($_COOKIE['email'])&&isset($_COOKIE['photo'])){
    $smarty_main->assign("cookFio", $_COOKIE['fio']);
    $smarty_main->assign("cookLogin", $_COOKIE['login']);
    $smarty_main->assign("cookEmail", $_COOKIE['email']);
    $smarty_main->assign("cookPhoto", $_COOKIE['photo']);
}