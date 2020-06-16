<?php

namespace Models;

class Article extends \Model
{

    protected const TABLE = 'articles';

    public string $title;
    public string $article_text;

    public static function getLastArticles()
    {
        $db = new \Db();

        $sql = 'SELECT * FROM ' . static::TABLE . ' ORDER By id DESC Limit 3';
        return $db->query($sql, static::class);
    }
}