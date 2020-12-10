<?php

namespace app\common\model;

use think\Model;

class CategoryModel extends Model
{
    protected $table = 'category';
    public function getImgAttr($value)
    {
        $domain = config('app.domain');
        return $domain.$value;
    }
}
