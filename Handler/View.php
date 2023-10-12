<?php

namespace Handler;

class View
{
    protected $data = [];

    public function __construct($data = [])
    {
        $this->data = $data;
    }

    public function render($viewName)
    {
        extract($this->data);
        include __DIR__ . '/../views/welcome.php';
    }
}
