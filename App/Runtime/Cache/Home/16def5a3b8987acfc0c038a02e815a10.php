<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta name="viewport" content="width=device-width">
        <script src="/99m/Public/static/jquery-1.11.3.min.js"></script>
         <link type='text/css' rel="stylesheet" src='/99m/Public/css/user.css'/>  
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
                    var action = $('.login').attr('action');
                    var formatarr = $('.login').serialize();
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