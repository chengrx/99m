<?php
return array(
	//'配置项'=>'配置值'
    
//数据库配置信息--------------------------------
    'DB_TYPE'=>'mysql',
    'DB_HOST'=>'127.0.0.1',
    'DB_NAME'=>'99m',
    'DB_USER'=>'root',
    'DB_PWD'=>'',
    'DB_PORT'=>3306,
    'DB_PREFIX'=>'tp_',
    'DB_CHARSET'=>'utf8',
    'DB_DEBUG'=>true,
    
    
//一些常量的定义(方便在前端引用)----------------------
'TMPL_PARSE_STRING'=>array(
    '__STATIC__' =>__ROOT__.'/Public/static',
    '__IMG__'    =>__ROOT__.'/Public/img',
    '__JS__'     =>__ROOT__.'/Public/js',
    '__CSS__'    =>__ROOT__.'/Public/css',
),    
    
    
    
    
    
    
    
    
    
    
    
);