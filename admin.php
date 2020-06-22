<?php

include __DIR__ . '/autoload.php';

switch (true) {
    case isset($_GET['new_article']):
        $article = new \Models\Article();
        foreach ($_POST as $property_name => $value) {
            $article->$property_name = $value;
        }
        $article->save();
        header('Location: /admin.php');
        break;
    case !empty($_GET['update']):
        $article = \Models\Article::findById($_GET['update']);
        foreach ($_POST as $property_name => $value) {
            $article->$property_name = $value;
        }
        $article->save();
        header('Location: /admin.php');
        break;
    case !empty($_GET['edit']):
        $article = \Models\Article::findById($_GET['edit']);
        require __DIR__ . '/views/admin/articles/edit.php';
        break;

    case !empty($_GET['delete']):
        $article = \Models\Article::findById($_GET['delete']);
        $article->delete();
        header('Location: /admin.php');
        break;
    default:
        $articles = \Models\Article::findAll();
        require __DIR__ . '/views/admin/articles/list.php';
        break;
}