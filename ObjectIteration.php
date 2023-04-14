<?php

class Data implements IteratorAggregate {
    var string $frist = 'frist';
    public string $second = 'second';
    private string $third = 'third';
    protected string $forth = 'forth';

//    public function getIterator(): Traversable
//    {
//        $array = [
//            "frist" => $this->frist,
//            "second" => $this->second,
//            "third" => $this->third,
//            "forth" => $this->forth,
//        ];
//        return new ArrayIterator($array);
//    }

    public function getIterator(): Traversable
    {
            yield "frist" => $this->frist;
            yield "second" => $this->second;
            yield "third" => $this->third;
            yield "forth" => $this->forth;
    }
}

$data = new Data();

foreach ($data as $property => $value) {
    echo "$property : $value" . PHP_EOL;
}