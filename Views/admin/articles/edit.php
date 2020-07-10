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
    <input type="hidden" name="id" value="<?php echo $this->article->getId(); ?>">
    <p>
        <input type="text" name="title" placeholder="Название" value="<?php echo $this->article->title ?>">
    </p>
    <p>
        <textarea rows="15" cols="50" name="article_text" placeholder="Текст новости"><?php echo $this->article->article_text ?></textarea>
    </p>
    <p>
        <select name="author_id">
            <option value="">Автор</option>
            <?php foreach ($this->authors as $author) { ?>
                <option <?php echo ($this->article->author_id == $author->getId()) ? 'selected' : ''; ?> value="<?php echo $author->getId(); ?>"><?php echo $author->name; ?></option>
            <?php } ?>
        </select>
    </p>
    <p>
        <button type="submit">Сохранить</button>
    </p>

</form>