<?php

use Models\Article;

include __DIR__ . '/autoload.php';

$view = new View();

$view->article = Article::findById($_GET['id']);

$view->display(__DIR__ . '/Views/article.php');