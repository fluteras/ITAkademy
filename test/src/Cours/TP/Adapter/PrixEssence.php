<?php
namespace Adapter;
class PrixEssence
{
    /*
    Some other stuff
    */

    public function persist(\DateTimeInterface $now, callable $persister)
    {
        $this->updateAt = $now;

        $persister((array) $this);
    }
}