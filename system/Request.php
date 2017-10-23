<?php

namespace System;

class Request
{
    public function get($var)
    {
        return $_GET[$var];
    }

    public function post($var)
    {
        return $_POST[$var];
    }

    public function server($var)
    {
        return $_SERVER[$var];
    }

    public function isPost()
    {
        if($_POST) {
            return true;
        }
    }

    public function isAjax()
    {

    }

    public function clean()
    {

    }
}