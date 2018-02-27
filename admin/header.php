<?php
require_once ("param.php");
define("SMARTY_LIB", "../libs/");
require_once (SMARTY_LIB."Smarty.class.php");
$smarty_main=new Smarty();
session_start();