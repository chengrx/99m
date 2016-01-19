<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>后台管理系统</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" type="text/css" href='/99m/Public/static/bootstrap/css/bootstrap.css'/>
        <link rel="stylesheet" type='text/css' href='/99m/Public/css/admin.css'/>
    </head>
    <body>
         <div class="container-fluid header">
    
           <div class='row'>
             <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">99M</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/Admin/User/index.html">会员 </a></li>
        <li><a href="<?php echo U('Goods/lists');?>">商品</a></li>
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
            Lists 
            <span class="caret"></span>
        </a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">status</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">admin <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
           </div>
            
        </div>
    
    <div class="container-fluid">
        <div class="row">
            <div class="pull-left col-md-3 left">
                 
                        <h4>菜单功能区</h4>
                   <div class="list-group">
                       <ul><a href="" class="list-group-item active" >
                         会员管理
                           </a>
                           <li style="list-style: none"><a href="" class="list-group-item" >会员列表</a></li>
                           <li style="list-style: none"><a href="" class="list-group-item">新增会员</a></li>
                       </ul>
                    </div>
                
            </div>
            <div class="pull-right col-md-9 right">
                  
            <form role="form" action="<?php echo U('User/edit',array('id' => $user_info['id']));?>" method='post'>
                <div class="form-group">
                    <label for='exampleInputEmail1'>用户名</label>
                    <input name="uname" type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo ($user_info["uname"]); ?>"/>
                </div>
                <div class="form-group">
                    <label for='exampleInputPassword1'>密码</label>
                    <input name="upwd" type="password" class="form-control" id="exampleInputPassword1" placeholder="密码" value=""/>
                </div>
                <button type="submit" class="btn btn-default">修改</button>
            </form>
        
            </div>
        </div>
      </div>
            
    
        <div class='container-fluid footer'>
        底部版权信息
         </div>
    </body>
</html>