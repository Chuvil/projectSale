<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div id="menu">
{section loop=$menu name=i}
    <a href="{$menu[i].page}.php">{$menu[i].name}</a>||||
{/section}
</div><br>
{$content}
{if isset($items)}
<div id="basket">
    <table border="1" WIDTH="100%">
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
                <td>{$items[i].count}</td>
                <td>{$items[i].summ}</td>
                <td><img src="image/items/{$items[i].photo}" WIDTH="50px"></td>
                <td><a href="basket.php?mode=del&id={$items[i].id}">X</a></td>
            </tr>
        {/section}
        <tr>
            <td colspan="3">Итого</td>
            <td colspan="4">{$totalSumm}</td>
        </tr>
        <tr>
            <td colspan="3"><a href="basket.php?mode=clear">Очистить</a></td>
            <td colspan="4"><a href="order.php">Заказать</a></td>
        </tr>
    </table>
</div>
{/if}
</body>
</html>