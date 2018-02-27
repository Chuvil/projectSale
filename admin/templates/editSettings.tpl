<form action="editSettings.php" method="post">
    Заголовок<br>
    <input type="text" name="title" value="{$title}"><br>
    Контент на странице<br>
    <textarea name="content">{$settings_content}</textarea><br>
    Заголовок для SEO<br>
    <textarea name="meta_title">{$meta_title}</textarea><br>
    Описание для SEO<br>
    <textarea name="meta_desc">{$meta_desc}</textarea><br>
    Ключевые слова для SEO<br>
    <textarea name="meta_keywords">{$meta_keywords}</textarea><br>
    Имя страницы<br>
    <input type="text" name="name">{$name}<br>
    Приоритет<br>
    <input type="number" name="priority" value="{$priority}"><br>
    <input type="hidden" name="id" value="{$id}">
    <input type="submit" name="send" value="Подтвердить"><br>
</form>