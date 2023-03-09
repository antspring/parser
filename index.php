<?php
require_once 'vendor/autoload.php';

use App\Parser;
use App\Parsers\Json;

$parser = new Parser(new Json('src\files\test.json'));
$parser->init();
$parser->toXML();