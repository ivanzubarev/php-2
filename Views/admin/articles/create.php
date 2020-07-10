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
    <p>
        <input type="text" name="title" placeholder="Название">
    </p>
    <p>
        <textarea rows="15" cols="50" name="article_text" placeholder="Текст новости"></textarea>
    </p>
    <p>
        <select name="author_id">
            <option value="">Автор</option>
            <?php foreach ($this->authors as $author) { ?>
                <option value="<?php echo $author->getId(); ?>"><?php echo $author->name; ?></option>
            <?php } ?>
        </select>
    </p>
    <p>
        <button type="submit">Создать</button>
    </p>

</form>