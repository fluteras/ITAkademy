<?php
#Design Patterns

## Adapter

// Faire travailler ensemble des objets qui ont des responsabilités similaires ou connexes, dont les prototypes ne sont pas compatibles.

// -------------------Haut Niveau-----------------------------
class A
{
    public function __construct(private ExecutorInterface $executor) {
        
    }
    public function execute($param)
    {
        // do stuff on $param

        return $this->$executor->execute($param);
    }
}

interface ExecutorInterface
{
    public function execute($param);
}

// -------------------Bas Niveau-----------------------------

class B
{
    public function execute($param, $param2)
    {

    }
}

// -------------------Adapteur-----------------------------

class BExecutor implements ExecutorInterface
{
    public function __construct(private B $b, private $bDefaultSecondParam) {
        
    }
    public function execute($param)
    {
        return $this->b->execute($param, $bDefaultSecondParam);
    }
}

