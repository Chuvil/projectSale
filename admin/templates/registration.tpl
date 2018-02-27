<h2>Регистрация сотрудников</h2>
<form action="registration.php" method="post" enctype="multipart/form-data">
    Имя<br>
    <input type="text" name="name" id="name" value="{$name}"><br>
    Логин<br>
    <input type="text" name="login" id="login" value="{$login}"><br>
    e-mail<br>
    <input type="text" name="email" id="email" value="{$email}"><br>
    Пароль<br>
    <input type="password" name="password" id="password"><br>
    Повторите пароль<br>
    <input type="password" name="password1" id="password1"><br>
    Уровень прав<br>
    <select name="status">
        <option {if isset($status)&&status==1}selected{/if} value="1">Администратор</option>
        <option {if isset($status)&&status==2}selected{/if} value="2">Модератор</option>
    </select><br>
    Информация<br>
    <textarea name="info" id="info">{$info}</textarea><br>
    Телефон<br>
    <input type="text" name="phone" id="phone"><br>
    Фото<br>
    <input type="file" name="photo" id="photo" value="Загрузить фото"><br>
    <input type="submit" name="send" id="send" value="Отправить"><br>
</form>