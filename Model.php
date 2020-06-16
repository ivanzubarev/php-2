<?php

abstract class Model
{

    protected const TABLE = '';

    public int $id;

    public static function findAll(): array
    {
        $db = new \Db();

        $sql = 'SELECT * FROM ' . static::TABLE;
        return $db->query($sql, static::class);
    }

    public static function findById($id)
    {
        $db = new \Db();

        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id = :id';

        if ($items = $db->query($sql, static::class, [':id' => $id])) {
            return $items[0];
        }
        return false;
    }

}