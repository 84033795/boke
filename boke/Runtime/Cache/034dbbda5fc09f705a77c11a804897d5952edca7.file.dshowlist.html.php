<?php /* Smarty version Smarty-3.1.6, created on 2016-02-29 00:45:01
         compiled from "E:/cwy/Admin/View\Column\dshowlist.html" */ ?>
<?php /*%%SmartyHeaderCode:552856d3240d6e98c1-90752426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '034dbbda5fc09f705a77c11a804897d5952edca7' => 
    array (
      0 => 'E:/cwy/Admin/View\\Column\\dshowlist.html',
      1 => 1456366477,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '552856d3240d6e98c1-90752426',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56d3240d95f71',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d3240d95f71')) {function content_56d3240d95f71($_smarty_tpl) {?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>文档管理</title>
<link rel="stylesheet" type="text/css" href="<?php echo @ADMIN_CSS_URL;?>
base.css">
<script language="javascript" src="../include/<?php echo @ADMIN_JS_URL;?>
dedeajax2.js"></script>
<script language="javascript" src="<?php echo @ADMIN_JS_URL;?>
ieemu.js"></script>
<script language="javascript" src="<?php echo @ADMIN_JS_URL;?>
context_menu.js"></script>
<script language="javascript" src="<?php echo @ADMIN_JS_URL;?>
main.js"></script>
<script language="javascript" src="<?php echo @ADMIN_JS_URL;?>
list.js"></script>
</head>
<body leftmargin="8" topmargin="8" background='<?php echo @ADMIN_IMG_URL;?>
allbg.gif' onLoad="ContextMenu.intializeContextMenu()">
<!--  内容列表   -->
<form name="form2">
<table width="98%" border="0" cellpadding="2" cellspacing="1" bgcolor="#CFCFCF" align="center" style="margin-top:8px">
<tr bgcolor="#E7E7E7" >
	<td height="28" colspan="10" background="<?php echo @ADMIN_IMG_URL;?>
tbg.gif" style="padding-left:10px;">
	◆ 所有栏目&gt;文档列表
	</td>
</tr>
<tr align="center" bgcolor="#FBFCE2" height="25">
	<td width="4%">选择</td>
	<td width="6%">ID</td>
	<td width="28%">文章标题</td>
	<td width="10%">更新时间</td>
	<td width="10%">类目</td>
	<td width="8%">发布人</td>
	<td width="10%">操作</td>
</tr>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['show']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->iteration++;
?>
<tr align='center' bgcolor="#FFFFFF" height="26" align="center" onMouseMove="javascript:this.bgColor='#FCFDEE';" onMouseOut="javascript:this.bgColor='#FFFFFF';">
	<td>
		<input name="arcID" type="checkbox" id="arcID" value="1" class="np" />
	</td>
	<td nowrap>
		<?php echo $_smarty_tpl->tpl_vars['v']->iteration;?>
	</td>
	
	<td align='left'>
		<span id="arc1">
			<a href='#'
				 oncontextmenu="ShowMenu(event,this,1,'1231')">
				<u><?php echo $_smarty_tpl->tpl_vars['v']->value['web_title'];?>
</u>
			</a>
		</span>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['web_time'];?>
</td>
	<td><a href='#'><?php echo $_smarty_tpl->tpl_vars['v']->value['web_name'];?>
</a></td>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['web_author'];?>
</td>
	<td>
		<a href="<?php echo @SITE_URL;?>
index.php/Admin/Document/upd"><img src='<?php echo @ADMIN_IMG_URL;?>
gtk-edit.png' title="编辑" alt="编辑" onClick="editArc(1);" style='cursor:pointer' border='0' width='16' height='16' /></a>
		<img src='<?php echo @ADMIN_IMG_URL;?>
part-list.gif' title="预览" alt="预览" onClick="viewArc(1);" style='cursor:pointer' border='0' width='16' height='16' />
	</td>
</tr>
<?php } ?>
<tr bgcolor="#ffffff">
<td height="36" colspan="10">
	&nbsp;
	<a href="javascript:selAll()" class="coolbg">全选</a>
	<a href="javascript:noSelAll()" class="coolbg">取消</a>
	<a href="javascript:delArc(0)" class="coolbg">&nbsp;删除&nbsp;</a>
</td>
</tr>
</form>
<tr align="right" bgcolor="#F9FCEF">
	<td height="36" colspan="10" align="center">
		<span>共 1 页/1条记录</span>
	</td>
</tr>
</table>
</body>
</html><?php }} ?>