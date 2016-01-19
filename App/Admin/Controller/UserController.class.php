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
    public function edit(){
        if(IS_POST){
           $data = array();
           $data['uname'] = I("uname",'');  //post 提交
           $data['upwd'] = I("upwd",'');    //post 提交
           $uid = I("get.id",0,"int");
           M("user")->where("id = {$uid}")->save($data);
           header("Location:".U('User/lists'));
           
        }else{
           $uid = I("id",0,"int");
           $user_info = M('User')->where("id = $uid")->find();
           $this->assign("user_info",$user_info);
           $this->display();
           //var_dump($user_info);
        }
    }
    
    public function delete(){
        $uid = I("id",'',"int");
        $user_info = M('User')->where("id = {$uid}")->delete();
         //header("Location:".U('User/delete'));
        if($user_info){
            $this->success("删除成功",U('User/lists'));
        }else{
             $this->error("删除失败");
        }
       
    }
   
    public function add(){
        $this->display();
    }
    
    
    
    
    
    
    
    
    
    
}
 