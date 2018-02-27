<?php
require_once ("header.php");
$page="registration";
$smarty_reg=new Smarty();
if(!isset($_POST['send'])){
    $content=$smarty_reg->fetch("registration.tpl");
}elseif(isset($_POST['send'])&&!empty($_POST['fio'])&&!empty($_POST['login'])&&!empty($_POST['email'])&&!empty($_POST['password'])&&!empty($_POST['password1'])&&$_POST['password']==$_POST['password1']&&!empty($_POST['address'])&&!empty($_POST['phone'])){
    $queryLogin="SELECT id FROM clients WHERE login='".$_POST['login']."'";
    $resultLogin=mysqli_query($dbc, $queryLogin) or die("Ошибка запроса логина");
    $queryEmail="SELECT id FROM clients WHERE email='".$_POST['email']."'";
    $resultEmail=mysqli_query($dbc, $queryEmail) or die("Ошибка запроса e-mail");
    $queryPhone="SELECT id FROM clients WHERE phone='".$_POST['phone']."'";
    $resultPhone=mysqli_query($dbc, $queryPhone) or die("Ошибка запроса телефона");
    if(mysqli_num_rows($resultLogin)>0||mysqli_num_rows($resultEmail)>0||mysqli_num_rows($resultPhone)>0){
        $smarty_reg->assign("fio", $_POST['fio']);
        $smarty_reg->assign("address", $_POST['address']);
        $smarty_reg->assign("info", $_POST['info']);
        $content="Введённые данные не уникальны";
    }else{
        if($_FILES['photo']['error']==0){
            $filenameTMP=$_FILES['photo']['tmp_name'];
            $filename=time().$_FILES['photo']['name'];
            move_uploaded_file($filenameTMP, "image/clients/$filename");
            $query="INSERT INTO clients (fio, login, email, password, address, info, phone, photo) VALUES ('".(myprotect($dbc, $_POST['fio']))."', '".(myprotect($dbc, $_POST['login']))."', '".(myprotect($dbc, $_POST['email']))."', sha1('".(myprotect($dbc, $_POST['password']))."'), '".(myprotect($dbc, $_POST['address']))."', '".(myprotect($dbc, $_POST['info']))."', '".(myprotect($dbc, $_POST['phone']))."', '$filename')";
        }else{
            $query="INSERT INTO clients (fio, login, email, password, address, info, phone) VALUES ('".(myprotect($dbc, $_POST['fio']))."', '".(myprotect($dbc, $_POST['login']))."', '".(myprotect($dbc, $_POST['email']))."', sha1('".(myprotect($dbc, $_POST['password']))."'), '".(myprotect($dbc, $_POST['address']))."', '".(myprotect($dbc, $_POST['info']))."', '".(myprotect($dbc, $_POST['phone']))."')";
        }
        mysqli_query($dbc, $query) or die("Ошибка регистрации");
        $content="Данные успешно зарегистрированы.";
    }
}else{
    $content="Недостаточно данных для регистрации";
}
require_once ("main.php");