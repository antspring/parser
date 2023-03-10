<?php

namespace Parser\Parsers;

class Json extends FormatParser
{
    public function init():void
    {
        $this->content = file_get_contents($this->path);
        $this->data = json_decode($this->content, true);
    }

    public function toXml():void
    {
        $xml = new \SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><datalist></datalist>');

        $this->arrayToXml($this->data, $xml);

        $name = basename($this->path);

        $xml->asXML("src/files/{$name}.xml");
    }

    private function arrayToXml(array $array, &$xml):void
    {
        foreach ($array as $key => $value){
            if (is_int($key)){
                $key = 'Element'.$key;
            }
            if (is_array($value)){
                $label = $xml->addChild($key);
                $this->arrayToXMl($value, $label);
            }
            else {
                $xml->addChild($key, $value);
            }
        }
    }

    public function toJson(): void
    {
        echo 'File is already Json';
    }
}