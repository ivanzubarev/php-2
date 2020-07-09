<?php

include __DIR__ . '/autoload.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $view = new View();

    $view->article = \Models\Article::findById($_GET['id']);

    $view->display(__DIR__ . '/Views/admin/articles/edit.php');
}
elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $article = \Models\Article::findById($_POST['id']);
    $article->title = $_POST['title'];
    $article->article_text = $_POST['article_text'];
    $article->save();

    header('Location: /admin.php');

    die;
}