<?php
namespace PhpHelper;

class Singleton
{

    private static $instance = null;
    public static function getInstance()
    {
        if(static::$instance === null) {
            static::$instance = new static();
        }
        return self::$instance;
    }

    protected function __construct()
    {
        //
    }

    protected function __clone()
    {
        //
    }

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

}