<?php /* Smarty version Smarty-3.1.6, created on 2016-02-29 00:42:47
         compiled from "E:/cwy/Admin/View\System\link.html" */ ?>
<?php /*%%SmartyHeaderCode:2781556d323877f3792-64371417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8b8ab250704d0c95ff736b50fefe6786f27100a' => 
    array (
      0 => 'E:/cwy/Admin/View\\System\\link.html',
      1 => 1456209408,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2781556d323877f3792-64371417',
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
  'unifunc' => 'content_56d32387a2ccb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d32387a2ccb')) {function content_56d32387a2ccb($_smarty_tpl) {?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>友情链接管理</title>
<link href="<?php echo @ADMIN_CSS_URL;?>
base.css" rel="stylesheet" type='text/css'>
<script language='javascript'>
function Sel(stype)
{
	  for(var i=0;i < document.getElementsByName('aids').length;i++)
	  {
		  if(stype=='all') document.getElementsByName('aids')[i].checked=true;
		  else document.getElementsByName('aids')[i].checked=false;
	  }
}
function checkSubmit()
{
	var str = '';
	for(var i=0;i < document.getElementsByName('aids').length;i++)
	{
		  if(document.getElementsByName('aids')[i].checked){
		  	if(str=='') str += document.getElementsByName('aids')[i].value;
		  	else str += ',' + document.getElementsByName('aids')[i].value;
		  }
	}
	if(str=='')
	{
		alert('你没选择任何内容！');
		return false;
	}
	else
	{
		location="friendlink_edit.php?aids="+str+"&dopost=delall";
	}
}
</script>
</head>
<body background='<?php echo @ADMIN_IMG_URL;?>
allbg.gif' leftmargin='8' topmargin='8'>

<table width="98%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#D6D6D6">
  <tr>
    <td height="28" background="<?php echo @ADMIN_IMG_URL;?>
tbg.gif" colspan="8" style="padding-left:10px;">
  <div style="float:left">
  	<b>友情链接管理</b>
	</div>
	<div style="float:right;padding-right:6px;">
		<a href="<?php echo @__CONTROLLER__;?>
/addlink"><u>增加链接</u></a>
  </div>
  </td>
</tr>
<form action="<?php echo @__SELF__;?>
" name="form1" method="post">
<tr>
   <td height="30" align="center" bgcolor="#F9FCEF"  colspan="8"> 
   
	  <table border="0" cellspacing="0" cellpadding="3">
      <tr>
          <td>关键字：</td>
          <td><input name="keyword" type="text" id="keyword" size="12" style="width:250px" value="" /></td>
          <td>
          </td>
          <td>
           <input name="imageField" class="np" type="image" src="<?php echo @ADMIN_IMG_URL;?>
button_search.gif" width="60" height="22" border="0" />
          </td>
        </tr>
      </table>
	  
    </td>
</tr>
<input type='hidden' name='dopost' value='delall'/>
<input type='hidden' name='allid' value=''/>
<tr align="center" bgcolor="#FBFCE2" height="26">
          <td width="6%">id</td>
          
          <td width="23%">网站名称</td>
          <td width="15%">网站链接</td>
          <td width="15%">站长Email</td>
          
          <td width="15%">管理</td>
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
          <tr align="center" bgcolor="#FFFFFF" height="26" onMouseMove="javascript:this.bgColor='#FCFDEE';"
        	 onMouseOut="javascript:this.bgColor='#FFFFFF';">
          <td>
            <input type="text" class="text nonull" style="width:20px;" value="<?php echo $_smarty_tpl->tpl_vars['v']->iteration;?>
" name="name_68" disabled />
            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['web_id'];?>
" name="web_id">
          </td>
          <td><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['web_url'];?>
" target='_blank'><?php echo $_smarty_tpl->tpl_vars['v']->value['web_name'];?>
</a></td>
          <td><?php echo $_smarty_tpl->tpl_vars['v']->value['web_url'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['v']->value['web_email'];?>
</td>
          <td>
          	<a href='<?php echo @__CONTROLLER__;?>
/updlink/web_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['web_id'];?>
'>[更改]</a>
		        <a href='<?php echo @__CONTROLLER__;?>
/dellink/web_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['web_id'];?>
'>[删除]</a>
		      </td>
          <?php } ?>
     <tr align="center" bgcolor="#F9FCEF" height="28">
      <td colspan="8">
      	<span>共 1 页/3条记录</span>
      </td>
     </tr>
   </table>
  </td>
</tr>
</form>
</table>
</body>
</html><?php }} ?>