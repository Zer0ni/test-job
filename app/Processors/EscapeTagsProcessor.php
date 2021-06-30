<?php


namespace App\Processors;

use App\Contracts\StringDataProcessor;

class EscapeTagsProcessor implements StringDataProcessor
{
    public function process(string $value)
    {
        return htmlspecialchars($value);
    }

}
