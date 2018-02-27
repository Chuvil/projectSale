<h2>Удаление товара {$model}</h2>
<form action="delItem.php" method="post">
    Удалить {$model}?
    Да<input type="radio" name="del" value="yes" checked><br>
    Нет<input type="radio" name="del" value="no"><br>
    <input type="hidden" name="id" value="{$id}">
    <input type="hidden" name="model" value="{$model}">
    <input type="submit" name="send" value="Подтвердить">
</form>