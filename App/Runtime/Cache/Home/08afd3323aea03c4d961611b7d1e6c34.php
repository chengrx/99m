<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>register</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <script src="/99m/Public/static/jquery-1.11.3.min.js"></script>
        <link rel="stylesheet" type="text/css" href="/99m/Public/css/user.css"/>
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
               <div class="slide_box">
                   <div class="bd">
                       <ul style="position:relative;width: 468px;height:0px;">
                           <li style="position:absolute;width: 468px;left: 0px;top:0px;display: none;">
                               <a href="" target="_blank"><img src="/99m/Public/img/user/login_01.gif"/></a>
                            </li>
                           <li style="position:absolute;width: 468px;left:0px;top: 0px;display: list-tiem;">
                            <img src="/99m/Public/img/user/login_02.gif"/></li>
                           </li>
                       </ul>
                    </div>
                   <div class="hd">
                       <ul>
                           <li class="on"></li>
                           <li class="2"></li>
                       </ul>
                   </div>
               </div>
            </div>
            <div class="login_wrapR"> 
                  <!--右侧-->
                  <span>如有账号，请登录</span>
                  <div class="register_box">
                   <form class="register" id="register_form" action="<?php echo U('Home/User/register');?>" method="post">
                       <p id="account_tip" class="error"></p>  
                       <p class="user_text">
                           用户名：&nbsp;&nbsp;&nbsp;<input type="text" name="username" id="username" class="username" placeholder="邮箱/用户名/手机号"/>
                           <i class="userico"></i>
                       </p>
                       <p id="account_tip" class="error"></p> 
                       <p class="user_text">
                           密 &nbsp;码：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="pwd" id="pwd" class="userpwd" placeholder="密码"/>
                           <i class="userico"></i>
                     </p>
                      <p class="user_text">
                           确认密码：<input type="password" name="confirm_pwd" id="pwd_confirm" class="userpwd" placeholder="确认密码"/>
                           <i class="userico"></i>
                     </p>
                     <input type="button" value="注 册" id="to_register" style="width:80px;">
                     &nbsp;&nbsp;<a href='login.html'>登 录</a>
                 </form>
                      <p id="register_info" style="color:red;"></p>
                  </div>
             </div> 
          
       </div>

        <!--
        <p id="notice"></p>
        <form id="register_form" action="<?php echo U('Home/User/register');?>" method="post">
                <p>用户名:&nbsp;<input type="text" id="username" name="username"/></p>
                <p>密&nbsp;码:&nbsp;<input type="password" id="pwd" name="pwd"/></p>
                <p>确认密码：<input type="password" id="pwd_confirm" name="pwd_confirm"/></p>
                <input type="button" id="btn" value="提交注册"/>
                <a href='login.html'>登录</a>
            </form>
        -->
        <script>
            $(function(){
                $('#to_register').click(function(){
                    var $uname = $('#username').val();
                    console.log($uname);
                    var $upwd = $('#pwd').val();
                    console.log($upwd);
                    var $pwd_confirm = $('#pwd_confirm').val();
                    console.log($pwd_confirm);
                    var $action = $('#register_form').attr('action');
                    $.post($action,{uname:$uname, upwd:$upwd, pwd_confirm:$pwd_confirm},function(data){
                        console.log(data);
                        //$('#notice').html(data.info);
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