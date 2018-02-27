<?php
require_once ("header.php");
$page="login";
$smarty_login=new Smarty();
if(!isset($_POST['send'])){
    $content=$smarty_login->fetch("login.tpl");
}elseif (isset($_POST['send'])&&!empty($_POST['login'])&&!empty($_POST['password'])){
    $query="SELECT id, fio, login, email, photo FROM clients WHERE login='".myprotect($dbc, $_POST['login'])."' AND password=sha1('".myprotect($dbc, $_POST['password'])."')";
    $result=mysqli_query($dbc, $query) or die("Ошибка запроса");
    if(mysqli_num_rows($result)==1){
        $next=mysqli_fetch_array($result);
        if(empty($next['photo'])){
            $photo='nopic.jpg';
        }else{
            $photo=$next['photo'];
        }
        setcookie("id", $next['id'], time()+60*60*24*30*3);
        setcookie("fio", $next['fio'], time()+60*60*24*30*3);
        setcookie("login", $next['login'], time()+60*60*24*30*3);
        setcookie("photo", $next['photo'], time()+60*60*24*30*3);
        setcookie("email", $next['email'], time()+60*60*24*30*3);
        $_SESSION['id']=$next['id'];
        $content="Вы успешно вошли в аккаунт";
        header("refresh:2;url=index.php");
    }else{
        $content="Неверный логин или пароль";
        header("refresh:2;url=login.php");
    }
}else{
    $content="Недостаточно данных для входа";
    header("refresh:2;url=login.php");
}
require_once ("main.php");