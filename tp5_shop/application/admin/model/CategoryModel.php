<?php

namespace app\admin\model;

use think\Model;

class CategoryModel extends Model
{
    protected $table = 'category';

    public function getStatusAttr($value)
    {
        if($value == 1)
        {
            return '启用';
        }
        else
        {
            return '禁用';
        }
    }

    public function _update($data)
    {
        if(isset($data['id']))
        {
            return $this->save($data,['id' => $data['id']]);
        }
        else
        {
            return $this->save($data);
        }
    }   
}
