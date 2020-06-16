<?php

include __DIR__ . '/../autoload.php';

$db = new \Db();

$sql = 'SELECT * FROM users';
assert($db->execute($sql) === true);

$sql = 'SELECT * FROM not_exists_table';
assert($db->execute($sql) === false);