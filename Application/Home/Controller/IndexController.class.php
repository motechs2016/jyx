<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
      echo '111'; 
       $this->display();
    }
}
