<?php

namespace System;

class Config
{
    private $storage = array();

    public function set($key, $value)
    {
        $this->storage[$key] = $value;
    }

    public function get($key)
    {
        if($this->has($key)) {
            return $this->storage[$key];
        }
    }

    public function has($key)
    {
        return (isset($this->storage[$key]) ? true : false);
    }

    public function load($filename)
    {
        $file = CONFIG . $filename . '.php';

        if(file_exists($file)) {
            $config = array();

            require_once $file;

            $this->storage = array_merge($this->storage, $config);
        }
    }
}