<?php
class Deck implements RandomGenerator
{
    public function __construct(protected int $nbColor = 4, protected int $maxValue = 13, protected int $value = 1)
    {
        if ($this->nbColor < 1) {
            echo "Error with nbLaunch in this " . var_dump($this) . " value set to 1 \n";
            $this->nbColor = 1;
        }

        if ($this->maxValue < 1) {
            echo "Error with nbLaunch in this " . var_dump($this) . " value set to 1 \n";
            $this->maxValue = 1;
        }
    }

    public function generateRandomValue(): int
    {
        $color = rand(1, $this->nbColor);
        $value = rand(1, $this->maxValue);
        return $color * $value;
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function getMaxValue(): int
    {
        return $this->nbColor * $this->maxValue;
    }

    public function chooseValue(int $value)
    {
        $this->value = $value;
    }
}