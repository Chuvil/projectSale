<h2>Регистрация</h2>
<form action="registration.php" method="post" enctype="multipart/form-data">
    ФИО<br>
    <input type="text" name="fio" id="fio" value="{$fio}"><br>
    Логин<br>
    <input type="text" name="login" id="login" value="{$login}"><br>
    e-mail<br>
    <input type="text" name="email" id="email" value="{$email}"><br>
    Пароль<br>
    <input type="password" name="password" id="password"><br>
    Повторите пароль<br>
    <input type="password" name="password1" id="password1"><br>
    Адрес<br>
    <input type="text" name="address" id="address"><br>
    Информация<br>
    <textarea name="info" id="info">{$info}</textarea><br>
    Телефон<br>
    <input type="text" name="phone" id="phone"><br>
    Фото<br>
    <input type="file" name="photo" id="photo" value="Загрузить фото"><br>
    <input type="submit" name="send" id="send" value="Отправить"><br>
</form>