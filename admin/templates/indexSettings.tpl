<table border="1">
    <tr>
        <td>№</td>
        <td>Оглавление</td>
        <td>Редактировать</td>
    </tr>
    <tr>
        {section loop=$settings name=i}
            <td>{$number++}</td>
            <td>{$settings[i].title}</td>
            <td><a href="editSettings.php?id={$settings[i].id}">Редактировать</a></td>
        {/section}
    </tr>
</table>