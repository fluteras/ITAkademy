<?php
namespace Adapter;
class PrixEssenceRepository
{
    public function __construct(
        private \DateTimeInterface $now,
        private DriverInterface $driver
        ) {}

    public function save(PrixEssence $prixEssence)
    {
        $driver = $this->driver;

        $prixEssence->persist(
            $this->now,
            function ($data) use ($driver) {
                $driver->doSave($data);
            }
        );
    }
}