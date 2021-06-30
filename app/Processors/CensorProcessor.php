<?php


namespace App\Processors;


use Snipe\BanBuilder\CensorWords;

class CensorProcessor implements \App\Contracts\StringDataProcessor
{
    private $censor;

    public function __construct(){
        $this->censor = new CensorWords;
    }
    public function process(string $value)
    {

        return $this->censor->censorString($value);
    }
}
