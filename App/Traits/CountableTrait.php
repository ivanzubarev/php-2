<?php

namespace App\Traits;

trait CountableTrait
{
    public function count()
    {
        return count($this->data);
    }
}