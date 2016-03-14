<?php
namespace Admin\Controller;
use Think\Controller;
class GoodsController extends Controller {
    public function lists(){
        $goods_list = D('Goods')->goodsLists();
        $this->assign('goods_list',$goods_list);
        $this->display();
    }
    
    //商品新增 
    public function add(){
        if(IS_POST){
            $data = array();
            $data['title'] = I("title",'');
            $data['price'] = I("price",0,'float');
            $data['create_time'] = time();
            $data['update_time'] = time();

            D("Goods")->addGoods($data);
            header("Location:".U("Goods/lists"));
            
        }else{
        $this->display();
        }
    }
    
    
    
    
    
    
    
    
    
    
    
}


