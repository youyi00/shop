<?php

namespace app\api\controller\v1;

use think\Request;
use think\Controller;
use app\api\controller\Home;
use app\api\model\UserModel;

class User extends Home
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        $uid = $this->uid;
        $db = new UserModel();
        $info = $db->where('id', $uid)->field('username')->find();

        return json(['code' => 1, 'msg' => '成功', 'data' =>$info, 200]);
    }

}
