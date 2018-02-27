<?php
require_once ("header.php");
$smarty_login=new Smarty();
if(!isset($_POST['send'])){
    $smarty_login->assign("form", true);
}elseif (isset($_POST['send'])&&!empty($_POST['login'])&&!empty($_POST['password'])){
    $query="SELECT id, name, status, photo FROM admin WHERE login='".myprotect($dbc, $_POST['login'])."' AND password=sha1('".myprotect($dbc, $_POST['password'])."')";
    $result=mysqli_query($dbc, $query) or die("Ошибка запроса");
    if(mysqli_num_rows($result)==1){
        $next=mysqli_fetch_array($result);
        if(empty($next['photo'])){
            $photo='nopic.jpg';
        }else{
            $photo=$next['photo'];
        }
        setcookie("id", $next['id'], time()+60*60*24*30*3);
        setcookie("name", $next['name'], time()+60*60*24*30*3);
        setcookie("status", $next['status'], time()+60*60*24*30*3);
        setcookie("photo", $photo, time()+60*60*24*30*3);
        $_SESSION['id']=$next['id'];
        $_SESSION['name']=$next['name'];
        $_SESSION['status']=$next['status'];
        $_SESSION['photo']=$photo;
        $content="Вы успешно зарегистрировались";
        header("refresh:2;url=index.php");
    }else{
        $content="Неверный логин или пароль";
        header("refresh:2;url=login.php");
    }
}else{
    $content="Недостаточно данных для входа";
    header("refresh:2;url=login.php");
}
$smarty_login->assign("content", $content);
$smarty_login->display("login.tpl");
mysqli_close($dbc);