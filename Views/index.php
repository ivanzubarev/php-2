<h1>Последние новости</h1>
<?php
foreach ($this->lastArticles as $article) { ?>
    <p><a href="/article.php?id=<?php echo $article->getId(); ?>"><?php echo $article->title; ?></a></p>
<?php } ?>

<hr>

<p style="text-align: center;">
    <a href="/admin.php">Администрирование новостей >>></a>
</p>
