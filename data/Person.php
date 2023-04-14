<?php

class Person {
    const   AUTHOR = "CODE WRITE";
    var string $name;
    var ?string $address = null;
    var string $country = "Indonesia";

    function __construct(string $name, ?string $addres){
        $this->name = $name;
        $this->address = $addres;
    }

     function sayHello ( ?string $name2){
         if(is_null($name2)){
             echo "Hi, my name is $this->name" . PHP_EOL;
         }else{
             echo "Hi $name2, my name is $this->name" . PHP_EOL;
         }
     }

     function info(){
         echo "Author :  " . self::AUTHOR . PHP_EOL;
     }


     function __destruct()
     {
       echo "Object person $this->name is destroyed" . PHP_EOL;
     }
}