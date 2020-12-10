<?php

namespace app\api\controller;

use think\Controller;
use think\Request;

class Base extends Controller
{
    /**
     * 显示资源列表
     */
    public function index()
    {
        parent::initialize();
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization");
        header('Access-Control-Allow-Methods: GET,POST,PUT,DELETE,OPTIONS,PATCH');
    }


}
