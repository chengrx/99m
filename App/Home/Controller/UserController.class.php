<?php
namespace Home\Controller;
use Think\Controller;


class UserController extends Controller {
    public function index() {
        $this->display();
    }
   
    //===注册===============================
   public function register(){
        if(IS_POST){
            $data = I('post.');
            $this->ajaxReturn(D('User')->register($data));
        }else{
        $this->display();
        }
    }

    //====登录验证=======================
    public function login() {
        if(IS_POST){
        $data = I('post.');
        $this->ajaxReturn(D('User')->login($data['username'],$data['pwd']));
        }else{
            $this->display();
        }
    }
    
    
    
    
    
    
    
    
    
    
    
    
}

