<style>
    form {
        text-align: center;
        max-width: 1200px;
        margin: auto;
    }

</style>
<form action="/admin.php?update=<?php echo $article->getId(); ?>" method="POST">
    <input type="text" name="title" placeholder="Название статьи" value="<?php echo $article->title; ?>">
    <br>
    <textarea name="article_text" placeholder="Текст статьи"><?php echo $article->article_text; ?></textarea>
    <br>
    <button type="submit">Сохранить</button>
</form>