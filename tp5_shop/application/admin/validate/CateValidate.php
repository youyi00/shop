<?php

namespace app\admin\validate;

use think\Validate;

class CateValidate extends Validate
{
    
	protected $rule = [
        'title' => 'require',
        'sort' => 'require|number',
        'img' => 'require',
    ];
    
    protected $message = [
        'title.require' => '标题不能为空',
        'sort.require'  => '排序不能为空',
        'sort.number'   => '排序必须为数字',
        'img.require'   => '请上传图片',
    ];
}
