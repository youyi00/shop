<?php

namespace app\api\controller;

use think\Request;
use think\Controller;
use app\api\model\UserModel;
use app\api\validate\LoginValidate;
use Firebase\JWT\JWT;

class Login extends Controller
{
    /**
     * 显示资源列表
     */
    public function index(Request $request)
    {
        //登录接口
        $data = $request->param();
        $validate = new LoginValidate();
        if(!$validate->check($data))
        {
            return json(['code' => 0, 'msg' => $validate->getError(), 400]);
        }

        $db = new UserModel();
        $info = $db->where('username',$data['username'])->where('password',$data['password'])->find();
        if($info['password'] != $data['password'])
        {
            return json(['code' => 0, 'msg' => '账号或密码不正确', 400]);
        }

        $key = 'api';
        $payload = array(
            // "iss" => "",
            // "aud" => "",
            'iat' => time(),
            'nbf' => time(),
            'exp' => time() + 60 * 30,
            'uid' => $info['id'],
        );
        $token = JWT::encode($payload,$key);
        return json(['code' => 1, 'msg' => '登录成功', 'token' => $token]);
    }
}
