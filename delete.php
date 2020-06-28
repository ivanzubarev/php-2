<?php

include __DIR__ . '/autoload.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    $article = \Models\Article::findById($_GET['id']);
    $article->delete();

    header('Location: /admin.php');

    die;
}