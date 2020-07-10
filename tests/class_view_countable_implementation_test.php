<?php

include __DIR__ . '/../autoload.php';

$view = new View();

$view->lastArticles = \Models\Article::getLastArticles();
$view->authors = \Models\Author::findAll();

assert(count($view) === 2);