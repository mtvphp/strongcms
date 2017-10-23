<?php

namespace System;

abstract class Controller
{
    public function __get($key)
    {
        return Registry::get($key);
    }
}