<?php
namespace App\Core;
class App
{
    protected static $registry = [];
    public static function bind($key, $value)
    {
        static::$registry[$key] = $value;
    }
    public static function get($key)
    {
        if (! array_key_exists($key, static::$registry))
        {
            throw new Exception("Noe {$key} is bound in the container");
        }
        return static::$registry[$key];
    }
}