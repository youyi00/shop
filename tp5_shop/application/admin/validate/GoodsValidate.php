<?php

namespace app\admin\validate;

use think\Validate;

class GoodsValidate extends Validate
{
    /**
     * 定义验证规则
     * 格式：'字段名'	=>	['规则1','规则2'...]
     *
     * @var array
     */	
	protected $rule = [
        'pid'       => 'require',
        'title'     => 'require',
        'sort'      => 'require|number',
        'price'     => 'require',
        'sku'       => 'require|number',
        'views'     => 'require',
        'img'       => 'require',
        'intru'     => 'require',
        'content'   => 'require',
    ];
    
    /**
     * 定义错误信息
     * 格式：'字段名.规则名'	=>	'错误信息'
     *
     * @var array
     */	
    protected $message = [
        'pid.require'       => '请选择分类',
        'title.require'     => '标题不能为空',
        'sort.require'      => '排序不能为空',
        'price.require'     => '价格不能为空',
        'sku.require'       => '库存不能为空',
        'sku.number'        => '库存必须是数字',
        'views.require'     => '请设置浏览次数',
        'img.require'       => '请上传图片',
        'intru.require'     => '商品简介不能为空',
        'content.require'   => '商品内容不能为空',
    ];
}
