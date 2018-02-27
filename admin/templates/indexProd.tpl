<a href="addProd.php">Добавить производителя</a><br>
<table border="1">
    <tr>
        <th>№</th>
        <th>Название</th>
        <th>Логотип</th>
        <th>Редактировать</th>
        <th>Удалить</th>
    </tr>
    {section loop=$producer name=i}
    <tr>
            <td>{$number++}</td>
            <td>{$producer[i].name}</td>
            <td><img src="../image/producer/{$producer[i].logo}" width="200px"></td>
            <td><a href="editProd.php?id={$producer[i].id}">Редактировать</a></td>
            <td><a href="delProd.php?id={$producer[i].id}&name={$producer[i].name}">Удалить</a></td>
    </tr>
    {/section}
</table>