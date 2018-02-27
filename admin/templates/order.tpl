<h2>Невыполненные заказы</h2>
<table border="1">
    {section loop=$order name=i}
        {$order[i].change}
        {$order[i].idClient}
        {if $order[i].change!=$order[i].idClient}
            <tr>
                <th>№</th>
                <th>Имя клиента</th>
                <th>e-mail</th>
                <th>Телефон</th>
                <th>Адрес</th>
                <th>Комментарий</th>
                <th>Дата заказа</th>
                <th>Выполнить</th>
                <th>Удалить</th>
            </tr>
            <tr>
                <td>{$number++}</td>
                <td>{$order[i].fio}</td>
                <td>{$order[i].email}</td>
                <td>{$order[i].phone}</td>
                <td>{$order[i].address}</td>
                <td>{$order[i].info}</td>
                <td>{$order[i].orderDate}</td>
                <td><a href="runOrder.php?idClient={$order[i].idClient}">Выполнить</a></td>
                <td><a href="delOrder.php?idClient={$order[i].idClient}">Удалить</a></td>
            </tr>
            <tr>
                <th>Модель</th>
                <th>Цена</th>
                <th>Количество</th>
                <th>Сумма</th>
                <th>Фото</th>
            </tr>
        {/if}
        <tr>
            <td>{$order[i].model}</td>
            <td>{$order[i].price}</td>
            <td>{$order[i].count}</td>
            <td>{$order[i].summ}</td>
            <td><img src="../image/items/{$order[i].photo}" WIDTH="100px"></td>
        </tr>
        {if $order[i].rows==$order[i].countRows}
            <tr>
                <th colspan="4">ИТОГО</th>
                <th colspan="4">{$order[i].totalSumm}</th>
            </tr>
        {/if}
    {/section}
</table>