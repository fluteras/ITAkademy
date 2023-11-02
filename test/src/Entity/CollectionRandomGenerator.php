<?php
class CollectionRandomGenerator implements Countable
{
    protected $randomGenerators = array();

    public function push(RandomGenerator $rg)
    {
        array_push($this->randomGenerators, $rg);
    }

    public function getIndex(int $index) : RandomGenerator
    {
        return $this->randomGenerators[$index];
    }

    public function count(): int
    {
        return count($this->randomGenerators);
    }
}