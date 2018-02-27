<?php
require_once ("header.php");
if(!empty($_GET['id'])){
    $smarty_edit=new Smarty();
    $query="SELECT title, content, meta_title, meta_desc, meta_keywords, name, page, priority FROM settings WHERE id='".$_GET['id']."'";
    $result=mysqli_query($dbc, $query) or die("Ошибка запроса");
    $next=mysqli_fetch_array($result);
    $smarty_edit->assign("title", $next['title']);
    $smarty_edit->assign("settings_content", $next['content']);
    $smarty_edit->assign("meta_title", $next['meta_title']);
    $smarty_edit->assign("meta_desc", $next['meta_desc']);
    $smarty_edit->assign("meta_keywords", $next['meta_keywords']);
    $smarty_edit->assign("name", $next['name']);
    $smarty_edit->assign("priority", $next['priority']);
    $smarty_edit->assign("id", $_GET['id']);
    $content=$smarty_edit->fetch("editSettings.tpl");
}elseif (isset($_POST['send'])&&!empty($_POST['title'])&&!empty($_POST['id'])){
    $query="UPDATE settings SET title='".$_POST['title']."', content='".$_POST['content']."', meta_title='".$_POST['meta_title']."', meta_desc='".$_POST['meta_desc']."', meta_keywords='".$_POST['meta_keywords']."', name='".$_POST['name']."', priority='".$_POST['priority']."' WHERE id='".$_POST['id']."'";
    mysqli_query($dbc, $query) or die("Ошибка обновления");
    $content="Ваши данные обновлены";
}else{
    $content="Недостаточно данных для обновления";
}
$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");
mysqli_close($dbc);