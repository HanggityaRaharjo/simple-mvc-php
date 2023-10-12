<?php
// File: Request.php
namespace Handler;

class Request
{
    protected $data;
    public function __construct()
    {
        $this->data = [
            'post' => $_POST
        ];
    }
    public function input($key, $default = null)
    {
        return  $this->data['post'][$key] ?? $default;
    }
}
