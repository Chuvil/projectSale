<table border="1">
    <tr>
        <th>№</th>
        <th>Модель</th>
        <th>Цена</th>
        <th>Фото</th>
        <th>Подробнее</th>
        <th>Купить</th>
    </tr>
    {section loop=$items name=i}
        <tr>
            <td>{$number++}</td>
            <td>{section loop=$prodFilter name=x}
                    {if $prodFilter[x].id==$items[i].idProd}{$prodFilter[x].name}{/if}
            {/section}
            {$items[i].model}
            </td>
            <td>{$items[i].price}</td>
            <td><img src="image/items/{$items[i].photo}" width="200px"></td>
            <td><a href="info.php?id={$items[i].id}">Подробнее</a></td>
            <td><a href="basket.php?id={$items[i].id}&mode=add">Купить</a></td>
        </tr>
    {/section}
</table>