<?php
class Coin implements RandomGenerator
{
    public function __construct(protected int $nbLaunch = 1, protected int $value = 1)
    {
        if ($this->nbLaunch < 1) {
            echo "Error with nbLaunch in this " . var_dump($this) . " value set to 1 \n";
            $this->nbLaunch = 1;
        }
    }

    public function generateRandomValue(): int
    {
        for ($i=0; $i < $this->nbLaunch; $i++) { 
           if(!rand(0, 1))
           {
            return 0;
           }
        }
        return 1;
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function getMaxValue(): int
    {
        return 1;
    }

    public function chooseValue(int $value)
    {
        $this->value = $value;
    }
}

