<?php

namespace System;

class App
{
    public function __construct()
    {
        $router = Registry::get('router')->match();

        if($router['target']) {
            $target = explode('@', $router['target']);

            if(class_exists($target[0])) {
                if(method_exists($target[0], $target[1])) {
                    call_user_func_array([new $target[0], $target[1]], $router['params']);
                }
            }
        } else {
            http_response_code(404);
                require_once WEB . '404.html';
        }
    }
}