<?php

//First Part
$dice = new Dice(20);
$card = new Deck();
$coin = new Coin(2);

echo $dice->generateRandomValue() . "\n";
echo $card->generateRandomValue() . "\n";
echo $coin->generateRandomValue() . "\n";


//Second Part
$gameMasterCollection = new CollectionGameMasterItem();

$dices = new CollectionRandomGenerator();
$decks = new CollectionRandomGenerator();
$coins = new CollectionRandomGenerator();

for ($i=0; $i < rand(10,500); $i++) { 
    $dices->push(new Dice(rand(2,100)));
}

$decks->push(new Deck(3,18));
$decks->push(new Deck(4,13));

$coins->push(new Coin(rand(1,5)));
$coins->push(new Coin(rand(1,5)));

$gameMasterCollection->push($dices);
$gameMasterCollection->push($decks);
$gameMasterCollection->push($coins);

$gameMaster = new GameMaster($gameMasterCollection);

echo $gameMaster->pleaseGiveMeACrit(80) ? "true" : "false";