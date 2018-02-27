<form action="addItem.php" method="post" enctype="multipart/form-data">
    Производитель<br>
    <select name="idProd">
        {section loop=$producer name=i}
            <option value="{$producer[i].id}">{$producer[i].name}</option>
        {/section}
    </select><br>
    Категория товара<br>
    <select name="idCat">
        {section loop=$category name=i}
            <option value="{$category[i].id}">{$category[i].name}</option>
        {/section}
    </select><br>
    Название модели<br>
    <input type="text" name="model"><br>
    Цена<br>
    <input type="number" name="price"><br>
    Количество<br>
    <input type="number" name="count"><br>
    Фото<br>
    <input type="file" name="photo" value="Загрузить"><br>
    Описание<br>
    <textarea name="info">$info}</textarea><br>
    Meta title<br>
    <textarea name="meta_title">{$meta_title}</textarea><br>
    Meta description<br>
    <textarea name="meta_desc">{$meta_desc}</textarea><br>
    Meta keywords<br>
    <textarea name="meta_keywords">{$meta_keywords}</textarea><br>
    <input type="submit" name="send" value="Отправить">
</form>