<?php

class Zero
{
     private array $properties = [];
     public function __get(string $name)
     {
         return $this->properties[$name];
     }
     public function __set(string $name, $value): void
     {
         $this->properties[$name] = $value;
     }
     public function __isset(string $name): bool
     {
         return isset($this->properties[$name]);
     }
     public function __unset(string $name): void
     {
          unsset($this->properties[$name]);
     }
     public function __call(string $name, array $arguments)
     {
        $join = join(',', $arguments);
        echo "Call function $name with arguments $join".PHP_EOL;
     }
     public static function __callStatic(string $name, array $arguments)
     {
         $join = join(',', $arguments);
         echo "Call static function $name with arguments $join".PHP_EOL;
     }
}

$zero = new Zero();
$zero->fristName = 'aria';
$zero->middleName = 'agus';
$zero->lastName = 'riadi';

echo "Frist Name : $zero->fristName". PHP_EOL;
echo "Middle Name : $zero->middleName". PHP_EOL;
echo "lastname Name : $zero->lastName". PHP_EOL;

$zero->sayHello('aria agus riadi', 'Ganteng');
Zero::sayHello('aria agus', 'riadi');