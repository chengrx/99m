<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>register</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <script src="/99m/Public/static/jquery-1.11.3.min.js"></script>
    </head>
    <body>
        <p id="notice"></p>
            <form id="register_form" action="<?php echo U('Home/User/register');?>" method="post">
                <p>用户名:&nbsp;<input type="text" id="username" name="username"/></p>
                <p>密&nbsp;码:&nbsp;<input type="password" id="pwd" name="pwd"/></p>
                <p>确认密码：<input type="password" id="pwd_confirm" name="pwd_confirm"/></p>
                <input type="button" id='btn' value="提交注册"/>
            </form>
        <script>
            $(function(){
                //---注册---------------------------------
                 $('#btn').click(function(){  
                     var $uname = $('#username').val();                          //console.log()调试没有弹窗干扰，F12可以查看， alert() 有弹窗，不友好
                     console.log($uname);
                     var $pwd = $('#pwd').val();
                     console.log($pwd);
                     var $pwd_confirm = $('#pwd_confirm').val();
                     var $action = $('#register_form').attr('action');
                      //$.post(URL,data, callback());                            URL:规定把请求发送到哪个URL页面， data:连同请求一起发送到服务器的数据；
                                                                                     //callback(): 发送的请求成功时返回的回调函数, 即：得到服务器 控制器返回的值. 
                     $.post($action,{username:$uname,pwd:$pwd,pwd_confirm:$pwd_confirm},function(data){
                         console.log(data);
                         //$('#notice').html(data);
                     });
      
            });
            
            
            });
 
        </script>
        
        
        
        
        
        
        
        
    </body>
</html>