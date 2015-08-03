<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
 
    //登录
    public function index(){
       
       $this->display('login');
    }
}