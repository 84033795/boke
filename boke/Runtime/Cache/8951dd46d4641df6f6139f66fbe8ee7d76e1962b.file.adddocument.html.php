<?php /* Smarty version Smarty-3.1.6, created on 2016-02-28 22:27:59
         compiled from "E:/cwy/Admin/View\Document\adddocument.html" */ ?>
<?php /*%%SmartyHeaderCode:2083856d303efbf17f3-24137777%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8951dd46d4641df6f6139f66fbe8ee7d76e1962b' => 
    array (
      0 => 'E:/cwy/Admin/View\\Document\\adddocument.html',
      1 => 1456463283,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2083856d303efbf17f3-24137777',
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
  'unifunc' => 'content_56d303efe9d26',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d303efe9d26')) {function content_56d303efe9d26($_smarty_tpl) {?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>增加文章</title>
<style type="text/css">
<!--
body { background-image: url(<?php echo @ADMIN_IMG_URL;?>
allbg.gif); }
.multipic {
	border: 1px dashed #FC6;
}
.albCt {
	border-bottom: 1px dashed #FC0;
	margin-bottom: 10px;
	padding-bottom:10px;
}
.albCt img{
	cursor:pointer;
}
-->
</style>
<link href="<?php echo @ADMIN_CSS_URL;?>
base.css" rel="stylesheet" type="text/css">
<link href='<?php echo @ADMIN_CSS_URL;?>
tb-box.css' rel='stylesheet' type='text/css' />
<script language='javascript' src="<?php echo @ADMIN_JS_URL;?>
main.js"></script>
<script type="text/javascript"src="<?php echo @ADMIN_JS_URL;?>
handlers.js"></script>
<script lang='javascript' src='<?php echo @ADMIN_JS_URL;?>
tb-box.js'></script>
<script src="/Admin/Public/js/jquery-2.0.2.js" ></script>
<script src="/Admin/Public/ueditor/ueditor.config.js" ></script>  
<script src="/Admin/Public/ueditor/ueditor.all.min.js" ></script>
<script>
$(function(){
    var ue = UE.getEditor('container',{
        serverUrl :" { :U ( 'Admin/Document/ueditor' ) } "
    });
})
</script>
<script language="javascript">
<!--
var swfu = null;
var arctype = 'article';
function checkSubmit()
{
	if(document.form1.title.value=='')
	{
		alert('文章标题不能为空！');
		return false;
	}
	if(document.form1.typeid.value==0)
	{
		alert('请选择档案的主类别！');
		return false;
	}
}
</script>
</head>
<body topmargin="8">
  <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="60%" height="30"><IMG height=14 src="<?php echo @ADMIN_IMG_URL;?>
book1.gif" width=20>&nbsp;<a href="catalog_do.php?cid=1&channelid=1&dopost=listArchives"><u>文章列表</u></a> &gt;&gt; 发布文章</td>
      <td width="30%" align='right'>&nbsp;<a href="<?php echo @__MODULE__;?>
/column/showlist">[<u>栏目管理</u>]</a> </td>
    </tr>
  </table>
<form name="form1" action="<?php echo @__SELF__;?>
" method="post" >
  <table width="98%"  border="0" align="center" cellpadding="2" cellspacing="2" id="needset" style="border:1px solid #cfcfcf;background:#ffffff;">
    <tr>
      <td height="24" colspan="5" class="bline">
      	<table width="800" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="90">&nbsp;文章标题：</td>
            <td width='408'><input name="web_title" type="text" id="title" value="" style="width:388px" /></td>
            <td width="90">&nbsp;</td>
            <td>
            </td>
          </tr>
        </table></td>
    </tr>
    <tr>
      <td height="24" colspan="5" class="bline">
        <table width="800" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="90">&nbsp;作者：</td>
            <td width='408'><input name="web_author" type="text"value="" style="width:200px" /></td>
            <td width="90">&nbsp;</td>
            <td>
            </td>
          </tr>
        </table></td>
    </tr>
        <tr>
      <td height="24" colspan="5" class="bline">
        <table width="800" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="90">&nbsp;发布时间：</td>
            <td width='408'><input name="web_time" type="text"value="" style="width:200px" />（2016-X-XX XX:XX:XX）</td>
            <td width="90">&nbsp;</td>
            <td>
            </td>
          </tr>
        </table></td>
    </tr>
    <tr>
      <td height="24" colspan="5" class="bline">
      	<table width="800" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="90">&nbsp;文章主栏目：</td>
          <td>
       <span id='typeidct'>
       <select style='width:240px' name="classid">
<option value='0'>请选择栏目...</option>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['show']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
<option value='<?php echo $_smarty_tpl->tpl_vars['v']->value['web_claid'];?>
' class='option1' selected='selected'><?php echo $_smarty_tpl->tpl_vars['v']->value['web_name'];?>
</option>
<?php } ?>
</select></span>
        </tr>
      </table>
    <tr>
      <td height="24" colspan="5" class="bline">
      <table width="800" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="90">&nbsp;内容摘要：</td>
          <td width="449"><textarea name="web_introduce" rows="5" style="width:80%;height:50px"></textarea></td>
          <td width="261">&nbsp;</td>
        </tr>
      </table>
      </td>
  </tr>
  <tr>
   </tr>
    <tr>
      <td height="28" colspan="2" bgcolor="#F9FCEF" class="bline2">
      	<div style='float:left;line-height:28px;'>&nbsp;<strong>文章内容：</strong></div>
    	</td>
 	</tr>
 	<tr>
      <td height="28" colspan="2" bgcolor="#F9FCEF" class="bline2">
      <textarea name="web_text" id="container">
	  	
	    </textarea>
 	</tr>
 	<tr>
      <td height="28" colspan="2" bgcolor="#F9FCEF" class="bline2">
      	<div style='float:left;line-height:28px;'>
        <input type="submit" value="发布" /></div>
    	</td>
 	</tr>
 	
  </table>
</form>
</body>
</html><?php }} ?>