<?php


namespace App\Contracts;


interface ProcessorsPipeline
{
    public function construct();
    public function doProcess(string $value);
}
