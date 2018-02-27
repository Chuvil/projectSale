<form action="editprod.php" method="post" enctype="multipart/form-data">
    Измените название производителя<br>
    <input type="text" name="name" value="{$name}"><br>
    Старый логотип<br>
    <img src="../image/producer/{$logo}" width="200px"><br>
    Загрузите новый логотип<br>
    <input type="file" name="newlogo"><br>
    <input type="hidden" name="oldlogo" value="{$logo}">
    <input type="hidden" name="id" value="{$id}">
    <input type="submit" name="send" value="Отправить">
</form>