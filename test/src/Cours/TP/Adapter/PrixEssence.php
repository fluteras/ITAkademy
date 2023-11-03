<?php
namespace Adapter;
class PrixEssence
{
    private $id = 1;
    private $price = 15;
    private $updateAt;

    /*
    Some other stuff
    */

    public function persist(\DateTimeInterface $now, callable $persister)
    {
        $this->updateAt = $now;

        $persister((array) $this);
    }
}