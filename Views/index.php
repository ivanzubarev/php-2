<?php

foreach ($lastArticles as $article) { ?>
    <p><a href="/article.php?id=<?php echo $article->id; ?>"><?php echo $article->title; ?></a></p>
<?php } ?>