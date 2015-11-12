<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>userIndex</title> 
        <meta name="viewport" content="width=device-width">
        <script src="/99m/Public/static/jquery-1.11.3.min.js"></script>
    </head>
    <body>
        <p id="notice"></p>
        <div class="login_panel">
            <form id="login" action="<?php echo U('Home/User/login');?>" method="post">
                <p>用户名：<input type="text" name="username" id="username"/></p>
                <p>密 &nbsp;码：<input type="password" name="pwd" id="pwd"/></p>
                <input type="button" id="to_login" value="登录"/>
                <a href="<?php echo U('Home/User/register');?>">注册</a>
            </form>
        </div>
        <script>
            $(function(){
                $('#to_login').click(function(){
                    var $username = $('#username').val();
                    console.log($username);
                    var $pwd = $('#pwd').val();
                    console.log($pwd);
                    var $action = $('#login').attr('action');
                    console.log($action);
                    $.post($action, {username:$username,pwd:$pwd}, function(data){
                        //$('#notice').html(data.info);
                        console.log(data);
                    });
                });
            })
        </script>
        
        
    </body>
</html>