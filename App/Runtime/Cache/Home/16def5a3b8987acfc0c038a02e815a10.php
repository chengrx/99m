<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta http-equiv="content-type" type="text/html" charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <script src="/99m1/Public/static/jquery-1.11.3.min.js"></script>
    </head>
    <body>
       <p id="login_info"></p>
       
            <form class="login" action="<?php echo U('Home/User/login');?>" method="post">
                <p>用户名：<input type="text" name="username" id="username"/></p>
                <p>密 &nbsp;码：<input type="password" name="pwd" id="pwd"/></p>
                <input type="button" value="登录" id="toLogin">
                
            </form>
        
           <script>
            $(function(){
                $('#toLogin').click(function(){
                    //var username = $('#username').val();
                    //var pwd = $('#pwd').val();
                    var action = $('.login').attr('action');
                    //console.log(username);
                    //console.log(pwd);
                    console.log(action);
                    var formatarr = $('.login').serialize();
                    console.log(formatarr);
                    $.post(action,formatarr,function(data){
                        console.log(data);
                        $('#login_info').html(data.info);
                    });
                });
            });
        </script>
    </body>
</html>