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
                <input type="button" id="btn" value="提交注册"/>
            </form>
        <script>
            $(function(){
                $('#btn').click(function(){
                    var $uname = $('#username').val();
                    var $pwd = $('#pwd').val();
                    var $pwd_confirm = $('#pwd_confirm').val();
                    var $action = $('#register_form').attr('action');
                    $.post($action,{username:$uname, pwd:$pwd, pwd_confirm:$pwd_confirm},function(data){
                        //console.log(data);
                        $('#notice').html(data.info);
                    });
                });
            });
        </script>
        
        
        
        
        
        
        
        
    </body>
</html>