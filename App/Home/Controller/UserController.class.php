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
            
         // $this->ajaxReturn(D('User')->register($data['username'],$data['pwd'],$data['pwd_confirm']));
          $this->ajaxReturn(D('User')->register($data));

        }else{
        $this->display();
        }
    }

    //====登录验证=======================
    public function login() {
       if(IS_POST){
        $data = I('post.');
        $username = $data['username'];
        $pwd = $data['pwd'];
        $this->ajaxReturn(D('User')->login($username,$pwd)); 
       
    }else{
       $this->display();
    }
     
    } 

    
    
    
    
    
    }

