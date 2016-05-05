<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
	
	public function _initialize(){
		if (!isset($_SESSION['userInfo'])) {
			$this->error('请先登录再进行浏览', U('Login/loginPage'), 1);
		}
	}
	
    public function index(){
        $this->display();
    }
}
