<?php

use Models\Article;

include __DIR__ . '/autoload.php';

$view = new View();
$art = Article::findById(29);
var_dump($art->author);
die;
$view->lastArticles = Article::getLastArticles();

$view->display(__DIR__ . '/Views/index.php');