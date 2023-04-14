<?php
class  Programmer{
    public  string $name;

    public function __construct(string $name){
        $this->name = $name;
    }
}

class BackendProgrammer extends Programmer{

}
class FrontendProgrammer extends Programmer{

}

class Company {
    public Programmer $programmer;
}

function sayHelloProgrammer (Programmer $programmer){
    if($programmer instanceof BackendProgrammer){
        echo "Hello Backend Pogrammer $programmer->name" . PHP_EOL;
    }elseif ($programmer instanceof FrontendProgrammer){
        echo "Hello Frontend Pogrammer $programmer->name" . PHP_EOL;
    }elseif ($programmer instanceof Programmer){
        echo "Hello Pogrammer $programmer->name" . PHP_EOL;
    }
}
