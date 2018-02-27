<h2>Удаление производителя {$name}</h2>
<form action="delProd.php" method="post">
    Удалить {$name}?
    Да<input type="radio" name="del" value="yes" checked><br>
    Нет<input type="radio" name="del" value="no"><br>
    <input type="hidden" name="id" value="{$id}">
    <input type="hidden" name="name" value="{$name}">
    <input type="submit" name="send" value="Подтвердить"><br>
</form>