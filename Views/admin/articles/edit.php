<style>
    body {
        max-width: 960px;
        margin: auto;
    }

    form {
        text-align: center;
    }
</style>

<form action="" method="POST">
    <input type="hidden" name="id" value="<?php echo $article->getId(); ?>">
    <p>
        <input type="text" name="title" placeholder="Название" value="<?php echo $article->title ?>">
    </p>
    <p>
        <textarea name="article_text" placeholder="Текст новости"><?php echo $article->article_text ?></textarea>
    </p>
    <p>
        <button type="submit">Сохранить</button>
    </p>

</form>