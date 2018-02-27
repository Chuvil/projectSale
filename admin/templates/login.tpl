<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
{if isset($form)}
    <form action="login.php" method="post">
        Логин<br>
        <input type="text" name="login"><br>
        Пароль<br>
        <input type="password" name="password"><br>
        <input type="submit" name="send" value="Вход"><br>
    </form>
{/if}
{if isset($content)}{$content}{/if}
</body>
</html>