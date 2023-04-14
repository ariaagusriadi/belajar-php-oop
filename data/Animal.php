<?php

namespace Data;
require_once "Food.php";

Abstract class Animal {
    public string $name;
    abstract function run() : void;

    abstract public function eat(AnimalFood $animalFood) :void;
}

class Cat extends Animal{
    public function run(): void
    {
        // TODO: Implement run() method.
        echo "cat $this->name is running" . PHP_EOL;
    }

    public function eat(AnimalFood $animalFood): void
    {
        echo "Cat is eating".PHP_EOL;
    }
}

class Dog extends Animal{
    public function run(): void
    {
        // TODO: Implement run() method.
        echo "Dog $this->name is running" . PHP_EOL;
    }

    public function eat(Food $animalFood): void
    {
        echo "Dog is eating".PHP_EOL;
    }
}