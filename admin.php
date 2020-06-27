<?php

include __DIR__ . '/autoload.php';

$articles = \Models\Article::findAll();

include __DIR__ . '/Views/admin/articles/list.php';