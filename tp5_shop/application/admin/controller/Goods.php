<?php

namespace app\admin\controller;

use think\Request;
use think\Controller;
use app\admin\model\GoodsModel;
use app\admin\model\CategoryModel;
use app\admin\validate\GoodsValidate;

class Goods extends Base
{
    /**
     * 显示资源列表
     */
    public function index()
    {
        $db = new GoodsModel();
        $list = $db->paginate(5);
        $this->assign('list', $list);
        $this->assign('total', $list->total());
        return $this->fetch();
    }

    /**
     * 显示创建资源表单页.
     */
    public function create()
    {
        $cate = new CategoryModel();
        $list = $cate->field('id,title')->select();
        $this->assign('list', $list);
        return $this->fetch();
    }

    /**
     * 保存新建的资源
     */
    public function save(Request $request)
    {
        $data = $request->param();
        $validate = new GoodsValidate();
        if(!$validate->check($data))
        {
            return ['code' => 0, 'msg' => $validate->geterror()];
        }
        $db = new GoodsModel();
        $res = $db->_update($data);
        if ($res)
        {
            return ['code' => 1, 'msg' => '操作成功'];
        }
        else
        {
            return ['code' => 0, 'msg' => '操作失败'];
        }
    }

    /**
     * 显示编辑资源表单页
     */
    public function edit(Request $request)
    {
        $cate = new CategoryModel();
        $list = $cate->field(['id','title'])->select();;
        $this->assign('list', $list);
        $id = $request->param('id');
        $db = new GoodsModel();
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
        $id = $request->param('id');
        $db = new GoodsModel();
        $info = $db->where('id', $id)->find();
        $this->assign('info',$info);
        return $this->fetch();
    }

    /**
     * 删除指定资源
      */
    public function delete(Request $request)
    {
        $id = $request->param('id');
        $db = new GoodsModel();
        $res = $db->where('id', $id)->delete();
        if ($res)
        {
            return ['code' => 1, 'msg' => '操作成功'];
        }
        else
        {
            return ['code' => 0, 'msg' => '操作失败'];
        }
    }
}
