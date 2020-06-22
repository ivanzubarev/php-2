<?php

namespace Models;

class Article extends \Model
{

    protected const TABLE = 'articles';

    public string $title;
    public string $article_text;

    public static function getLastArticles()
    {
        $db = \Db::instance();

        $sql = 'SELECT * FROM ' . static::TABLE . ' ORDER BY id DESC LIMIT 3';
        return $db->query($sql, static::class);
    }
}