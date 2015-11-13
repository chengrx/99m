<?php

?>
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
                        console.log($action);                                                             //callback(): 发送的请求成功时返回的回调函数, 即：得到服务器 控制器返回的值. 
                     $.post($action,{username:$uname,pwd:$pwd,pwd_confirm:$pwd_confirm},function(data){
                         console.log(data);
                         //$('#notice').html(data);
                     });
      
            });
            
            
            });
 
        </script>