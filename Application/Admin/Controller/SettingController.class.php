<?php
namespace Admin\Controller;
use Think\Controller;
class SettingController extends Controller {
    public function index()
    {

      $model = M("setting");
      $data = $model->select();
      //为动态添加的变量分组
      /**
      *基本设置 0  basics
      *附件设置 1  annex
      *性能设置 2  performance
      */
      $vartype = array(
        0=>'basics',
        1=>'annex',
        2=>'performance'
      );

      foreach ($data as $k => $value) {
       // $data[$k]['vartype'] = $vartype[$value['vartype']];
       // $dataArr[] = $vartype[$value['vargroup']];
        //dump($vartype[$value['vargroup']]);
        if($value['vargroup'] == 0){
            $dataArr['1'][] = $value;
        }elseif($value['vargroup'] == 1){
            $dataArr['2'][] = $value;
        }elseif ($value['vargroup'] == 2) {
            $dataArr['3'][] = $value;
        }
      }
      $this->assign('data',$dataArr);
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
    	$model = D("setting");
        $_POST['varname'] = 'cfg_'.$_POST['varname'];
        if($model->create()){
            $model->add();
            $this->success('添加成功');
        }else{
            $this->error($model->getError());
        }
    }
}