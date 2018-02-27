<form action="editcat.php" method="post">
    Измените название категории<br>
    <input type="text" name="name" value="{$name}"><br>
    <input type="hidden" name="id" value="{$id}">
    <input type="submit" name="send" value="Отправить">
</form>