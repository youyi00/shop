<?php

namespace app\admin\model;

use think\Model;

class AdminModel extends Model
{
    protected $table = 'admin';

    public function login($data)
    {
        $info = $this->where('username', $data['username'])->find();
        if(!$info)
        {
            return false;
        }

        if($info['password'] != md5($data['password']))
        {
            return false;
        }

        session('aid',$info['id']);
        session('username',$info['username']);

        return true;
    }
}
