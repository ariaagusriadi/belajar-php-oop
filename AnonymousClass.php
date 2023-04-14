<?php

interface HelloWorld
{
    function sayhello() : void;
}

$helloword = new class('aria') implements HelloWorld{

    public string $name;
    public function __construct(string $name){
        $this->name = $name;
    }
    public function sayhello(): void
    {
        echo "Hello $this->name" . PHP_EOL;
    }
};
$helloword->sayhello();
