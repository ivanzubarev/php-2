<?php

class View implements Countable, Iterator
{

    use \App\Traits\FillableTrait;

    // Для реализации интерфейса terator
    protected $position = 0;

    public function display(string $template)
    {
        include $template;
    }

    public function render(string $template)
    {
        ob_start();
        include $template;
        $contents = ob_get_contents();
        ob_end_clean();
        return $contents;
    }

    // Реализация Countable
    public function count()
    {
        return count($this->data);
    }


    // Реализация Iterator
    // Метод должен вернуть значение текущего элемента
    public function current()
    {
        return current($this->data);
    }

    // Метод должен вернуть ключ текущего элемента
    public function key()
    {
        return key($this->data);
    }

    // Метод должен сдвинуть "указатель" на следующий элемент
    public function next()
    {
        return next($this->data);
    }

    // Метод должен поставить "указатель" на первый элемент
    public function rewind()
    {
        reset($this->data);
    }

    // Метод должен проверять - не вышел ли указатель за границы?
    public function valid()
    {
        return key($this->data) !== null;
    }
}