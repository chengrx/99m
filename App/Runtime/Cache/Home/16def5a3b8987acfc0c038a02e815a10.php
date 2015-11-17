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
               width: 980px;
               height:auto;
               background: #fff;
               border: 4px #efefef solid;
               border-radius: 5px;
               overflow: hidden;
               padding-bottom: 10px;
               position: relative;
               margin:10px auto;
            }

            .login_wrap .login_wrapL {
               float: left;
               margin:10px 0;
               width: 470px;
               height: 430px;
               //border: 1px solid red;
            }
            .login_wrap .login_wrapL .slide_box {
                width: 468px;
                height: 420px;
                overflow: hidden;
                position: relative;
            }
            .slide_box .bd {
                position: relative;
                height: 100%;
            }
             .login_wrap .login_wrapR {
               float:right;
               margin:10px 0;
               width: 420px;
               height: 430px;
               //border: 1px solid black;
               margin-right: 10px;
               font: 16px/1.5 Arial,Verdana,"宋体";
               line-height: 150%;
            }
            .login_wrap .login_wrapR span {
                height: 24px;
                font-weight: bold;
                display: inline-block;
                font-family: '微软雅黑';
                font-size: 16px;
                padding: 10px 0px 10px 10px;
            }
            .login_wrap .login_wrapR .login_box {
                background: #fff;
                //border: 1px solid red;
                widows: 390px;
                height: auto;
                padding: 0;
                border-top: 3px solid #333333;
            }
            .login_wrap .login_wrapR .login_box .username{
                height: 25px;
                width: 250px;
                color: #ff3333;
            }
             .login_wrap .login_wrapR .login_box .userpwd {
                height: 25px;
                width: 250px;
                color: #ff3333;
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
                  <div class="login_box">
                   <form class="login" action="<?php echo U('Home/User/login');?>" method="post">
                       <p id="account_tip" class="error"></p>  
                       <p class="user_text">
                           <input type="text" name="username" id="username" class="username" placeholder="邮箱/用户名/手机号"/>
                           <i class="userico"></i>
                       </p>
                       <p id="account_tip" class="error"></p> 
                       <p class="user_text">
                           <input type="password" name="pwd" id="pwd" class="userpwd" placeholder="密码"/>
                           <i class="userico"></i>
                     </p>
                     <input type="button" value="登 录" id="toLogin" style="width:80px;">
                     &nbsp;&nbsp;<a href='register.html'>注 册</a>
                 </form>
                      <p id="login_info" style="color:red;"></p>
                  </div>
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
                        console.log(data);
                        $('#login_info').html(data.info);
                    });
                });
                
        //登录左侧轮播图    
	$(".slideBox").slide({
            titCell:".hd ul", mainCell:".bd ul", effect:"fold", autoPage:true, autoPlay:true, trigger:"click"});
		
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