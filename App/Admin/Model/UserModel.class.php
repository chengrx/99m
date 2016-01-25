<?php
namespace Admin\Model;
use Think\Model;
class UserModel extends Model {
    public function getUserlist(){
        $data = $this->order('last_time DESC')->page($_GET['p'],5)->select();     //当前页码与每页显示数
        $count = $this->count();                                                  // 符合查询条件总记录
        $Page = new \Think\Page($count, 5);                                       // 记录总数，与每页显示数
        $show = $Page->show();
        
        return array("lists"=>$data,"page"=>$show);
    }
    public function addUser($data){
       $data_arr = array();
       
      //if(count($this->where("uname='{$data['uname']}'")->select())>0){
          return "您添加的会员名称已经存在，请换一个试试";
      //}
        // $data['upwd'] = md5($data['upwd']); //加密

            //---数据入库--------------------------
           $data_arr['uname'] = $data['uname'];
           $data_arr['upwd'] = $data['upwd'];
           $data_arr['ip'] = $_SERVER['REMOTE_ADDR'];
           $data_arr['last_time'] = time();
           
            if(($this->add($data_arr))>0){
                 return '恭喜添加会员成功';
            }else{
                return '添加会员失败';
            }
           
           
    }
    
    
    
    
    
    
}
