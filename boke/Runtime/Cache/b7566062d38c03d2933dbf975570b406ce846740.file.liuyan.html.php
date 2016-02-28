<?php /* Smarty version Smarty-3.1.6, created on 2016-02-28 22:19:50
         compiled from "E:/cwy/Home/View\Liuyan\liuyan.html" */ ?>
<?php /*%%SmartyHeaderCode:2832356d2e27a255640-16399875%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7566062d38c03d2933dbf975570b406ce846740' => 
    array (
      0 => 'E:/cwy/Home/View\\Liuyan\\liuyan.html',
      1 => 1456661515,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2832356d2e27a255640-16399875',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56d2e27b05cd1',
  'variables' => 
  array (
    'showLink' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d2e27b05cd1')) {function content_56d2e27b05cd1($_smarty_tpl) {?>﻿<!DOCTYPE html>
<html lang="zh-cn">
	<head>
		<title>波仔博客</title>
		<meta property="qc:admins" content="020436547764116211647676375636" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo @CSS_URL;?>
pintuer.css">
		<link rel="stylesheet" href="<?php echo @CSS_URL;?>
my.css">
		<link rel="stylesheet" href="<?php echo @CSS_URL;?>
page_css.css">
		<link rel="stylesheet" href="<?php echo @CSS_URL;?>
gotop.css" />
		<script src="<?php echo @JS_URL;?>
jquery.js"></script>
		<script src="<?php echo @JS_URL;?>
pintuer.js"></script>
		<script src="<?php echo @JS_URL;?>
respond.js"></script>
		<script type="text/javascript" src="<?php echo @JS_URL;?>
gotop.js"></script>
	</head>
	<body>
		<div class="demo-nav padding-big-top fixed">
			<div class="container padding-top padding-bottom">
				<div class="line">
					<div class="xl12 xs3 xm3 xb2">
						<button class="button icon-navicon float-right" data-target="#header-demo"></button>
						<a href="#"><img src="<?php echo @IMG_URL;?>
logo.png" class="ring-hover" /></a>
					</div>
					<div class=" xl12 xs9 xm9 xb10 nav-navicon" id="header-demo">
						<div class="xs8 xm6 xb8 padding-small">
							<ul class="nav nav-menu nav-inline nav-big">
								<li><a href="<?php echo @__MODULE__;?>
/index/index">首页</a>
								<li>
									<a href="#">分类<span class="arrow"></span></a>
									<ul class="drop-menu">
										<li><a href="#">分类一</a></li>
										<li><a href="#">分类二</a></li>
										<li><a href="#">分类三</a></li>
										<li><a href="#">分类四</a></li>
										<li><a href="#">分类五</a></li>
									</ul>
								</li>
								<li><a href="<?php echo @__MODULE__;?>
/said/said">说说</a></li>
								<li><a href="<?php echo @__MODULE__;?>
/liuyan/liuyan">留言板</a></li>
								<li><a href="#">访客</a></li>
								<li><a href="#">关于我</a></li>
							</ul>
						</div>
						<div class="xs4 xm3 xb4">
							<form>
								<div class="input-group padding-little-top">
									<input type="text" class="input border-main" name="keywords" size="30" placeholder="请输入关键词" />
									<span class="addbtn"><button type="button" class="button bg-main icon-search"></button></span>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--banner-->
		<div class="banner">
			<div class="carousel">
				<div class="item"><img src="<?php echo @IMG_URL;?>
banner1.jpg" width="100%" height="300px" /></div>
				<div class="item"><img src="<?php echo @IMG_URL;?>
banner2.jpg" width="100%" height="300px" /></div>
				<div class="item"><img src="<?php echo @IMG_URL;?>
banner3.jpg" width="100%" height="300px" /></div>
			</div>
		</div>
		<br />
		<div class="container">
			<div class="">
				<ul class="bread">
					<h4>
					<li><a href="#" class="icon-home"> 首页</a> </li>					
					<li><a href="#">留言板</a></li>
					</h4>
				</ul>
			</div>
			<div class="line-big">
				<div class="xl12 xm8">
					<div class="line-small">
						<div class="xs12">
							
								<div class="clearfix articlebox">
									<div class="liuyan_a">
									</div>
									<div class="said_img">
										<img src="<?php echo @IMG_URL;?>
18.jpg" class="radius-circle" width="60px" height="60px" />
										<div class="liuyan_t">
											<span class="icon-user"></span>&nbsp;&nbsp;<a>波仔</a>&nbsp;&nbsp;</span>
											<span class="icon-paper-plane"></span>&nbsp;2016年1月7日&nbsp;&nbsp;</span>
											<span class="tag bg-dot">win8.1</span>&nbsp;&nbsp;<span class="icon-map-marker"></span>&nbsp;甘肃兰州
										</div>
										<div class="liuyan_c">
											分享模板
										</div>

									</div>

									<!--回复-->
									<if condition="$vo.c_content neq ''">
									<div class="f_liuyan">
										<hr />
										<div class="liuyan_a">
										</div>
										<div class="said_img">
											<img src="<?php echo @IMG_URL;?>
24.jpg" class="radius-circle" width="60px" height="60px" />
											<div class="liuyan_t">
												<span class="icon-user"></span>&nbsp;&nbsp;管理员&nbsp;&nbsp;</span>
												<span class="icon-paper-plane"></span>&nbsp;&nbsp;2016年1月7日&nbsp;&nbsp;
												<span>回复 @<a>波仔</a> 中说到：</span>
											</div>
											<div class="liuyan_c">
												谢谢
											</div>
										</div>
									</div>
									</if>
								</div>
								<br />
							<div class="clearfix articlebox">
									<div class="liuyan_a">
									</div>
									<div class="said_img">
										<img src="<?php echo @IMG_URL;?>
18.jpg" class="radius-circle" width="60px" height="60px" />
										<div class="liuyan_t">
											<span class="icon-user"></span>&nbsp;&nbsp;<a>波仔</a>&nbsp;&nbsp;</span>
											<span class="icon-paper-plane"></span>&nbsp;2016年1月7日&nbsp;&nbsp;</span>
											<span class="tag bg-dot">win8.1</span>&nbsp;&nbsp;<span class="icon-map-marker"></span>&nbsp;甘肃兰州
										</div>
										<div class="liuyan_c">
											分享模板
										</div>

									</div>

									<!--回复-->
									<if condition="$vo.c_content neq ''">
									<div class="f_liuyan">
										<hr />
										<div class="liuyan_a">
										</div>
										<div class="said_img">
											<img src="<?php echo @IMG_URL;?>
24.jpg" class="radius-circle" width="60px" height="60px" />
											<div class="liuyan_t">
												<span class="icon-user"></span>&nbsp;&nbsp;管理员&nbsp;&nbsp;</span>
												<span class="icon-paper-plane"></span>&nbsp;&nbsp;2016年1月7日&nbsp;&nbsp;
												<span>回复 @<a>波仔</a> 中说到：</span>
											</div>
											<div class="liuyan_c">
												谢谢
											</div>
										</div>
									</div>
									</if>
								</div>
								<br />
								<div class="clearfix articlebox">
									<div class="liuyan_a">
									</div>
									<div class="said_img">
										<img src="<?php echo @IMG_URL;?>
18.jpg" class="radius-circle" width="60px" height="60px" />
										<div class="liuyan_t">
											<span class="icon-user"></span>&nbsp;&nbsp;<a>波仔</a>&nbsp;&nbsp;</span>
											<span class="icon-paper-plane"></span>&nbsp;2016年1月7日&nbsp;&nbsp;</span>
											<span class="tag bg-dot">win8.1</span>&nbsp;&nbsp;<span class="icon-map-marker"></span>&nbsp;甘肃兰州
										</div>
										<div class="liuyan_c">
											分享模板
										</div>

									</div>

									<!--回复-->
									<if condition="$vo.c_content neq ''">
									<div class="f_liuyan">
										<hr />
										<div class="liuyan_a">
										</div>
										<div class="said_img">
											<img src="<?php echo @IMG_URL;?>
24.jpg" class="radius-circle" width="60px" height="60px" />
											<div class="liuyan_t">
												<span class="icon-user"></span>&nbsp;&nbsp;管理员&nbsp;&nbsp;</span>
												<span class="icon-paper-plane"></span>&nbsp;&nbsp;2016年1月7日&nbsp;&nbsp;
												<span>回复 @<a>波仔</a> 中说到：</span>
											</div>
											<div class="liuyan_c">
												谢谢
											</div>
										</div>
									</div>
									</if>
								</div>
								<br />					
							
							<br />
							
							<br />
							<hr />

							<div class="panel border-sub">
								<div class="panel-head border-sub bg-sub">
									<h3>留  言</h3>
								</div>
								<div class="panel-body">
									<div class="panel-body">
										<form action="#" method="post" class="form form-block">							
											<div class="form-group">
												<div class="field">
													<div class="input-group">
														<span class="addon">昵称</span>
													<input type="text" class="input" id="username" name="username" size="50" data-validate="required:请输入昵称" placeholder="昵称" />
												</div>
												</div>
											</div>
											<div class="form-group">
												<div class="field">
													<div class="input-group">
														<span class="addon">邮箱</span>
													<input type="text" class="input"  id="email" name="email" size="20" data-validate="email:请输入正确的邮箱地址" placeholder="邮箱" />
												</div>
												</div>
											</div>
											<div class="form-group">
												<div class="field">
													<textarea class="input" rows="5" name="content" cols="50" data-validate="required:请输入留言内容" placeholder="请输入留言内容"></textarea>
												</div>
											</div>
				<div class="form-group">
					<div class="field">
						<div class="input-group">
							<span class="addon">验证码</span>
						<input type="text" style="width: 300px;" class="input" id="txt_check" name="txt_check" data-validate="required:请输入右侧验证码" placeholder="验证码" />
						<img style="margin-top: -32px;margin-left: 50%;display: block;border: 1px solid #C7C7C7;" class="img" src="<?php echo @__CONTROLLER__;?>
/verifyImg" onClick="this.src='<?php echo @__CONTROLLER__;?>
/verifyImg/'+Math.random()">
					</div></div>
				</div>
											<div class="form-button">
												<button class="button bg-blue button-big button-block" type="submit">
													提 交</button>
											</div>
										</form>
									</div>
								</div>
							</div>
							<br />
						</div>
						<hr />
					</div>
					<br />
					<br />
					<br />
				</div>
				<div class="xl12 xm4">
					<div>
						<h3><span class="icon-user"></span> 用户登录</h3>
						<br />
						<form method="post" class="form-x form-auto">
							<div class="form-group">
								<div class="label">
									<label for="username">
										用户名</label>
								</div>
								<div class="field">
									<input type="text" class="input input-auto" id="username" name="username" size="30" data-validate="required:必填" placeholder="手机/邮箱/账号" />
								</div>
							</div>
							<div class="form-group">
								<div class="label">
									<label for="detail">
										密&nbsp;&nbsp;码</label>
								</div>
								<div class="field">
									<input type="text" class="input input-auto" id="username" name="username" size="30" data-validate="required:必填" placeholder="密码" />
								</div>
							</div>
							<div class="form-button">
								<button class="button bg-blue" type="submit">
									登录</button>&nbsp;&nbsp;&nbsp;&nbsp;
								<a class="button bg" href=" { : U ( 'Base/loginQq' ) } "><img height="20px" src="<?php echo @IMG_URL;?>
qq.png" /> QQ登录</a>
							</div>
						</form>
					</div>
					<br />
					<hr />
					<div>
						<h3><span class="icon-cloud-download"></span> 程序下载</h3>
						<br />
						<div class="tool">
							<h4><span>站点版本：波仔博客 v1.0 beta1</span></h4>
							<h4><span>开源版本：波仔博客 v1.0 </span>
				<a href="#"><button id="download" class="button button-little bg-red">下载</button></a>
			</h4>
							<h4><span>提取密码：guvs</span>
		</div>
	</div>
	<br />
	<hr />
	<div>
		<h3><span class="icon-wrench"></span> 我的标签</h3>		
		<h4>
			<div class="tag-ul">
                <volist name="tag" id="v" empty="暂时没有标签">
                	
                    <if condition="$v['a_id'] % 6 ==1">
                        <a class="button button-little bg-main" href="#">标签1</a>
                    </if>
                    <if condition="$v['a_id'] % 6 ==2">
                        <a class="button button-little bg-sub" href="#">标签2</a>
                    </if>
                    <if condition="$v['a_id'] % 6 ==3">
                        <a class="button button-little bg-red" href="#">标签3</a>
                    </if>
                    <if condition="$v['a_id'] % 6 ==4">
                        <a class="button button-little bg-yellow" href="#">标签4</a>
                    </if>
                    <if condition="$v['a_id'] % 6 ==5">
                        <a class="button button-little bg-blue" href="#">标签5</a>
                    </if>
                    <if condition="$v['a_id'] % 6 ==0">
                        <a class="button button-little bg-green" href="#">标签6</a>
                    </if>
                </volist>
            </div>			
		</h4>
						</div>
						<hr />
						<h2 class="bg-main text-white padding">随机文章</h2>
						<div class="padding-big bg">
							<ul class="list-media list-underline">

								<li>
									<div class="media media-x img-small">
										<a class="float-left" href="#"><img src="<?php echo @IMG_URL;?>
18.jpg" class="radius"></a>
										<div class="media-body">
											<strong>文章标题...</strong>文章描述文章描述文章描述文章描述文章描述文章描述文章描述文章描述...
											<a class="button button-little border-red swing-hover" href="#">查看详情</a>
										</div>
									</div>
								</li>
								<li>
									<div class="media media-x img-small">
										<a class="float-left" href="#"><img src="<?php echo @IMG_URL;?>
24.jpg" class="radius"></a>
										<div class="media-body">
											<strong>文章标题...</strong>文章描述文章描述文章描述文章描述文章描述文章描述文章描述文章描述...
											<a class="button button-little border-red swing-hover" href="#">查看详情</a>
										</div>
									</div>
								</li>
								<li>
									<div class="media media-x img-small">
										<a class="float-left" href="#"><img src="<?php echo @IMG_URL;?>
25.jpg" class="radius"></a>
										<div class="media-body">
											<strong>文章标题...</strong>文章描述文章描述文章描述文章描述文章描述文章描述文章描述文章描述...
											<a class="button button-little border-red swing-hover" href="#">查看详情</a>
										</div>
									</div>
								</li>

							</ul>
						</div>
						<br />
						<div class="tab border-main" data-toggle="hover" style="height: 470px;">
							<div class="tab-head">

								<ul class="tab-nav">
									<li class="active"><a href="#tab-start2">最新留言</a> </li>
									<li><a href="#tab-css2">最新评论</a> </li>
									<li><a href="#tab-units2">最多点击</a> </li>
								</ul>
							</div>
							<div class="tab-body ">
								<div class="tab-panel active" id="tab-start2">

									<div class="panel-group" style="border-top: solid 0px #ddd;">
										<div class="media media-x">
											<a class="float-left" href="#">
												<img src="<?php echo @IMG_URL;?>
24.jpg" class="radius-circle" width="60px" height="60px">
											</a>
											<div class="media-body">
												<strong><span class="icon-paper-plane"></span>  波仔</strong>
												<span class="tag bg-dot">win8.1</span> 给大家分享的模板
											</div>
										</div>
									</div>
									<div class="panel-group" style="border-top: solid 0px #ddd;">
										<div class="media media-x">
											<a class="float-left" href="#">
												<img src="<?php echo @IMG_URL;?>
18.jpg" class="radius-circle" width="60px" height="60px">
											</a>
											<div class="media-body">
												<strong><span class="icon-paper-plane"></span>  波仔</strong>
												<span class="tag bg-dot">win8.1</span> 给大家分享的模板
											</div>
										</div>
									</div>
									<div class="panel-group" style="border-top: solid 0px #ddd;">
										<div class="media media-x">
											<a class="float-left" href="#">
												<img src="<?php echo @IMG_URL;?>
25.jpg" class="radius-circle" width="60px" height="60px">
											</a>
											<div class="media-body">
												<strong><span class="icon-paper-plane"></span>  波仔</strong>
												<span class="tag bg-dot">win8.1</span> 给大家分享的模板
											</div>
										</div>
									</div>
									<div class="panel-group" style="border-top: solid 0px #ddd;">
										<div class="media media-x">
											<a class="float-left" href="#">
												<img src="<?php echo @IMG_URL;?>
24.jpg" class="radius-circle" width="60px" height="60px">
											</a>
											<div class="media-body">
												<strong><span class="icon-paper-plane"></span>  波仔</strong>
												<span class="tag bg-dot">win8.1</span> 给大家分享的模板
											</div>
										</div>
									</div>

								</div>
								<div class="tab-panel" id="tab-css2">
									最新评论
									<br/>正在开发中...
								</div>
								<div class="tab-panel" id="tab-units2">
									最多点击
									<br/>正在开发中...
								</div>
							</div>
						</div>
						<div>
							<h3><span class="icon-retweet"></span> 友情链接</h3>
							<br />
							<div class="links">
								<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['showLink']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
									<a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['web_url'];?>
" target="_blank" class="button border-blue" role="button"><?php echo $_smarty_tpl->tpl_vars['v']->value['web_name'];?>
</a>&nbsp;
								<?php } ?>
							</div>
						</div>
						</div>
						<br />
						<hr />
						<br />

					</div>
			</div>
		</div>
		<div class="container-layout bg-black">
				<div class="border-top padding-top foot">
					<div class="text-center">
						<ul class="nav nav-inline">

							<li><a href="">网站首页</a> </li>
							<li><a href="#">技术反馈</a> </li>
							<li><a href="">留言反馈</a> </li>
							<li><a href="#">联系方式</a> </li>

						</ul>
					</div>
					<div class="text-center height-big">
						Copyright © 2014 - 2016 波仔博客 & 版权所有 陇ICP备15002349号 |
						<a href="#" target="_blank"> 博客管理  </a> |
						<script type="text/javascript">
							var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1256135378'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s95.cnzz.com/z_stat.php%3Fid%3D1256135378' type='text/javascript'%3E%3C/script%3E"));
						</script>
					</div>
				</div>
			</div>
	</body>

</html><?php }} ?>