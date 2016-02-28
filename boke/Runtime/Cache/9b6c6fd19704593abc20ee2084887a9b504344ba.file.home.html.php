<?php /* Smarty version Smarty-3.1.6, created on 2016-02-29 00:42:30
         compiled from "E:/cwy/Admin/View\System\home.html" */ ?>
<?php /*%%SmartyHeaderCode:2604956d303e6399f30-12259677%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b6c6fd19704593abc20ee2084887a9b504344ba' => 
    array (
      0 => 'E:/cwy/Admin/View\\System\\home.html',
      1 => 1456677746,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2604956d303e6399f30-12259677',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56d303e6631dd',
  'variables' => 
  array (
    'userCount' => 0,
    'artCount' => 0,
    'arttext' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d303e6631dd')) {function content_56d303e6631dd($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>系统首页</title>
<base target="_self">
<link rel="stylesheet" type="text/css" href="<?php echo @ADMIN_CSS_URL;?>
base.css" />
<link rel="stylesheet" type="text/css" href="<?php echo @ADMIN_CSS_URL;?>
indexbody.css" />
</head>
<body>
<div>
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="1" background="<?php echo @ADMIN_IMG_URL;?>
sp_bg.gif" style='padding:0px'></td>
  </tr>
</table>
<div id='mainmsg'>
  <div class="column" id="column1"><!--左侧开始-->    
               
        
        <dl class='dbox' id="item3">
            <dt class='lside'>
                <div class='l'>快捷操作</div>
            </dt>
            <dd>
                <div id='quickmenu'>
                    <div class='icoitem' style='background:url(<?php echo @ADMIN_IMG_URL;?>
addnews.gif) 10px 3px no-repeat;'><a href="<?php echo @__MODULE__;?>
/column/column">文档列表</a></div>
                    <div class='icoitem' style='background:url(<?php echo @ADMIN_IMG_URL;?>
manage1.gif) 10px 3px no-repeat;'><a href="<?php echo @__MODULE__;?>
/document/adddocument">内容发布</a></div>
                    <div class='icoitem' style='background:url(<?php echo @ADMIN_IMG_URL;?>
manage1.gif) 10px 3px no-repeat;'><a href="<?php echo @__MODULE__;?>
/column/showlist">栏目管理</a></div>
                    <div class='icoitem' style='background:url(<?php echo @ADMIN_IMG_URL;?>
manage1.gif) 10px 3px no-repeat;'><a href="<?php echo @__MODULE__;?>
/System/info">修改参数</a></div>
                </div>
            </dd>

        </dl><!--快捷操作结束-->   
        
        <dl class='dbox' id="item5">
            <dt class='lside'><div class='l'>程序团队</div></dt>
            <dd class='intable'>
                <table width="98%" class="dboxtable">
                    <tr>
                        <td width='25%' height='36' class='nline' style="text-align:right">主程序研发： </td>
                        <td class='nline' style="text-align:left"><a href="#" target="_blank" style="color:blue">波仔网络工作室打造</a></td>
                    </tr>
                </table>
            </dd>
        </dl><!--开发团队结束-->
    </div><!--左侧结束-->
    <div class="column" id="column2" ><!-- //右边的快捷消息开始 -->
       
        <dl class='dbox' id="item6">
            <dt class='lside'><div class='l'>信息统计</div></dt>
            <dd id='listCount'>
                <table width="100%" class="dboxtable">
                    <tbody><tr>
                        <td width="50%" class="nline" style="text-align:left"> 会员数： </td>
                        <td class="nline" style="text-align:left"> <?php echo $_smarty_tpl->tpl_vars['userCount']->value;?>
 </td>
                    </tr>
                    <tr>
                        <td class="nline" style="text-align:left"> 文档数： </td>
                        <td class="nline" style="text-align:left"> <?php echo $_smarty_tpl->tpl_vars['artCount']->value;?>
 </td>
                    </tr>
                    </tbody>
                </table>
           </dd>
        </dl><!--信息统计结束-->
        <dl class='dbox' id="item7">
            <dt class='lside'><div class='l'>最新文档</div></dt>
            <dd id='listNews'>
                <table width="100%" class="dboxtable">
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arttext']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                   <tr>
                    <td class="nline" style="text-align:left">
                        ss<?php echo $_smarty_tpl->tpl_vars['v']->value['web_title'];?>

                    </td>
                   
                   </tr>
                <?php } ?>
                </table>
            </dd>
        </dl><!--最新文档结束-->
    </div>
</div>
</div>
</div>
</body>
</html><?php }} ?>