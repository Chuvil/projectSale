<h2>Управление категориями</h2>
<a href="addCat.php">Добавить новую категорию</a><br>
<table border="1">
    <tr>
        <th>№</th>
        <th>Название</th>
        <th>Редактировать</th>
        <th>Удалить</th>
    </tr>
    {section loop=$category name=i}
        <tr>
            <td>{$number++}</td>
            <td>{$category[i].name}</td>
            <td><a href="editCat.php?id={$category[i].id}">Редактировать</a></td>
            <td><a href="delCat.php?id={$category[i].id}&name={$category[i].name}">Удалить</a></td>
        </tr>
    {/section}
</table>