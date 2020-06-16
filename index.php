<?php

use Models\Article;

include __DIR__ . '/autoload.php';

$lastArticles = Article::getLastArticles();
include __DIR__ . '/Views/index.php';