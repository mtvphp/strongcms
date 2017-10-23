<?php

namespace System;

class Response
{
    public function redirect($to, $permanent = false)
    {
        if($permanent) {
            header($_SERVER['SERVER_PROTOCOL'] . '301 Moved Permanently');
        }

        header('Location: ' . $to);
        exit();
    }
}