<?php

use Models\Article;

include __DIR__ . '/autoload.php';

$article = Article::findById($_GET['id']);

include __DIR__ . '/Views/article.php';