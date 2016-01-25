<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>userIndex</title>
        <meta http-equiv="content-type" type="text/html" charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <script src="/99m/Public/static/jquery-1.11.3.min.js"></script>
    </head>
    <body>
        <p id="notice"></p>
        <div class="login_panel">
            <form class="login" action="<?php echo U('Home/User/login');?>" method="post">
                <p>用户名：<input type="text" name="username" id="username"/></p>
                <p>密 &nbsp;码：<input type="password" name="pwd" id="pwd"/></p>
               
                <a href="<?php echo U('Home/User/login');?>">注册</a>
            </form>
        </div>
        <script>
            $(function(){
                $('#toLogin').click(function(){
                    var username = $('#username').val();
                    var pwd = $('#pwd').val();
                    var action = $('.login').attr('action');
                    console.log(username);
                    console.log(pwd);
                    console.log(action);
                });
            });
        </script>
        
        
    </body>
</html>