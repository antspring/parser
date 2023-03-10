<?php

namespace App;

use App\Parsers\FormatParser;

class Parser
{
    public function __construct(private readonly FormatParser $parser)
    {
    }

    public function init(): void
    {
        $this->parser->init();
    }

    public function toXml()
    {
        $this->parser->toXml();
    }

    public function toJson()
    {
        $this->parser->toJson();
    }
}