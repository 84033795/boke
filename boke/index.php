<?php
    header("Content-type:text/html;charset=utf-8");

    //开启 开发调试模式
    define('APP_DEBUG', true);
    
    //全局 静态常量
    define('SITE_URL', 'http://www.cwy.com:81/');//域名
    
    //给 前台 静态文件定义常量
    define('CSS_URL', '/Home/Public/css/');
    define('JS_URL',  '/Home/Public/js/');
    define('IMG_URL', '/Home/Public/images/');
    define('PIC_URL', '/Home/Public/picture/');
    //前台瀑布流定义常量
    define('PET_CSS_URL', '/Home/View/Pet/css/');
    define('PET_JS_URL', '/Home/View/Pet/js/');
    define('PET_IMG_URL', '/Home/View/Pet/img/');
    //后台静态常量
    define('ADMIN_CSS_URL', '/Admin/Public/css/');
    define('ADMIN_JS_URL',  '/Admin/Public/js/');
    define('ADMIN_IMG_URL', '/Admin/Public/images/');
    define('MOREN', '/index.php/Admin/Index');
    
    include "./ThinkPHP/ThinkPHP.php";