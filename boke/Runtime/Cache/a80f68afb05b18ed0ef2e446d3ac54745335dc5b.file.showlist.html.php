<?php /* Smarty version Smarty-3.1.6, created on 2016-02-29 00:41:13
         compiled from "E:/cwy/Admin/View\Column\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:2880956d32329c3f4c3-35396147%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a80f68afb05b18ed0ef2e446d3ac54745335dc5b' => 
    array (
      0 => 'E:/cwy/Admin/View\\Column\\showlist.html',
      1 => 1456369879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2880956d32329c3f4c3-35396147',
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
  'unifunc' => 'content_56d32329eaead',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d32329eaead')) {function content_56d32329eaead($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>无标题文档</title>
    <link type="text/css" href="<?php echo @ADMIN_CSS_URL;?>
nav.css" rel="stylesheet" />
    <script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
jQuery1.7.2.js"></script>
</head>

<body>
    <div class="v52fmbx_tbmax">

        <table cellpadding="0" cellspacing="0" class="table">
            <tr>

                <td width="40" class="centle">&nbsp;&nbsp;<a href="<?php echo @__CONTROLLER__;?>
/classadd.html" style=" display:inline-block; padding:5px 10px; border:1px solid #eee; font-size:12px; background:#333; color:#fff;">添加栏目</a></td>
            </tr>
            <tr>
                <td>
                    <table cellpadding="0" cellspacing="1" class="table neitable columntables">
                        <tr id="list-top">
                            <td class="list">选择</td>
                            <td class="list">栏目id</td>
                            <td class="list">栏目名称</td>
                            <td class="list">操作</td>
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
                        <span id="25" style="width:50px;">
	
        <tr class="mouse click column_1" id="25">
            <td class="list-text">
                <input name='id' type='checkbox' id="id" value='68' />
            </td>
           
            <td class="list-text blues" style="text-align:left;">
<span type="text"  value="&nbsp;&nbsp;&nbsp;&nbsp;" /></span>
            <input type="text" class="text nonull" style="width:20px;" value="<?php echo $_smarty_tpl->tpl_vars['v']->iteration;?>
" name="name_68" disabled />
                       
                </td>
                <td class="list-text blues" style="text-align:left;">
                     <input type="text" class="text nonull" style="width:300px;" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['web_name'];?>
" name="name_68" disabled />
                </td>
                <td width="" class="list-text">
                    <div class="lista">
                        
                        <a href="<?php echo @__CONTROLLER__;?>
/classupd/web_claid/<?php echo $_smarty_tpl->tpl_vars['v']->value['web_claid'];?>
">修改栏目</a>|
                        <a href="<?php echo @__CONTROLLER__;?>
/classdel/web_claid/<?php echo $_smarty_tpl->tpl_vars['v']->value['web_claid'];?>
">删除</a>|

                    </div>
                </td>
            </tr>
            </span>
        <?php } ?>
            </table>
            </td>
            </tr>
            <tr>
                <td class="footer">&nbsp;</td>
            </tr>
        </table>
    </div>
</body>

</html><?php }} ?>