<?php namespace Nabeeljavaid\Timezones\Facades;
 
use Illuminate\Support\Facades\Facade;
 
class TimezonesFacade extends Facade {
 
    protected static function getFacadeAccessor() 
    { 
        return '\Nabeeljavaid\Timezones\Timezones';
    }
 
}