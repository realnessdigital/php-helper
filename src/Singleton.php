<?php
namespace PhpHelper;

class Singleton
{

    /**
     * @var static
     */
    private static $_instance = null;

    /**
     * @return static
     */
    public static function getInstance()
    {
        if(static::$_instance === null) {
            static::$_instance = new static();
        }
        return self::$_instance;
    }

    protected function __construct()
    {
        if(static::$_instance === null) {
            static::$_instance = $this;
        }
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