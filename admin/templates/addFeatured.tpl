<h2>Добавление в избранное</h2>
    <h4>{$model}</h4>
    <div>
        <img src="../image/items/{$photo}" width="300px">
    </div>
    <p>{$price}</p>
<form action="addFeatured.php" method="post">
    Введите номер для показа на странице<br>
    <input type="number" name="number"><br>
    <input type="hidden" name="idItems" value="{$id}">
    <input type="submit" name="send" value="Подтвердить">
</form>