<?php
namespace Adapter;
class Json
{

    public function __construct(private $filepath) {
    }
    public function doSave(array $data)
    {
        file_put_contents("$this->filepath",json_encode($data));
    }
}