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
}
