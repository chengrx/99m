<?php
namespace Home\Model;
use Think\Model;

class UserModel extends Model{
    protected $_validate = array(
        array('uname','/^[\w\d]{4,8}$/','用户名为4~8位的数字或英文！'),
        array('upwd','/^[\w\d_]{6,13}$/','密码为6~13位的数字或字母、下划线！'),
    );
    
    public function register($data){
             $info = array();
          //  $pattern_user = "/^[a-zA-Z-_]{4,20}$/";
            // $pattern_pwd = "/^[a-zA-Z0-9]{6,13}$/";
/*
            if(count($this->where("uname='{$data['username']}'")->select())>0){
                 $info = array(
                'status' => 0,
                'info' => "您注册的用户名已经存在，请换一个试试",
            );
                 return $info;
            }
            if($data['pwd']==''){
                $info = array(
                'status' => 0,
                'info' => '密码不得为空',
            );
                return $info;
           }    
            if($data['pwd']!=$data['pwd_confirm']){
               $info = array(
                'status' => 0,
                'info' => '密码输入不一致，请重新输入',
            );
              return $info;
           }
           if(!preg_match($pattern_pwd,$data['pwd'])){
                $info = array(
                   'status' => 0,
                   'info' => '密码格式不正确',
                );
                return $info;  
            }
             if(!preg_match($pattern_user,$data['username'])){
                 $info = array(
                'status' => 0,
                'info' => '用户名格式不正确',
            );
                 return $info;         
            }
 

            $data['pwd'] = md5($data['pwd']); //加密
*/ 
            //---数据入库--------------------------
           $data_arr['uname'] = $data['uname'];
           $data_arr['upwd'] = $data['upwd'];
           $data_arr['ip'] = $_SERVER['REMOTE_ADDR'];
           $data_arr['last_time'] = time();
           
            //$User = D("User"); // 实例化User对象
            if (!$this->create($data_arr,1)){ // 指定新增数据
                 // 如果创建失败 表示验证没有通过 输出错误提示信息
                 exit($this->getError());
            }else{
                 // 验证通过 可以进行其他数据操作
                if($this->add($data_arr)){
                $info = array(
                    'status'=>1,
                    'info'=>'恭喜注册成功',
                );
                return $info;
            }else{
                $info = array(
                    'status'=>0,
                    'info'=>'注册失败',
                );
                return $info;
            }
           
            }
    }
           
/*
            if(($this->add($data_arr))>0){ //var_dump(M('User')->add($data_arr)) 默认返回的是记录的主键值，因为主键值都不为0，只需>0,则添加记录成功
               //return '恭喜注册成功';              // M('User') 换成$this->  效率更高，
                $info = array(
                    'status'=>1,
                    'info'=>'恭喜注册成功',
                );
                return $info;
            }else{
                $info = array(
                    'status'=>0,
                    'info'=>'注册失败',
                );
                return $info;
            }
    }
    */
    
    //--登录验证--------------------------------------
    public function login($username,$pwd){
        
        $info = array();
        if(!$username && !$pwd){
            $info = array(
                'status'=>0,
                'info' =>'用户名和密码不得为空',
            );
              return $info;
              
            }
            if(!$username||!$pwd){
                $info = array(
                    'status'=>0,
                    'info' =>'用户名或者密码为空'
                );
                return $info;
              }

            $pwd = md5($pwd); //加密
            $user_query = $this->where("uname='{$username}' AND upwd = '{$pwd}'")->select(); //提交数据与数据库匹配
            if($user_query){
                 $info = array(
                    'status'=>1,
                    'info' =>'用户登录成功'
                );
                return $info;
            }else{
                 $info = array(
                    'status'=>0,
                    'info' =>'用户名或密码不正确',
                );
                return $info;
            }
            //var_dump($user_info);
             
    }
    
    
    
    
    
    
    
    
}

