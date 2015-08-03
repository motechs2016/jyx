<?php
namespace Admin\Controller;
use Think\Controller;
class CourseController extends Controller{
	public function index(){

		$data = D("course")->select();

		$this->assign('data',$data);
		$this->display();
	}

	public function add(){
		
		$this->display('course/edit');
	}
}