<?php /* Smarty version Smarty-3.1.6, created on 2016-02-29 00:43:53
         compiled from "E:/cwy/Admin/View\Column\classadd.html" */ ?>
<?php /*%%SmartyHeaderCode:1317956d323c9461db2-03352398%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ea387c44585e1212dd4395bb8152ccf9915a0c4' => 
    array (
      0 => 'E:/cwy/Admin/View\\Column\\classadd.html',
      1 => 1456463372,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1317956d323c9461db2-03352398',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56d323c95d39a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d323c95d39a')) {function content_56d323c95d39a($_smarty_tpl) {?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link type="text/css" href="<?php echo @ADMIN_CSS_URL;?>
nav.css" rel="stylesheet"/>
<script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
jQuery1.7.2.js"></script>
</head>

<body>
<form method="post" action="<?php echo @__SELF__;?>
" name="form1">
<div class="v52fmbx_tbmax">

    <table cellpadding="0" cellspacing="0" class="table">
        <tr>
    
            <td width="40" class="centle">&nbsp;&nbsp;<a href="<?php echo @__CONTROLLER__;?>
/showlist.html" style=" display:inline-block; padding:5px 10px; border:1px solid #eee; font-size:12px; background:#333; color:#fff;">返回栏目表</a></td>
        </tr>
             <tr>
             <td>
<table cellpadding="0" cellspacing="1" class="table neitable columntables">
        <tr id="list-top"> 
            
            <td class="list">栏目名称</td>           
            <td class="list">操作</td>  
        </tr>
 
 
 <span id="25" style="width:50%">
        <tr class="mouse click column_1" id="25">           
            <td class="list-text blues" style="text-align:left;">
<span type="text"  value="&nbsp;&nbsp;&nbsp;&nbsp;" /></span>

				 <input type="text" class="text nonull" style="width:300px;" value="" name="classname" />	
            </td>

            <td width="" class="list-text">
            <div class="lista" style="width:50%">
            <input type="submit" value="添加">
            
            
            </div>
            </td>
        </tr>
    </span>
       </table>
       </td> 
       </tr>
        <tr>
            <td class="footer">&nbsp;</td>
        </tr>
</table>
</div>
</form>
</body>
</html><?php }} ?>