<?php
class CollectionGameMasterItem implements Countable
{
    protected $collectionRandomGenerators = array();

    public function push(CollectionRandomGenerator $crg)
    {
        array_push($this->collectionRandomGenerators, $crg);
    }

    public function getIndex(int $index) : CollectionRandomGenerator
    {
        return $this->collectionRandomGenerators[$index];
    }

    public function count(): int
    {
        return count($this->collectionRandomGenerators);
    }
}