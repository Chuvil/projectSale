<div class="col-sm-4">
    <p id="sLogin" class="error"></p>
    <div class="contact-form">
        <h2>Регистрация</h2>
        <form action="registration.php" class="contact-form row" method="post" enctype="multipart/form-data">
            ФИО<br>
            <input type="text" name="fio" class="form-control" required="required" id="fio" value="{$fio}"><br>
            Логин<br>
            <input type="text" name="login" class="form-control" required="required" id="login" value="{$login}"><br>
            e-mail<br>
            <input type="text" name="email" class="form-control" required="required" id="email" value="{$email}"><span id="sEmail" class="error"></span><br>
            Пароль<br>
            <input type="password" name="password" class="form-control" required="required" id="password"><br>
            Повторите пароль<br>
            <input type="password" name="password1" class="form-control" required="required" id="password1"><br>
            Адрес<br>
            <input type="text" name="address" class="form-control" required="required" id="address"><br>
            Информация<br>
            <textarea name="info" class="form-control" id="info">{$info}</textarea><br>
            Телефон<br>
            <input type="text" name="phone" class="form-control" id="phone"><br>
            Фото<br>
            <input type="file" name="photo" id="photo" value="Загрузить фото"><br>
            <input type="submit" name="send" class="btn btn-primary pull-right" id="send" value="Отправить"><br>
        </form>
    </div>
</div>