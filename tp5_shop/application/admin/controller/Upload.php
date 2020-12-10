<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;

class Upload extends Base
{
    public function upload()
    {

        // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file('file');
        // 移动到框架应用根目录/uploads/ 目录下
        $info = $file->move( './uploads');
        if($info)
        {
            // 成功上传后 获取上传信息
            // 输出 jpg
            // echo $info->getExtension();
            // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
            $path = '/public/uploads/' . $info->getSaveName();
            $path = str_replace('\\','/',$path);
            // echo $info->getSaveName();
            return ['code' => 1,'msg' => '上传成功','url' => $path];
            // 输出 42a79759f284b767dfcb2a0197904287.jpg
            // echo $info->getFilename(); 
        }
        else
        {
            // 上传失败获取错误信息
            // echo $file->getError();
            return ['code' => 1,'msg' => '上传失败'];
        }
    }

}
