<?php

// use App\Kernel;

// require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

// return function (array $context) {
//     return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
// };
require_once("../src/Entity/RandomGenerator.php");
require_once("../src/Entity/Coin.php");
require_once("../src/Entity/Deck.php");
require_once("../src/Entity/Dice.php");
require_once("../src/Entity/CollectionRandomGenerator.php");
require_once("../src/Entity/CollectionGameMasterItem.php");
require_once("../src/Entity/GameMaster.php");
require_once("../src/Controller/index.php");
