<?php

namespace app\admin\controller;

use app\admin\model\AdminModel;
use app\admin\validate\LoginValidate;
use think\Request;
use think\Controller;
use think\captcha\Captcha;

class Login extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        return $this->fetch();
    }

    public function verify()
    {
        $config =    [
            // 验证码字体大小
            'fontSize'    =>    30,    
            // 验证码位数
            'length'      =>    2,   
            // 关闭验证码杂点
            'useNoise'    =>    false, 
        ];
        $captcha = new Captcha($config);
        return $captcha->entry();
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        $data = $request->param();
        $validate = new LoginValidate();
        if(!$validate->check($data))
        {
            return ['code' => 0, 'msg' => $validate->getError()];
        }

        if(!captcha_check($data['code']))
        {
            return ['code' => 0, 'msg' => '验证码错误'];
        }

        $db = new AdminModel();
        $res = $db->login($data);
        if($res)
        {
            return ['code' => 1, 'msg' => '登录成功'];
        }
        else
        {
            return ['code' => 0, 'msg' => '账号或密码错误'];
        }

    }

    public function logout()
    {
        session('aid',null);
        session('username',null);
        return ['code' => 1, 'msg' => '退出成功'];
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}
