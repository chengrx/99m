<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta name="viewport" content="width=device-width">
        <script src="/99m/Public/static/jquery-1.11.3.min.js"></script>
        <style type="text/css">
            body,background,html {
                padding: 0;
                margin: 0;
            }
            .login_wrap {
                width: 100%;
                height:500px;
                background-color: pink;
                 border: 1px solid green;
               
            }

            .login_wrap .login_wrapL {
               float:left;
               margin:10px 0;
               width: 470px;
               height: 430px;
               border: 1px solid red;
              
               
            }
             .login_wrap .login_wrapR {
               float:right;
               margin:10px 0;
               width: 450px;
               height: 430px;
               border: 1px solid black;
               margin-right: 50px;
            }
            
            
        </style>
    </head>
    <body>
        <!DOCTYPE html>
<html>
<head> 
<title></title>
    <link type="text/css" rel="stylesheet" href="/99m/Public/css/user.css"/>
 
</head>
<body>
    <div class="login_header">
        <div class="header_c">
            <div class="login_log"><img src='/99m/Public/img/user/logo.png'/></div>
            <div class="login_phone"><span>网购热线：<b>4007-222-222</b></span></div>
        </div>
    </div>
</body>
</html>
      
       <div class="login_wrap">
           <div class="login_wrapL">
                    <!--左侧图片-->
               <img src="/99m/Public/img/user/login_01.gif"/>
            </div>
            <div class="login_wrapR"> 
                  <!--右侧-->
                   <p id="login_info">dddddddddddd</p>
                   <form class="login" action="<?php echo U('Home/User/login');?>" method="post">
                     <p>用户名：<input type="text" name="username" id="username"/></p>
                     <p>密 &nbsp;码：<input type="password" name="pwd" id="pwd"/></p>
                     <input type="button" value="登录" id="toLogin">
                     <a href='register.html'>注册</a>
                 </form>
             </div> 
          
       </div>
           
           
           
           
           <script>
            $(function(){
                $('#toLogin').click(function(){
                    //var username = $('#username').val();
                    //var pwd = $('#pwd').val();
                    var action = $('.login').attr('action');
                    //console.log(username);
                    //console.log(pwd);
                    //console.log(action);
                    var formatarr = $('.login').serialize();
                   // console.log(formatarr);
                    $.post(action,formatarr,function(data){
                        //console.log(data);
                        $('#login_info').html(data.info);
                    });
                });
            });
        </script>
        <!DOCTYPE html>

<footer>
    <link type='text/css' rel="stylesheet" src='/99m/Public/css/user.css'/> 
    <div class='login_footer'>
        <div class="footer_c">
            <p>Copyright 2012-2014 www.99mi.com All Rights Reserved 京ICP备13035787号</p>
            <div class="footer_link">
                <a href="" id='tag'><img src='/99m/Public/img/user/zj_01.jpg'/></a>
                <a href="" id='tag'><img src='/99m/Public/img/user/zj_02.jpg'/></a>
                <a href="" id='tag'><img src='/99m/Public/img/user/zj_03.jpg'/></a>
                <a href="" id='tag'><img src='/99m/Public/img/user/zj_04.jpg'/></a>
                <a href="" id='tag'><img src='/99m/Public/img/user/zj_05.jpg' style="height:46px; "/></a>
            </div>
        </div>
    </div>
</footer>

    </body>
</html>