<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
    public function index(){
    header("Location:lists");
    }
    public function lists(){
        $user_list = D('User')->getUserlist();
        //var_dump($user_list);
        $this->assign('User_list', $user_list);
        $this->display();
    }
    
    
    
}
 