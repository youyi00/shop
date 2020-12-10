<?php

namespace app\api\controller;

use Firebase\JWT\JWT;
use think\Controller;
use think\Request;

class Home extends Base
{
    public function initialize()
    {
        parent::initialize();
        $header = request()->Header();
        if(!isset($header['token']))
        {
            return json(['code' => 0, 'msg' => 'token不能为空'],400)->send();
        }
        $token = $header['token'];
        
        //解密token
        $key = 'api';
        try
        {
            $info = JWT::decode($token, $key, array('HS256'));
        }
        catch(\Exception $e)
        {
            return json(['code' => 0, 'msg' => $e->getCode(), 400])->send();
        }
        $this->uid = $info->uid;
    }
}