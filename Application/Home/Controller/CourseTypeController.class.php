<?php
namespace Home\Controller;
use Think\Controller;

class CourseTypeController extends Controller{ 
	public function index(){ 
		$model = M('course_type');
		$data = $model->select();
		$this->assign('model',$data);
		$this->display();
	}
}



?>