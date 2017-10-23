<?php

namespace System;

class Registry
{
    private $data = array();

    private static $_instance = null;

    public static function getInstance()
    {
        if(is_null(self::$_instance)) {
            self::$_instance = new self;
        }
        return self::$_instance;
    }

    public static function set($key, $value)
    {
        self::getInstance()->data[$key] = $value;
    }

    public static function get($key)
    {
        if(self::has($key)) {
            return self::getInstance()->data[$key];
        }
    }

    public static function has($key)
    {
        return (isset(self::getInstance()->data[$key]) ? true : false);
    }

    public static function remove($key)
    {
        if(self::has($key)) {
            unset(self::getInstance()->data[$key]);
        }
    }

    private function __construct() {}

    private function __clone() {}
}