<?php
// +----------------------------------------------------------------------
// | 就要学-在线教育平台 [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.hzmjw.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: Majw <Majw998@gmail.com>
// +----------------------------------------------------------------------
namespace Home\Controller;
use Think\Controller;
/**
 *前台公共控制
 *为防止多分组Controller名称冲突，公共Controller名称统一使用分组名称
 */
class HomeController extends Controller{

	/* 空操作，用于输出404页面 */
	public function _empty(){
		$this->redirect('Index/index');
	}
	protected function _initialize(){
		$config = api('Config/lists');
		C($config);//添加配置
		if(!C('cfg_webswitch')){
			$this->error('站点已经关闭，请稍后访问');
		}
	}


}