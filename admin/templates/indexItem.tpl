<a href="addItem.php">Добавить товар</a><br>
{section loop=$producer name=i}
    <a href="indexItem.php?idProd={$producer[i].id}"><img src="../image/producer/{$producer[i].logo}" width="50px" title="{$producer[i].name}"></a>
{/section}
<a href="indexItem.php">Все</a><br>
<table border="1">
    <tr>
        <th>№</th>
        <th>Производитель</th>
        <th>Категория</th>
        <th>Модель</th>
        <th>Цена</th>
        <th>Количество</th>
        <th>Фото</th>
        <th>Редактировать</th>
        <th>Удалить</th>
    </tr>
    {section loop=$items name=i}
        <tr>
            <td>{$number++}</td>
            {section loop=$producer name=x}
                {if $items[i].idProd==$producer[x].id}
                    <td>{$producer[x].name}</td>
                {/if}
            {/section}
            {section loop=$category name=a}
                {if $items[i].idCat==$category[a].id}
                    <td>{$category[a].name}</td>
                {/if}
            {/section}
            <td>{$items[i].model}</td>
            <td>{$items[i].price}</td>
            <td>{$items[i].count}</td>
            <td><img src="../image/items/{$items[i].photo}" WIDTH="200px"></td>
            <td><a href="editItem.php?id={$items[i].id}">Редактировать</a></td>
            <td><a href="delItem.php?id={$items[i].id}&model={$items[i].model}">Удалить</a></td>
        </tr>
    {/section}
</table>