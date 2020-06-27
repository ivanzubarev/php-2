<?php

namespace App;

class Config
{
    protected static $instance = null;
    public $data;

    public static function instance()
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    protected function __construct()
    {
        $this->data = include __DIR__ . '/../config.php';
    }
}