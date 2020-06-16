<?php

include __DIR__ . '/../autoload.php';

$user_exists = \Models\User::findById(1);
assert(gettype($user_exists) === 'object');

$user_not_exists = \Models\User::findById(0);
assert($user_not_exists === false);