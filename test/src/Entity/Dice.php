<?php
class Dice implements RandomGenerator
{
    public function __construct(protected int $faces = 6, protected int $value = 1)
    {
        if ($this->faces < 1) {
            echo "Error with nbLaunch in this " . var_dump($this) . " value set to 1 \n";
            $this->faces = 1;
        }
    }

    public function generateRandomValue(): int
    {
        return rand(1, $this->faces);
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function getMaxValue(): int
    {
        return $this->faces;
    }

    public function chooseValue(int $value)
    {
        $this->value = $value;
    }
}