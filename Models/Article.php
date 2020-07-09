<?php

namespace Models;

/**
 * @property Author $author
 */
class Article extends \Model
{
    protected const TABLE = 'articles';

    public string $title;
    public string $article_text;
    protected ?int $author_id;

    public function __set($name, $value)
    {
        // Шторм ругается что метод __set() должен быть обязательно задекларирован в паре с __get(). Пока он пуст и ничего не делает.
    }

    public function __get($name)
    {
        if ($name == 'author') {
            if ($this->author_id != null) {
                return Author::findById($this->author_id);
            }
            return null;
        }
    }

    public function __isset($name)
    {
        return isset($this->author_id);
    }

    public static function getLastArticles()
    {
        $db = \Db::instance();

        $sql = 'SELECT * FROM ' . static::TABLE . ' ORDER BY id DESC LIMIT 3';
        return $db->query($sql, static::class);
    }
}