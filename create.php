<?php

include __DIR__ . '/autoload.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $view = new View();
    $view->authors = \Models\Author::findAll();
    $view->display(__DIR__ . '/Views/admin/articles/create.php');
}
elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $article = new \Models\Article();
    $article->title = $_POST['title'];
    $article->article_text = $_POST['article_text'];
    $article->author_id = (int)$_POST['author_id'];
    $article->save();
    
    header('Location: /admin.php');

    die;
}