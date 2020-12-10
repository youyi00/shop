<?php

namespace app\api\controller;

use think\Request;
use think\Controller;
use app\api\model\UserModel;
use app\api\validate\RegValidate;

class Reg extends Controller
{
    /**
     * 显示资源列表
     */
    public function index(request $request)
    {
        $data = $request->param();
        $validate = new RegValidate();
        if(!$validate->check($data))
        {
            return json(['code' => 0, 'msg' => $validate->getError()]);
        }

        $db = new UserModel();
        $res = $db->reg($data);
        if($res)
        {
            return json(['code' => 1, 'msg' => '注册成功', 200]);
        }
        else
        {
            return json(['code' => 0, 'msg' => '系统繁忙', 400]);
        }
    }
}
