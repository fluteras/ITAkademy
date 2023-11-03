<?php
namespace Adapter;
class JsonDriver implements DriverInterface
{
    public function __construct(
        private JSon $json
        ) {}

    public function doSave($data)
    {
        $this->json->doSave($data);
    }
}