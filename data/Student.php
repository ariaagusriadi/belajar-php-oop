<?php

class  Student {
    public string $id;
    public string $name;
    public int $value;

    private string $sample;

    public function setSample(string $sample): void
    {
        $this->sample = $sample;
    }

    public function __clone(): void
    {
        unset($this->sample);
    }

    public function __toString(): string
    {
        return "Student id:$this->id, name:$this->name, value:$this->value";
    }

    public function __invoke(...$arguments) : void
    {
       $join = join(',', $arguments);
       echo "Invoke student with argumnets $join";
    }

    public function __debugInfo(): ?array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "$this->value" => $this->value,
            "sample" => $this->sample,
            "author" => "aria agus riadi",
            "version" => "1.0.0",
        ];
    }
}
