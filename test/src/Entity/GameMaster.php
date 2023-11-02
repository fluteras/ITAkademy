<?php
class GameMaster
{

    public function __construct(protected CollectionGameMasterItem $randomGenerators)
    {
    }

    public function pleaseGiveMeACrit(int $percentCrit) : string
    {
        $index = rand(0, count($this->randomGenerators)-1);
        $use = $this->randomGenerators->getIndex($index);
        $item = $use->getIndex(rand(0,count($use)-1));
        $result = $item->generateRandomValue();
        return $result * 100 / $item->getMaxValue() < $percentCrit;

    }
}