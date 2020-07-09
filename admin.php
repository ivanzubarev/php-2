<?php

include __DIR__ . '/autoload.php';

$view = new View();

$view->articles = \Models\Article::findAll();

$view->display(__DIR__ . '/Views/admin/articles/list.php');