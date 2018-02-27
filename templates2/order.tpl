<h2>Заказ товаров</h2>
<form action="order.php" method="post">
    <table border="1">
        <tr>
            <th>№</th>
            <th>Модель</th>
            <th>Цена</th>
            <th>Количество</th>
            <th>Сумма</th>
            <th>Фото</th>
            <th>Удалить</th>
        </tr>
        {section loop=$items name=i}
            <tr>
                <td>{$number++}</td>
                <td>{$items[i].model}</td>
                <td>{$items[i].price}</td>
                <td><input type="number" name="count{$items[i].id}" value="{$items[i].count}" min="1" max="{$items[i].maxCount}"></td>
                <td>{$items[i].summ}</td>
                <td><img src="image/items/{$items[i].photo}" WIDTH="100px"></td>
                <td><a href="basket.php?id={$items[i].id}&mode=del&script=order">Х</a></td>
            </tr>
        {/section}
        <tr>
            <th colspan="8"><input type="submit" name="send" value="Пересчитать"></th>
        </tr>
        <tr>
            <th colspan="3">ИТОГО:</th>
            <th colspan="4">{$totalSumm}</th>
        </tr>
        <tr>
            <td colspan="3"><a href="basket.php?mode=clear">Очистить</a></td>
            <td colspan="4"><a {if isset($sesId)}href="order2.php"{else}href="login.php"{/if}>Подтвердить</a></td>
        </tr>
    </table>
</form>