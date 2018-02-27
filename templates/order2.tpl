<h2>Заказ товаров</h2>
<form action="order2.php" method="post">
    <table border="1">
        <tr>
            <th>№</th>
            <th>Модель</th>
            <th>Цена</th>
            <th>Количество</th>
            <th>Сумма</th>
            <th>Фото</th>
        </tr>
        {section loop=$items name=i}
            <tr>
                <td>{$number++}</td>
                <td>{$items[i].model}</td>
                <td>{$items[i].price}</td>
                <td>{$items[i].count}</td>
                <td>{$items[i].summ}</td>
                <td><img src="image/items/{$items[i].photo}" WIDTH="100px"></td>
            </tr>
        {/section}
        <tr>
            <th colspan="3">ИТОГО:</th>
            <th colspan="4">{$totalSumm}</th>
        </tr>
        <tr>
            <th colspan="8"><input type="submit" name="send" value="Подтвердить"></th>
        </tr>
    </table>
</form>