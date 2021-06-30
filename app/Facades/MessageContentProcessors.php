<?php


namespace App\Facades;
use \Illuminate\Support\Facades\Facade;


class MessageContentProcessors extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'MessageContentProcessors';
    }
}
