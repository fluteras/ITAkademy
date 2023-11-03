<?php
namespace Adapter;
$database = new Database();
$databaseDriver = new DatabaseDriver($database,$connexion /*todo*/);

$prixEssenceRepo = new PrixEssenceRepository($now, $databaseDriver)

$prixEssence = new PrixEssence();

$prixEssenceRepo->save($prixEssence);