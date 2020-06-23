<?php

abstract class Model
{

    protected const TABLE = '';

    protected int $id;

    public function getId() {
        return $this->id;
    }

    public static function findAll(string $orderBy = 'id'): array
    {
        $db = Db::instance();

        $sql = 'SELECT * FROM ' . static::TABLE . ' ORDER BY ' . $orderBy;
        return $db->query($sql, static::class);
    }

    public static function findById($id)
    {
        $db = Db::instance();

        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id = :id';

        if ($items = $db->query($sql, static::class, [':id' => $id])) {
            return $items[0];
        }
        return false;
    }

    public function save()
    {

        if (!isset($this->id)) {
            return $this->insert();
        }

        return $this->update();
    }

    public function delete()
    {
        if (!isset($this->id)) {
            return false;
        }

        $sql = 'DELETE FROM ' . static::TABLE . ' WHERE id=:id';

        $db = Db::instance();
        return $db->execute($sql, [':id' => $this->id]);

    }

    protected function insert()
    {
        $props = get_object_vars($this);

        $columns = [];
        $binds = [];
        $data = [];
        foreach ($props as $name => $value) {
            $columns[] = $name;
            $binds[] = ':' . $name;
            $data[':' . $name] = $value;
        }

        $sql = 'INSERT INTO ' . static::TABLE . ' 
        (' . implode(',', $columns) . ') 
        VALUES (' . implode(',', $binds) . ' )';

        $db = Db::instance();
        $db->execute($sql, $data);
        $this->id = $db->lastId();
    }

    protected function update(): bool
    {
        $props = get_object_vars($this);

        $substitution = [];
        $data = [];
        foreach ($props as $name => $value) {
            $substitution[] = $name . '=:' . $name;
            $data[':' . $name] = $value;
        }

        $sql = 'UPDATE ' . static::TABLE . '
        SET
        ' . implode(',', $substitution) . '
        WHERE
        id=:id';

        $db = Db::instance();
        return $db->execute($sql, $data);

    }

}