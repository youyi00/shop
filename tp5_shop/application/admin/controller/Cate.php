<?php

namespace app\admin\controller;

use think\Request;
use think\Controller;
use app\admin\model\CategoryModel;
use app\admin\validate\CateValidate;

class Cate extends Base
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        $db = new CategoryModel();
        $list = $db->paginate(5);
        $this->assign('list', $list);
        $this->assign('total', $list->total());
        return $this->fetch();
    }

    public function create()
    {
        return $this->fetch();
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        $data = $request->param();
        $validate = new CateValidate();
        if(!$validate->check($data))
        {
            return ['code' => 0,'msg' => $validate->getError()];
        }
        $db = new CategoryModel();
        $res = $db->_update($data);
        if($res)
        {
            return ['code' => 1,'msg' => '操作成功'];
        }
        else
        {
            return ['code' => 0,'msg' => '操作失败'];
        }
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit(Request $request)
    {
        $id = $request->param('id');
        $db = new CategoryModel();
        $info = $db->where('id', $id)->find();
        $info["img"] = substr($info["img"], 7);
        $this->assign('info',$info);
        return $this->fetch();
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request)
    {
        
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete(Request $request)
    {
        $id = $request->param('id');
        $db = new CategoryModel();
        $res = $db->where('id',$id)->delete();
        if ($res)
        {
            return ['code' => 1,'msg'=>'删除成功'];
        }
        else
        {
            return ['code' => 0,'msg'=>'删除失败'];
        }
    }
}
