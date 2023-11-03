<?php
namespace Adapter;
// $database = new Database();

// $databaseDriver = new DatabaseDriver($database,$connexion /*todo*/);

// $prixEssenceRepo = new PrixEssenceRepository(new \DateTimeInterface(), $databaseDriver)

// $prixEssence = new PrixEssence();

// $prixEssenceRepo->save($prixEssence);


$json = new Json("prixEssence.txt");

$jsonDriver = new JsonDriver($json);

$prixEssenceRepo = new PrixEssenceRepository(new \DateTime(), $jsonDriver);

$prixEssence = new PrixEssence();

$prixEssenceRepo->save($prixEssence);
