<form action="editItem.php" method="post" enctype="multipart/form-data">
    Измените производителя<br>
    <select name="idProd">
        {section loop=$producer name=i}
            {if $idProd==$producer[i].id}
                <option selected value="{$producer[i].id}">{$producer[i].name}</option>
            {/if}
            <option value="{$producer[i].id}">{$producer[i].name}</option>
        {/section}
    </select><br>
    Измените категорию товара<br>
    <select name="idCat">
        {section loop=$category name=i}
            {if $idCat==$category[i].id}
                <option selected value="{$category[i].id}">{$category[i].name}</option>
            {/if}
            <option value="{$category[i].id}">{$category[i].name}</option>
        {/section}
    </select><br>
    Измените название модели<br>
    <input type="text" name="model" value="{$model}"><br>
    Измените цену<br>
    <input type="number" name="price" value="{$price}"><br>
    Измените количество<br>
    <input type="number" name="count" value="{$count}"><br>
    Загрузите новое фото<br>
    <img src="../image/items/{$oldPhoto}" WIDTH="200px"><br>
    <input type="file" name="newPhoto" value="Загрузить"><br>
    Измените описание<br>
    <textarea name="info">{$info}</textarea><br>
    Meta title<br>
    <textarea name="meta_title">{$meta_title}</textarea><br>
    Meta description<br>
    <textarea name="meta_desc">{$meta_desc}</textarea><br>
    Meta keywords<br>
    <textarea name="meta_keywords">{$meta_keywords}</textarea><br>
    <input type="hidden" name="id" value="{$item_id}">
    <input type="hidden" name="oldPhoto" value="{$oldPhoto}">
    <input type="submit" name="send" value="Отправить">
</form>