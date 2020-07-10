<?php

include __DIR__ . '/../autoload.php';

$db = Db::instance();

$sql = 'SELECT * FROM users';
assert($db->execute($sql) === true);

$sql = 'SELECT * FROM not_exists_table';
assert($db->execute($sql) === false);