<?php
interface RandomGenerator
{
    public function generateRandomValue(): int;

    public function getMaxValue(): int;
}