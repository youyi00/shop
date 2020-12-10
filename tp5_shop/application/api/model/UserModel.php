<?php

namespace app\api\model;

use think\Model;

class UserModel extends Model
{
    protected $table = 'user';

    public function reg($data)
    {
        $data['sattus'] = 1;
        return $this->save($data);
    }
}
