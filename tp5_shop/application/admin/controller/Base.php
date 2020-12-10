<?php

namespace app\admin\controller;

use think\Controller;

class Base extends Controller
{
    public function initialize()
    {
        parent::initialize();
        if(!session('aid'))
        {
            $this->redirect('Login/index');
        }
    }
    
}
