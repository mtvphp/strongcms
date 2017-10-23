<?php

namespace App;

use Test;

class HomeController extends BaseController
{
    public function index()
    {
        if($this->request->isPost()) {
            $this->response->redirect('signin');
        } else {
            $name = $this->config->get('name');

            $test_model = new Test();
            $test_model->name = $name;
            $test_model->surname = $name;
            $test_model->insert();
        }
    }
}