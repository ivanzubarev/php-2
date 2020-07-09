<?php

use Models\Article;

include __DIR__ . '/autoload.php';

$view = new View();

$view->lastArticles = Article::getLastArticles();

$view->display(__DIR__ . '/Views/index.php');