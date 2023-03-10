<?php

namespace App\Parsers;

abstract class FormatParser
{
    protected string $content;
    protected array $data;

    public function __construct(protected string $path)
    {
    }

    abstract public function init():void;
    abstract public function toXml():void;
    abstract public function toJson():void;
}