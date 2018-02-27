<?php
require_once ("header.php");
$smarty_main->assign("content", "Меню для управления админ частью");
$smarty_main->display("main.tpl");
mysqli_close($dbc);