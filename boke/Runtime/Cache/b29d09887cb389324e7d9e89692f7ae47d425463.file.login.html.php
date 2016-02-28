<?php /* Smarty version Smarty-3.1.6, created on 2016-02-29 00:38:50
         compiled from "E:/cwy/Admin/View\Login\login.html" */ ?>
<?php /*%%SmartyHeaderCode:1414156d303cf727e54-62712970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b29d09887cb389324e7d9e89692f7ae47d425463' => 
    array (
      0 => 'E:/cwy/Admin/View\\Login\\login.html',
      1 => 1456677526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1414156d303cf727e54-62712970',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56d303cfa4665',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d303cfa4665')) {function content_56d303cfa4665($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>波仔博客后台管理系统</title>
    <script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
jquery.js"></script>
    <style>
        body{
            background: #ebebeb;
            font-family: "Helvetica Neue","Hiragino Sans GB","Microsoft YaHei","\9ED1\4F53",Arial,sans-serif;
            color: #222;
            font-size: 12px;
        }
        * { padding: 0px;margin: 0px; }
        .top_div{
            background: #008ead;
            width: 100%;
            height: 400px;
        }
        .ipt{
            border: 1px solid #d3d3d3;
            padding: 10px 10px;
            width: 290px;
            border-radius: 4px;
            padding-left: 35px;
            -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
            box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
            -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
            -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s
        }
        .ipt:focus{
            border-color: #66afe9;
            outline: 0;
            -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);
            box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6)
        }
        .u_logo{
            background: url("<?php echo @ADMIN_IMG_URL;?>
username.png") no-repeat;
            padding: 10px 10px;
            position: absolute;
            top: 43px;
            left: 40px;

        }
        .p_logo{
            background: url("<?php echo @ADMIN_IMG_URL;?>
password.png") no-repeat;
            padding: 10px 10px;
            position: absolute;
            top: 12px;
            left: 40px;
        }
        a{
            text-decoration: none;
        }
        .tou{
            background: url("<?php echo @ADMIN_IMG_URL;?>
tou.png") no-repeat;
            width: 97px;
            height: 92px;
            position: absolute;
            top: -87px;
            left: 140px;
        }
        .left_hand{
            background: url("<?php echo @ADMIN_IMG_URL;?>
left_hand.png") no-repeat;
            width: 32px;
            height: 37px;
            position: absolute;
            top: -38px;
            left: 150px;
        }
        .right_hand{
            background: url("<?php echo @ADMIN_IMG_URL;?>
right_hand.png") no-repeat;
            width: 32px;
            height: 37px;
            position: absolute;
            top: -38px;
            right: -64px;
        }
        .initial_left_hand{
            background: url("<?php echo @ADMIN_IMG_URL;?>
hand.png") no-repeat;
            width: 30px;
            height: 20px;
            position: absolute;
            top: -12px;
            left: 100px;
        }
        .initial_right_hand{
            background: url("<?php echo @ADMIN_IMG_URL;?>
hand.png") no-repeat;
            width: 30px;
            height: 20px;
            position: absolute;
            top: -12px;
            right: -112px;
        }
        .left_handing{
            background: url("<?php echo @ADMIN_IMG_URL;?>
left-handing.png") no-repeat;
            width: 30px;
            height: 20px;
            position: absolute;
            top: -24px;
            left: 139px;
        }
        .right_handinging{
            background: url("<?php echo @ADMIN_IMG_URL;?>
right_handing.png") no-repeat;
            width: 30px;
            height: 20px;
            position: absolute;
            top: -21px;
            left: 210px;
        }

    </style>
    <script type="text/javascript">
        $(function(){
            //得到焦点
            $("#password").focus(function(){
                $("#left_hand").animate({
                    left: "150",
                    top: " -38"
                }, { step: function() {
                    if(parseInt($("#left_hand").css("left"))>140){
                        $("#left_hand").attr("class","left_hand");
                    }
                }}, 2000);
                $("#right_hand").animate({
                    right: "-64",
                    top: "-38px"
                }, { step: function() {
                    if(parseInt($("#right_hand").css("right"))> -70){
                        $("#right_hand").attr("class","right_hand");
                    }
                }}, 2000);
            });
            //失去焦点
            $("#password").blur(function(){
                $("#left_hand").attr("class","initial_left_hand");
                $("#left_hand").attr("style","left:100px;top:-12px;");
                $("#right_hand").attr("class","initial_right_hand");
                $("#right_hand").attr("style","right:-112px;top:-12px");
            });
        });
    </script>
</head>
<body>
<form name="loginform" action="<?php echo @__SELF__;?>
" method="post" >
<div class="top_div"></div>
<div style="width: 400px;height: 200px;margin: auto auto;background: #ffffff;text-align: center;margin-top: -100px;border: 1px solid #e7e7e7">
    <div style="width: 165px;height: 96px;position: absolute">
        <div class="tou"></div>
        <div id="left_hand" class="initial_left_hand"></div>
        <div id="right_hand" class="initial_right_hand"></div>
    </div>

    <p style="padding: 30px 0px 10px 0px;position: relative;">
        <span class="u_logo"></span>
        <input class="ipt" type="text" placeholder="请输入用户名或邮箱" name="admin_user">
    </p>
    <p style="position: relative;">
        <span class="p_logo"></span>
        <input id="password" class="ipt" type="password"  placeholder="请输入密码" name="admin_pwd">
    </p>

    <div style="height: 50px;line-height: 50px;margin-top: 30px;border-top: 1px solid #e7e7e7;">
        <p style="margin: 0px 35px 20px 45px;">
           <span style="float: left"><a href="#" style="color:#ccc;">忘记密码?</a></span>
           <span style="float: right">
               <a href="#" style="color:#ccc;margin-right:10px;">注册</a>
               <input type="submit" value="Login" />
           </span>
        </p>
    </div>

</div>

<div style="position: fixed;bottom: 0px;text-align: center;width: 100%;">
    Copyright ©2016 <a style="margin-left: 10px;color: #000000;text-decoration: underline" href="http://www.sucaihuo.com">http://www.itboke.cn</a>
</div>
</form>
</body>
</html><?php }} ?>