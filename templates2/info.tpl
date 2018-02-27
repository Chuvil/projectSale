<table border="1">
    <tr>
        <th>Производитель</th>
        <th>Категория</th>
        <th>Модель</th>
        <th>Цена</th>
        <th>Фото</th>
        <th>Информация</th>
        <th>Купить</th>
    </tr>
    <tr>
        <td>{$nameProd}</td>
        <td>{$nameCat}</td>
        <td>{$model}</td>
        <td>{$price}</td>
        <td><img src="image/items/{$photo}" width="300px"></td>
        <td>{$info}</td>
        <td><a href="basket.php?id={$id}&mode=add">Купить</a></td>
    </tr>
</table>