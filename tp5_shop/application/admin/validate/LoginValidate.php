<?php

namespace app\admin\validate;

use think\Validate;

class LoginValidate extends Validate
{
    /**
     * 定义验证规则
     * 格式：'字段名'	=>	['规则1','规则2'...]
     *
     * @var array
     */	
	protected $rule = [
        'username'  =>'require',
        'password'  =>'require|length:3,20',
        'code'      =>'require',
    ];
    
    /**
     * 定义错误信息
     * 格式：'字段名.规则名'	=>	'错误信息'
     *
     * @var array
     */	
    protected $message = [
        'username.require'  => '用户名不能为空',
        'password.require'  => '密码不能为空',
        'password.length'   => '密码长度必须是3到20位',
        'code.require'      => '验证码不能为空',
    ];
}
