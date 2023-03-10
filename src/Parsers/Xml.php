<?php

namespace App\Parsers;

class Xml extends FormatParser
{

    public function init(): void
    {
        $this->content = file_get_contents($this->path);
        $this->data = simplexml_load_string($this->content);
    }

    public function toXml(): void
    {
        echo 'File is already Xml';
    }

    public function toJson(): void
    {
        $name = basename($this->path);

        file_put_contents("src/files/{$name}.json", json_encode($this->data));
    }
}