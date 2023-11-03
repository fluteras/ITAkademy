<?php
namespace Adapter;
class Json
{
    public function doSave(array $data)
    {
        file_put_contents("prixEssence.txt",json_encode($data));
    }
}