<?php

namespace app\admin\model;

use think\Model;

class GoodsModel extends Model
{
    protected $table = 'goods';

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
