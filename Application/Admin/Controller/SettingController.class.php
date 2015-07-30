<?php
namespace Admin\Controller;
use Think\Controller;
class SettingController extends Controller {
    public function index()
    {

      $model = M("setting");
      $data = $model->select();
      $this->assign('data',$data);
      $this->display();
    }
    /**
    *更新系统变量
    */
    public function update()
    {
    	$dataArr = I();
    	$model = M("setting");

    	foreach ($dataArr as $key => $value) {
    		$model->where("varname='$key'")->setField('varvalue',$value);
    	}
    	$this->success('更新成功');
    }
    /**
    *添加系统变量
    */
    public function add()
    {
    	$model = M("setting");

    	$data['varname'] = 111;
    	$model->add($data);
    }
}