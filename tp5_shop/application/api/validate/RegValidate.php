<?php

namespace app\api\validate;

use think\Validate;

class RegValidate extends Validate
{
    /**
     * 定义验证规则
     * 格式：'字段名'	=>	['规则1','规则2'...]
     */	
	protected $rule = [
        'username'  => 'require|mobile|unique:user',
        'password'  => 'require',
        'code'      => 'require',
    ];
    
    /**
     * 定义错误信息
     * 格式：'字段名.规则名'	=>	'错误信息'
     */	
    protected $message = [
        'username.require'  => '手机号码不能为空',
        'username.mobile'   => '手机号码格式错误',
        'username.unique'   => '手机号码已存在',
        'password.require'  => '密码不能为空',
        'code.require'      => '验证码不能为空',
    ];
}
