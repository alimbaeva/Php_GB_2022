<?php
namespace app\Test; // пространство имен ключевое слово которое отличается от другого класса Test по регламенту название папки

class Test
{
    public function __construct(private string $a, private string $b)
    {
    }
    
    public function sendMessage()
    {
        return $this->a . '-' . $this->b;
    }
}
