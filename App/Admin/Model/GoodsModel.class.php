<?php
namespace Admin\Model;
use Think\Model;
class GoodsModel extends Model {
    public function addGoods($data){
     if($_POST['title']==''){
         exit("title can not be NULL");
     }
     if(!$_POST['price']>0){
         exit("price must be over zero");
     }
     return $this->add($data);        //增加商品 
    }
    public function goodsLists(){
        return $this->select();      //展示商品列表
    }
    
}

