<?php


namespace App\Facades;
use \Illuminate\Support\Facades\Facade;


class ExternalUser extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ExternalUserService';
    }
}
