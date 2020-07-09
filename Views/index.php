<h1>Последние новости</h1>
<?php
    if (count($this->lastArticles) > 0) {
        foreach ($this->lastArticles as $article) { ?>
        <p><a href="/article.php?id=<?php echo $article->getId(); ?>"><?php echo $article->title; ?></a>
            <br>

            <i style="font-size: 0.8em;">Автор: <?php echo ($article->author != null) ? $article->author->name : 'Аноним'; ?></i>

        </p>
        <?php } ?>
    <?php } else { ?>
        В настоящий момент нет ни одной новости.
    <?php } ?>

<hr>

<p style="text-align: center;">
    <a href="/admin.php">Администрирование новостей >>></a>
</p>
