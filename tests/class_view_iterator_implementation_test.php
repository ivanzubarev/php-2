<?php

include __DIR__ . '/../autoload.php';

$view = new View();
$view->lastArticles = \Models\Article::getLastArticles();
$view->authors = \Models\Author::findAll();

$i = 1;
foreach ($view as $view_item) {
    echo '<h1>Это итерация № ' . $i . '</h1>';
    var_dump($view_item);
    echo '<hr>';
    $i++;
}