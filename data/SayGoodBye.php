<?php

namespace Data\Traits;
trait SayGoodBye {
    public function goodBye(?string $name) : void {
        if(is_null($name)){
            echo "Good bye" . PHP_EOL;
        }else{
            echo "Good bye $name" . PHP_EOL;
        }
    }
}
trait SayHello {
    public function hello (?string $name) : void {
        if(is_null($name)){
            echo "Hello" . PHP_EOL;
        }else{
            echo "Hello $name" . PHP_EOL;
        }
    }
}

trait HasName {
    public string $name;
}

trait  CanRun {
    public abstract function run() : void ;
}

class ParentPerson {
    public function goodBye(?string $name): void
    {
        echo "Good Bye in person" . PHP_EOL;
    }
    public function hello(?string $name): void
    {
        echo "Hello in person" . PHP_EOL;
    }
}

trait All {
    use SayGoodBye, SayHello, HasName, CanRun {
//        bisa di ovveride
//        hello as private;
//        goodBye as private;
    }
}
class Person extends ParentPerson {
    use All;
    public function run(): void
    {
        echo "Person $this->name is runing" . PHP_EOL;
    }
}


