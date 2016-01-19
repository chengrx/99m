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
                <ul><a href="#" class="list-group-item active" >
                  会员管理
                    </a>
                    <li style="list-style: none"><a href="<?php echo U('User/lists');?>" class="list-group-item" >会员列表</a></li>
                    <li style="list-style: none"><a href="<?php echo U('User/add');?>" class="list-group-item">新增会员</a></li>
                </ul>
             </div>
       
            </div>
            <div class="pull-right col-md-9 right">
                  
           <h4>内容显示区</h4>
           <table class="table table-striped table-hover">
               <thead>
                  <th>Uid</th>
                  <th>Uname</th>
                  <th>IP</th>
                  <th>Create-Time</th>
                  <th>Last-Time</th>
                  <th>Operate</th>
               </thead>
               <tbody>
               <?php if(is_array($User_list["lists"])): foreach($User_list["lists"] as $key=>$ul): ?><tr>
                        <td><?php echo ($ul["id"]); ?></td>
                        <td><?php echo ($ul["uname"]); ?></td>
                        <td><?php echo ($ul["ip"]); ?></td>
                        <td><?php echo (date("Y-m-d H:i:s",$ul["create_time"])); ?></td>
                        <td><?php echo (date("Y-m-d H:i:s",$ul["last_time"])); ?></td>
                        <td><a href="<?php echo U('User/edit',array('id'=>$ul['id']));?>">编辑</a>|<a href="<?php echo U('User/delete',array('id'=>$ul['id']));?>">删除</a></td>
                   </tr><?php endforeach; endif; ?>
               </tbody>
                <tfoot>
                  <th colspan="6"><?php echo ($User_list["page"]); ?></th>
                </tfoot>
           </table>
       
            </div>
        </div>
      </div>
            
    
        <div class='container-fluid footer'>
        底部版权信息
         </div>
    </body>
</html>