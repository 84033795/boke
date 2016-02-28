<?php /* Smarty version Smarty-3.1.6, created on 2016-02-28 22:27:48
         compiled from "E:/cwy/Admin/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:3037656d303e479a9d7-40619579%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ce2761a39edcb9c0306a4119d7579f3e62d7d34' => 
    array (
      0 => 'E:/cwy/Admin/View\\Index\\index.html',
      1 => 1456385961,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3037656d303e479a9d7-40619579',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56d303e4a4b5a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d303e4a4b5a')) {function content_56d303e4a4b5a($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>波仔网站管理系统</title>
<link href="<?php echo @ADMIN_CSS_URL;?>
metinfo.css" rel="stylesheet" />
</head>
<script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
jQuery1.7.2.js"></script>
<body>
<div id="metcmsbox">
<div id="top"> 
    <div class="floatr">
	  <div class="top-r-box">
		<div class="top-right-boxr">
			<div class="top-r-t">
				<a href="#" id="mydata" class='tui' style="text-decoration:underline;">您好 <?php echo $_SESSION['web_uname'];?>
</a><span>-</span>
                <a target="_top" href="<?php echo @__MODULE__;?>
/Login/logout" id="outhome" title="退出" class='tui'>退出</a>
			</div>
		</div>
		<div class="nav">
          <ul id="topnav">
            <li id="metnav_1" class="list"><a href="javascript:;" id="nav_1" class="onnav" hidefocus="true"><span class="c1"></span>系统设置</a></li>
<!--            <li id="metnav_2" class="list"><a href="javascript:;" id="nav_2"  hidefocus="true"><span class="c2"></span>界面风格</a></li>
-->           
			<li id="metnav_3" class="list"><a href="javascript:;" id="nav_3"  hidefocus="true"><span class="c3"></span>栏目配置</a></li>
            <li id="metnav_4" class="list" style="display:none;"><a href="javascript:;" id="nav_4"  hidefocus="true"><span class="c4"></span>模型管理</a></li>
<!--            <li id="metnav_5" class="list"><a href="javascript:;" id="nav_5"  hidefocus="true"><span class="c5"></span>优化推广</a></li>
            <li id="metnav_6" class="list"><a href="javascript:;" id="nav_6"  hidefocus="true"><span class="c6"></span>企业应用</a></li>
-->            <li id="metnav_7" class="list"><a href="javascript:;" id="nav_7"  hidefocus="true"><span class="c7"></span>会员管理</a></li>
          </ul>
		</div>
	  </div>
    </div>
    <div class="floatl">
	    <a href="#" hidefocus="true" id="met_logo"><img src="<?php echo @ADMIN_IMG_URL;?>
logo.png"/></a>
	</div>
</div>
<div id="content">
    <div class="floatl" id="metleft">
        <div class="fast">
	        <a  href="<?php echo @__ROOT__;?>
" id="qthome" title="网站首页">网站首页</a>
			<span></span>
			<a href="<?php echo @__ROOT__;?>
" id="hthome" title="后台首页">后台首页</a>
		</div>
	    <div class="nav_list" id="leftnav">
            <ul  id="ul_1">
                <li ><a href="<?php echo @__MODULE__;?>
/System/home.html" target='main' id='nav_1_8' class="on" title="系统信息" hidefocus="true">系统信息</a></li>
                <li ><a href="<?php echo @__MODULE__;?>
/System/info.html" target='main' id='nav_1_9' title="基本设置" hidefocus="true">基本设置</a></li>
                <li ><a href="<?php echo @__MODULE__;?>
/System/link.html" target='main' id='nav_1_8' title="友情链接" hidefocus="true">友情链接</a></li>
                <li ><a href="<?php echo @__MODULE__;?>
/System/ads.html" target='main' id='nav_1_9' title="站内广告" hidefocus="true">站内广告</a></li>
                <!--
                <li ><a href="/cwy/index.php/Admin/System/database.html" target='main' id='nav_1_10' title="数据库操作" hidefocus="true">数据库操作</a></li>
                <li ><a href="/cwy/index.php/Admin/System/mark.html" target='main' id='nav_1_11' title="水印设置" hidefocus="true">水印设置</a></li>
                <li ><a href="/cwy/index.php/Admin/System/diary.html" target='main' id='nav_1_12' title="后台操作日志" hidefocus="true">后台操作日志</a></li>
                -->
            </ul>

<!--            
			<ul style="display:none;" id="ul_2">
                <li ><a href="1.html" target='main' id='nav_2_18' title="模板风格" hidefocus="true">模板风格</a></li>
                <li ><a href="1.html" target='main' id='nav_2_19' title="首页设置" hidefocus="true">首页设置</a></li>
                <li ><a href="1.html" target='main' id='nav_2_20' title="列表页设置" hidefocus="true">列表页设置</a></li>
                <li ><a href="1.html" target='main' id='nav_2_21' title="内容页设置" hidefocus="true">内容页设置</a></li>
                <li ><a href="1.html" target='main' id='nav_2_22' title="Flash设置" hidefocus="true">Flash设置</a></li>
               
            </ul>
-->
            <ul style="display:none;" id="ul_3">
                <li ><a href="<?php echo @__MODULE__;?>
/document/adddocument.html" target='main' id='nav_3_28' title="添加文章" hidefocus="true">添加文章</a></li>
                <li ><a href="<?php echo @__MODULE__;?>
/column/showlist.html" target='main' id='nav_3_25' title="栏目配置" hidefocus="true">栏目配置</a></li>
                <li ><a href="<?php echo @__MODULE__;?>
/column/dshowlist.html" target='main' id='nav_3_26' title="文章列表" hidefocus="true">文章列表</a></li>
                <li ><a href="<?php echo @__MODULE__;?>
/column/recycle.html" target='main' id='nav_3_27' title="文章回收站" hidefocus="true">文章回收站</a></li>
            </ul>

            <ul style="display:none;" id="ul_4">
                <li ><a href="<?php echo @__MODULE__;?>
/model/model.html" target='main' id='nav_4_29' title="内容管理" hidefocus="true">内容模型管理</a></li>
            </ul>
<!--
            <ul style="display:none;" id="ul_5">
                <li ><a href="1.html" target='main' id='nav_5_34' title="访问统计" hidefocus="true">访问统计</a></li>
                <li ><a href="1.html" target='main' id='nav_5_35' title="静态页面设置" hidefocus="true">静态页面设置</a></li>
                <li ><a href="1.html" target='main' id='nav_5_36' title="网站地图设置" hidefocus="true">网站地图设置</a></li>
                <li ><a href="1.html" target='main' id='nav_5_37' title="SEO参数设置" hidefocus="true">SEO参数设置</a></li>
                <li ><a href="1.html" target='main' id='nav_5_38' title="热门标签" hidefocus="true">热门标签</a></li>
                <li ><a href="1.html" target='main' id='nav_5_39' title="友情链接" hidefocus="true">友情链接</a></li>
                <li ><a href="1.html" target='main' id='nav_5_55' title="站内广告" hidefocus="true">站内广告</a></li>
            </ul>
			
-->         
<ul style="display:none;" id="ul_7">
                <li ><a href="<?php echo @__MODULE__;?>
/members/showlist.html" target='main' id='nav_7_45' title="会员注册列表" hidefocus="true">管理员列表</a></li>
                <li ><a href="<?php echo @__MODULE__;?>
/members/add.html" target='main' id='nav_7_49' title="会员级别设置" hidefocus="true">添加管理员</a></li>
				<!--
                <li ><a href="1.html" target='main' id='nav_7_46' title="会员子站管理" hidefocus="true">会员子站管理</a></li>
                <li ><a href="1.html" target='main' id='nav_7_46' title="企业好评管理" hidefocus="true">企业好评管理</a></li>
                <li ><a href="1.html" target='main' id='nav_7_46' title="企业差评管理" hidefocus="true">企业差评管理</a></li>
                <li ><a href="1.html" target='main' id='nav_7_46' title="企业中评管理" hidefocus="true">企业中评管理</a></li>
				-->
            </ul>
		</div>
    	<div class="left_footer">by:波仔<a href="#" target="_blank">版权所有</a></div>
		
	</div>
    <div class="floatr" id="metright">
        <div class="iframe">
            <div class="min"><iframe height="670" width="100%" scrolling="auto" frameborder="0" id="main" name="main" src="<?php echo @__MODULE__;?>
/System/home.html" scrolling="no"></iframe></div>
        </div>
    </div>
	</div>
</div>
<script src="<?php echo @ADMIN_JS_URL;?>
metinfo.js" type="text/javascript"></script>
</body>
</html>
<?php }} ?>