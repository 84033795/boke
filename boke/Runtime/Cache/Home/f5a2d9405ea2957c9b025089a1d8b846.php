<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>宠物缘 宠物交友网站 宠物领养中心 </title>

    <meta name="keywords" content="首页" />
    <meta name="description" content="首页 " />
    <meta name="generator" content="Discuz! X3.2" />
    <meta name="author" content="Discuz! Team and Comsenz UI Team" />
    <meta name="copyright" content="2001-2013 Comsenz Inc." />
    <meta name="MSSmartTagsPreventParsing" content="True" />
    <meta http-equiv="MSThemeCompatible" content="Yes" />
    <link rel="stylesheet" type="text/css" href="<?php echo ($smarty["const"]["CSS_URL"]); ?>style_2_common.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo ($smarty["const"]["CSS_URL"]); ?>style_2_portal_index.css" />
    <script src="<?php echo ($smarty["const"]["JS_URL"]); ?>jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo ($smarty["const"]["JS_URL"]); ?>jquery.superslide.js" type="text/javascript"></script>
    <script src="<?php echo ($smarty["const"]["JS_URL"]); ?>pace.js" type="text/javascript"></script>
    <script type="text/javascript">
        var STYLEID = '2',
            STATICURL = 'static/',
            IMGDIR = 'static/image/common',
            VERHASH = 'RR9',
            charset = 'utf-8',
            discuz_uid = '0',
            cookiepre = 'fOCZ_2132_',
            cookiedomain = '',
            cookiepath = '/',
            showusercard = '1',
            attackevasive = '0',
            disallowfloat = 'newthread',
            creditnotice = '1|威望|,2|金钱|,3|贡献|',
            defaultstyle = '',
            REPORTURL = 'aHR0cDovL3d3dy5wZXRseS5uZXQvcG9ydGFsLnBocA==',
            SITEURL = 'http://www.petly.net/',
            JSPATH = 'static/js/',
            CSSPATH = 'data/cache/style_',
            DYNAMICURL = '';
    </script>
    <script src="<?php echo ($smarty["const"]["JS_URL"]); ?>common.js" type="text/javascript"></script>
    <meta name="application-name" content="宠物领养网 Petly.net" />
    <meta name="msapplication-tooltip" content="宠物领养网 Petly.net" />
    <meta name="msapplication-task" content="name=首页;action-uri=http://www.petly.net/portal.php;icon-uri=http://www.petly.net/static/image/common/portal.ico" />
    <meta name="msapplication-task" content="name=领养;action-uri=http://www.petly.net/forum.php;icon-uri=http://www.petly.net/static/image/common/bbs.ico" />
    <script src="<?php echo ($smarty["const"]["JS_URL"]); ?>portal.js" type="text/javascript"></script>
</head>

<body id="nv_portal" class="pg_index" onkeydown="if(event.keyCode==27) return false;">
    <div id="append_parent"></div>
    <div id="ajaxwaitid"></div>
    <div id="headnav">
        <div id="topbar" class="cl">
            <div class="wp">
                <!-- 站点LOGO -->
                <div class="hd_logo">
                    <h2><a href="./" title="宠物领养网 Petly.net"><img src="<?php echo ($smarty["const"]["PIC_URL"]); ?>logo.png" alt="宠物领养网 Petly.net" border="0" /></a></h2>
                </div>

                <!-- 导航 -->
                <div class="nav">
                    <ul>

                        <li class="a" id="mn_portal"><a href="<?php echo ($smarty["const"]["/cwy/index.php/Home"]); ?>" hidefocus="true" title="Portal">首页<span>Portal</span></a>
                        </li>


                        <li id="mn_P1"><a href="<?php echo ($smarty["const"]["/cwy/index.php/Home"]); ?>/News/showlist">新闻</a>
                        </li>


                        <li id="mn_forum"><a href="<?php echo ($smarty["const"]["/cwy/index.php/Home"]); ?>/Forum/showlist" hidefocus="true" title="BBS">领养<span>BBS</span></a>
                        </li>


                        <li id="mn_P4"><a href="<?php echo ($smarty["const"]["/cwy/index.php/Home"]); ?>/Pet/showlist" hidefocus="true">宠物</a>
                        </li>


                        <li id="mn_P3"><a href="<?php echo ($smarty["const"]["/cwy/index.php/Home"]); ?>/User" hidefocus="true">个人中心</a>
                        </li>
                    </ul>
                </div>
                <!-- 用户信息 -->
                <div class="userbox">
                    <ul class="usernav user_part">
                        <a href="#" class="user_login" id="l">登录</a>
                        <a class="user_login" style="padding: 1px 0 0 0; margin: 0;">|</a>
                        <a href="member.php?mod=register" class="user_login" style="margin: 0;">注册</a>
                    </ul>
                    <div style="display:none">
                        <script src="<?php echo ($smarty["const"]["JS_URL"]); ?>logging.js" type="text/javascript"></script>
                        <form method="post" autocomplete="off" id="lsform" action="member.php?mod=logging&amp;action=login&amp;loginsubmit=yes&amp;infloat=yes&amp;lssubmit=yes" onsubmit="return lsSubmit();">
                            <div class="fastlg cl">
                                <span id="return_ls" style="display:none"></span>
                                <div class="y pns">
                                    <table cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td>
                                                <span class="ftid">
<select name="fastloginfield" id="ls_fastloginfield" width="40" tabindex="900">
<option value="username">用户名</option>
<option value="email">Email</option>
</select>
</span>
                                                <script type="text/javascript">
                                                    simulateSelect('ls_fastloginfield')
                                                </script>
                                            </td>
                                            <td>
                                                <input type="text" name="username" id="ls_username" autocomplete="off" class="px vm" tabindex="901" />
                                            </td>
                                            <td class="fastlg_l">
                                                <label for="ls_cookietime">
                                                    <input type="checkbox" name="cookietime" id="ls_cookietime" class="pc" value="2592000" tabindex="903" />自动登录</label>
                                            </td>
                                            <td>&nbsp;<a href="javascript:;" onclick="showWindow('login', 'member.php?mod=logging&action=login&viewlostpw=1')">找回密码</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="ls_password" class="z psw_w">密码</label>
                                            </td>
                                            <td>
                                                <input type="password" name="password" id="ls_password" class="px vm" autocomplete="off" tabindex="902" />
                                            </td>
                                            <td class="fastlg_l">
                                                <button type="submit" class="pn vm" tabindex="904" style="width: 75px;"><em>登录</em></button>
                                            </td>
                                            <td>&nbsp;<a href="member.php?mod=register" class="xi2 xw1">立即注册</a></td>
                                        </tr>
                                    </table>
                                    <input type="hidden" name="quickforward" value="yes" />
                                    <input type="hidden" name="handlekey" value="ls" />
                                </div>

                                <div class="fastlg_fm y" style="margin-right: 10px; padding-right: 10px">
                                    <p>
                                        <a href="http://www.petly.net/connect.php?mod=login&op=init&referer=portal.php&statfrom=login_simple"><img src="<?php echo ($smarty["const"]["PIC_URL"]); ?>qq_login.gif" class="vm" alt="QQ登录" /></a>
                                    </p>
                                    <p class="hm xg1" style="padding-top: 2px;">只需一步，快速开始</p>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
                <div id="scbar" class="cl">
                    <form id="scbar_form" method="post" autocomplete="off" onsubmit="searchFocus($('scbar_txt'))" action="search.php?searchsubmit=yes" target="_blank">
                        <input type="hidden" name="mod" id="scbar_mod" value="search" />
                        <input type="hidden" name="formhash" value="a462a3b9" />
                        <input type="hidden" name="srchtype" value="title" />
                        <input type="hidden" name="srhfid" value="0" />
                        <input type="hidden" name="srhlocality" value="portal::index" />
                        <table cellspacing="0" cellpadding="0">
                            <tr>
                                <td class="scbar_txt_td">
                                    <input type="text" name="srchtxt" id="scbar_txt" value="请输入搜索内容" autocomplete="off" speech />
                                </td>
                                <td class="scbar_type_td"><a href="javascript:;" id="scbar_type" class="xg1" onclick="showMenu(this.id)" hidefocus="true">搜索</a></td>
                                <td class="scbar_btn_td">
                                    <button type="submit" name="searchsubmit" id="scbar_btn" sc="1" class="pn pnc" value="true"><strong class="xi2">搜索</strong></button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
                <script type="text/javascript">
                    initSearchmenu('scbar', '');
                </script>
                <script type="text/javascript">
                    jQuery(function() {
                        jQuery("#scbar #scbar_txt").focus(function() {
                            jQuery("#scbar").addClass("bgchange");
                        }).blur(function() {
                            jQuery("#scbar").removeClass("bgchange");
                        });
                    })
                </script>
            </div>
        </div>
    </div>
    <div id="toptb" class="cl" style="display: none;">
        <div class="wp">
            <div class="z">

                <a href="javascript:;" onclick="setHomepage('http://www.petly.net/');">设为首页</a>

                <a href="http://www.petly.net/" onclick="addFavorite(this.href, '宠物缘 Petly.net');return false;">收藏本站</a>




            </div>
            <div class="y"> <a id="switchblind" href="javascript:;" onClick="toggleBlind(this)" title="开启辅助访问" class="switchblind">开启辅助访问</a>





            </div>
        </div>
    </div>



    <div id="qmenu_menu" class="p_pop blk" style="display: none;">
        <div class="ptm pbw hm">
            请 <a href="javascript:;" class="xi2" onclick="lsSubmit()"><strong>登录</strong></a> 后使用快捷导航
            <br />没有帐号？<a href="member.php?mod=register" class="xi2 xw1">立即注册</a>
        </div>
        <div id="fjump_menu" class="btda"></div>
    </div>



    <!-- 二级导航 -->
    <div class="sub_nav">
        <div class="p_pop h_pop" id="mn_userapp_menu" style="display: none"></div>
    </div>


    <!-- 搜索筛选 -->
    <ul id="scbar_type_menu" class="p_pop" style="display: none;">
        <li><a href="javascript:;" rel="article">文章</a></li>
        <li><a href="javascript:;" rel="forum" class="curtype">帖子</a></li>
        <li><a href="javascript:;" rel="user">用户</a></li>
    </ul>
    <script type="text/javascript">
        initSearchmenu('scbar', '');
    </script>


    <!-- 用户菜单 -->
    <ul class="sub_menu" id="m_menu" style="display: none;">








        <li><a href="home.php?mod=magic" style="background-image:url(images/magic_b.png) !important">道具</a></li>


        <li><a href="home.php?mod=medal" style="background-image:url(images/medal_b.png) !important">勋章</a></li>


        <li><a href="home.php?mod=task" style="background-image:url(images/task_b.png) !important">任务</a></li>


        <li><a href="portal.php" style="background-image:url(images/portal_b.png) !important">门户</a></li>


        <li><a href="home.php?mod=spacecp">设置</a></li>



        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li><a href="member.php?mod=logging&amp;action=logout&amp;formhash=a462a3b9">退出</a></li>
    </ul>
    <ul class="sub_menu" id="l_menu" style="display: none;">

        <!-- 第三方登录 -->
        <li class="user_list app_login"><a href="connect.php?mod=login&amp;op=init&amp;referer=forum.php&amp;statfrom=login"><i class="i_qq"></i>腾讯QQ</a></li>
        <li class="user_list app_login"><a href="wechat-login.html"><i class="i_wb"></i>微信登录</a></li>
    </ul>
    <div class="wp" style="display:none;">
        <!-- 隐藏导航AD位置 -->


    </div>



    <div class="wrap_box cl">
        <div id="wp" class="wp time_wp cl">

            <link rel="stylesheet" type="text/css" id="time_diy" href="<?php echo ($smarty["const"]["CSS_URL"]); ?>portaldiy.css" />
            <style id="diy_style" type="text/css"></style>
            <script src="<?php echo ($smarty["const"]["JS_URL"]); ?>jquery.superslide_1.js" type="text/javascript" type="text/javascript"></script>
            <script src="<?php echo ($smarty["const"]["JS_URL"]); ?>wb.js" type="text/javascript" type="text/javascript" charset="utf-8"></script>

            <div class="index-main lph-main cl">
                <!--[diy=diy_top]-->
                <div id="diy_top" class="area">
                    <div id="frameaJG7sV" class="frame move-span cl frame-1">
                        <div id="frameaJG7sV_left" class="column frame-1-c">
                            <div id="frameaJG7sV_left_temp" class="move-span temp"></div>
                            <div id="portal_block_18" class="block move-span">
                                <div id="portal_block_18_content" class="dxb_bc">
                                    <!--<div style="overflow: hidden;" class="latestnews cl">
                                        <ul id="miniNewsRegion cl">
                                            <li><img src="<?php echo ($smarty["const"]["PIC_URL"]); ?>symbol-1.png" alt="当贪吃狗狗和贪吃小朋友拼命争夺一块饼干时，结果已笑喷"><a href="article-3023-1.html" target="_blank" title="当贪吃狗狗和贪吃小朋友拼命争夺一块饼干时，结果已笑喷">当贪吃狗狗和贪吃小朋友拼命争夺一块饼干时，结果已笑 / <span style="color: #888888;">2016-01-25</span><em style="padding: 0 0 0 5px; color: #00AA98;">[查看]</em></a></li>
                                        </ul>
                                    </div>-->
                                    <div class="sinaweibo">
                                        <wb:follow-button uid="1412067770" type="red_2" width="136" height="24"></wb:follow-button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--[/diy]-->
                <div class="inner cl">
                    <div class="index-left lph-left">
                        <div class="idx-hotlists cl">
                            <!--[diy=diy1]-->
                            <div id="diy1" class="area">
                                <div id="framefGcrjA" class="frame move-span cl frame-1">
                                    <div id="framefGcrjA_left" class="column frame-1-c">
                                        <div id="framefGcrjA_left_temp" class="move-span temp"></div>
                                        <div id="portal_block_15" class="block move-span">
                                            <div id="portal_block_15_content" class="dxb_bc">
                                                <div class="m-slide">
                                                    <ul class="img">
                                                        <li>
                                                            <a href="article-3022-1.html" target="_blank" title="两只乌龟因严寒被冻水中 网友:它们还有救吗"><img src="<?php echo ($smarty["const"]["PIC_URL"]); ?>220944wf9y7wlwwwdx4467.jpg" width="638px" height="365px" /></a>
                                                            <div class="infos"><a href="article-3022-1.html">两只乌龟因严寒被冻水中 网友:它们还有救吗</a></div>
                                                        </li>
                                                        <li>
                                                            <a href="article-3021-1.html" target="_blank" title="台湾男子盗窃被判刑 家中小狗警局痴等"><img src="<?php echo ($smarty["const"]["PIC_URL"]); ?>220859bfy3nmg39fmmlzs9.jpg" width="638px" height="365px" /></a>
                                                            <div class="infos"><a href="article-3021-1.html">台湾男子盗窃被判刑 家中小狗警局痴等</a></div>
                                                        </li>
                                                        <li>
                                                            <a href="article-3016-1.html" target="_blank" title="职业模特狗狗又出新片 COS&quot;英国女王&quot;发表演"><img src="<?php echo ($smarty["const"]["PIC_URL"]); ?>001417pcjcvdocju78o98p.png" width="638px" height="365px" /></a>
                                                            <div class="infos"><a href="article-3016-1.html">职业模特狗狗又出新片 COS&quot;英国女王&quot;发表演</a></div>
                                                        </li>
                                                        <li>
                                                            <a href="article-3015-1.html" target="_blank" title="猫咪被纸杯罩头难脱身 好心狗狗“拔杯相助"><img src="<?php echo ($smarty["const"]["PIC_URL"]); ?>001237w78g03l4ln77kn5n.jpg" width="638px" height="365px" /></a>
                                                            <div class="infos"><a href="article-3015-1.html">猫咪被纸杯罩头难脱身 好心狗狗“拔杯相助</a></div>
                                                        </li>
                                                    </ul>
                                                    <div id="ifocus_opdiv"></div>
                                                    <ul class="tab">
                                                        <li class="on" style="width: 130px;">
                                                            <div class="color1">两只乌龟因严寒被冻水中 网友:它们还有救吗</div>
                                                        </li>
                                                        <li class="on" style="width: 130px;">
                                                            <div class="color1">台湾男子盗窃被判刑 家中小狗警局痴等</div>
                                                        </li>
                                                        <li class="on" style="width: 130px;">
                                                            <div class="color1">职业模特狗狗又出新片 COS&quot;英国女王&quot;发表演</div>
                                                        </li>
                                                        <li class="on" style="width: 130px;">
                                                            <div class="color1">猫咪被纸杯罩头难脱身 好心狗狗“拔杯相助</div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--[/diy]-->
                        </div>
                        <script type="text/javascript">
                            jQuery.noConflict();
                            jQuery(".m-slide").slide({
                                titCell: ".tab li",
                                mainCell: ".img",
                                effect: "fold",
                                autoPlay: true
                            });
                        </script>
                        <div class="idx-selLead cl">
                            <!--[diy=diy3]-->
                            <div id="diy3" class="area">
                                <div id="frameOf8SFW" class="frame move-span cl frame-1">
                                    <div id="frameOf8SFW_left" class="column frame-1-c">
                                        <div id="frameOf8SFW_left_temp" class="move-span temp"></div>
                                        <div id="portal_block_3" class="block move-span">
                                            <div id="portal_block_3_content" class="dxb_bc">
                                                <div class="tips">
                                                    <h4><span>精选导读</span></h4>
                                                </div>
                                                <div class="list">
                                                    <div class="items pr15 mr13 pb15 items-borb cl">
                                                        <div class="pic">
                                                            <a href="article-3023-1.html" target="_blank"> <img src="<?php echo ($smarty["const"]["PIC_URL"]); ?>5c7e2776f5f3fa1ff46358f1d32ad2e0.jpg" alt="当贪吃狗狗和贪吃小朋友拼命争夺一块饼干时，结果已笑喷" width="168" height="112" /> </a>
                                                        </div>
                                                        <div class="txt">
                                                            <h1> <a href="article-3023-1.html" target="_blank">当贪吃狗狗和贪吃小朋友拼命争夺一块饼干时</a> </h1>
                                                            <p>　自然社会中，弱肉强食、适者生存是自然规律，在人类社会中，这种现象更是屡见不鲜。</p>
                                                        </div>
                                                    </div>
                                                    <div class="items-line"></div>
                                                    <div class="items ml14 pl15 pb15 cl  items-borb">
                                                        <div class="pic">
                                                            <a href="article-3022-1.html" target="_blank"> <img src="<?php echo ($smarty["const"]["PIC_URL"]); ?>fc696178146fdf246b2f4fe9b6e54618.jpg" alt="两只乌龟因严寒被冻水中 网友:它们还有救吗" width="168" height="112" /> </a>
                                                        </div>
                                                        <div class="txt">
                                                            <h1> <a href="article-3022-1.html" target="_blank">两只乌龟因严寒被冻水中 网友:它们还有救吗</a> </h1>
                                                            <p>今天，这两只小乌龟被冻在一块厚实的冰里的照片“广为流传”！好多人都在问，这两只乌</p>
                                                        </div>
                                                    </div>
                                                    <div class="items pr15 mr13 cl">
                                                        <div class="pic">
                                                            <a href="article-3021-1.html" target="_blank"> <img src="<?php echo ($smarty["const"]["PIC_URL"]); ?>33256f1b747f65edd02ebbc17e08d32e.jpg" alt="台湾男子盗窃被判刑 家中小狗警局痴等" width="168" height="112" /> </a>
                                                        </div>
                                                        <div class="txt">
                                                            <h1> <a href="article-3021-1.html" target="_blank">台湾男子盗窃被判刑 家中小狗警局痴等</a> </h1>
                                                            <p>中国台湾网1月22日讯　据台湾中时电子报报道，淡水51岁陈姓通缉犯，19日在家中遭警方</p>
                                                        </div>
                                                    </div>
                                                    <div class="items-line"></div>
                                                    <div class="items ml14 pl15 cl">
                                                        <div class="pic">
                                                            <a href="article-3019-1.html" target="_blank"> <img src="<?php echo ($smarty["const"]["PIC_URL"]); ?>ce971e2da5125e1057fde8327fd95540.jpg" alt="和哈利波特的宠物一起喝咖啡" width="168" height="112" /> </a>
                                                        </div>
                                                        <div class="txt">
                                                            <h1> <a href="article-3019-1.html" target="_blank">和哈利波特的宠物一起喝咖啡</a> </h1>
                                                            <p>猫头鹰在欧美和日本被当作”幸运鸟“，可是别说在家饲养了，平常连看到它都很难。于是</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--[/diy]-->
                        </div>
                        <div class="lph-pageList index-pageList">
                            <!--[diy=diy5]-->
                            <div id="diy5" class="area">
                                <div id="frameceezI4" class="frame move-span cl frame-1">
                                    <div id="frameceezI4_left" class="column frame-1-c">
                                        <div id="frameceezI4_left_temp" class="move-span temp"></div>
                                        <div id="portal_block_4" class="block move-span">
                                            <div id="portal_block_4_content" class="dxb_bc">
                                                <div class="tips cl">
                                                    <h4><span class="yel">最新</span><span class="gra">领养</span></h4>
                                                    <div class="count"> <i></i> 今日更新<strong>0</strong>篇 <em></em> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="framegNjNUu" class="frame move-span cl frame-1">
                                    <div id="framegNjNUu_left" class="column frame-1-c">
                                        <div id="framegNjNUu_left_temp" class="move-span temp"></div>
                                        <div id="portal_block_5" class="block move-span">
                                            <div id="portal_block_5_content" class="dxb_bc">
                                                <div class="wrap cl">
                                                    <ul>
                                                        <li class="pbox cl">
                                                            <div class="img"> <a class="sort" href="forum.php?mod=forumdisplay&fid=42" target="_blank"> 福建宠物领养 </a>
                                                                <a href="thread-9466-1-1.html" target="_blank"> <img style="display: inline;" class="lazy" src="<?php echo ($smarty["const"]["PIC_URL"]); ?>1a24cc7827db4804aa50f02718d6cfb1.jpg" title="厦门宠物招领" width="210" height="140" /> </a>
                                                            </div>
                                                            <div class="word">
                                                                <a href="thread-9466-1-1.html" target="_blank">
                                                                    <h2>厦门宠物招领</h2>
                                                                </a>
                                                                <div class="info">
                                                                    <div class="aut" style="float: left; margin: 0;">
                                                                        <a href="home.php?mod=space&uid=12702" target="_blank"> <img src="<?php echo ($smarty["const"]["PIC_URL"]); ?>avatar.php" width="26" height="26" /> <span>cheryl313</span> </a>
                                                                    </div>
                                                                    <div class="time" style="float: left; margin: 0 0 0 20px;"> <i></i> <span>2016-01-26</span></div>
                                                                    <div class="tags" style="margin: 0 0 0 20px;"> <i></i> <a href="thread-9466-1-1.html" title="64人围" target="_blank">64人围观</a></div>
                                                                </div>
                                                                <div class="des">
                                                                    本人厦大学生（翔安校区），1.21在厦大西村附近捡到一只黑的小土狗，带她做过检查，无病，大概2-3个月大。有爱狗人士想要领养吗？希望是家住厦门，有 ...
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="pbox cl">
                                                            <div class="img"> <a class="sort" href="forum.php?mod=forumdisplay&fid=41" target="_blank"> 安徽宠物领养 </a>
                                                                <a href="thread-9464-1-1.html" target="_blank"> <img style="display: inline;" class="lazy" src="<?php echo ($smarty["const"]["PIC_URL"]); ?>6d42087c3aa1448d77ec17004e15cff9.jpg" title="喜欢猫猫会全心全意照顾它，希望能领养一只" width="210" height="140" /> </a>
                                                            </div>
                                                            <div class="word">
                                                                <a href="thread-9464-1-1.html" target="_blank">
                                                                    <h2>喜欢猫猫会全心全意照顾它，希望能领养一只</h2>
                                                                </a>
                                                                <div class="info">
                                                                    <div class="aut" style="float: left; margin: 0;">
                                                                        <a href="home.php?mod=space&uid=12668" target="_blank"> <img src="<?php echo ($smarty["const"]["PIC_URL"]); ?>avatar_1.php" width="26" height="26" /> <span>人甜脾气好</span> </a>
                                                                    </div>
                                                                    <div class="time" style="float: left; margin: 0 0 0 20px;"> <i></i> <span>2016-01-25</span></div>
                                                                    <div class="tags" style="margin: 0 0 0 20px;"> <i></i> <a href="thread-9464-1-1.html" title="73人围" target="_blank">73人围观</a></div>
                                                                </div>
                                                                <div class="des">
                                                                    今年21岁，女，在安徽省淮北市居住。家里有房子有空间，希望能领养一只猫咪 联系我可以加我QQ347950684~谢谢好心人，我会好好照顾猫咪的 ...
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="pbox cl">
                                                            <div class="img"> <a class="sort" href="forum.php?mod=forumdisplay&fid=2" target="_blank"> 北京宠物领养 </a>
                                                                <a href="thread-9455-1-1.html" target="_blank"> <img style="display: inline;" class="lazy" src="<?php echo ($smarty["const"]["PIC_URL"]); ?>e356de577ef84b5a1078a4921a8bae81.jpg" title="北京 天通苑 燕丹村 两只猫求领养" width="210" height="140" /> </a>
                                                            </div>
                                                            <div class="word">
                                                                <a href="thread-9455-1-1.html" target="_blank">
                                                                    <h2>北京 天通苑 燕丹村 两只猫求领养</h2>
                                                                </a>
                                                                <div class="info">
                                                                    <div class="aut" style="float: left; margin: 0;">
                                                                        <a href="home.php?mod=space&uid=12601" target="_blank"> <img src="<?php echo ($smarty["const"]["PIC_URL"]); ?>avatar_2.php" width="26" height="26" /> <span>燕丹猫领养</span> </a>
                                                                    </div>
                                                                    <div class="time" style="float: left; margin: 0 0 0 20px;"> <i></i> <span>2016-01-24</span></div>
                                                                    <div class="tags" style="margin: 0 0 0 20px;"> <i></i> <a href="thread-9455-1-1.html" title="258人围" target="_blank">258人围观</a></div>
                                                                </div>
                                                                <div class="des">
                                                                    已经送出去了 ...
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="pbox cl">
                                                            <div class="img"> <a class="sort" href="forum.php?mod=forumdisplay&fid=60" target="_blank"> 陕西宠物领养 </a>
                                                                <a href="thread-9454-1-1.html" target="_blank"> <img style="display: inline;" class="lazy" src="<?php echo ($smarty["const"]["PIC_URL"]); ?>2b91357b9498269c07c0891263dbf0ac.jpg" title="小土狗一只求领养" width="210" height="140" /> </a>
                                                            </div>
                                                            <div class="word">
                                                                <a href="thread-9454-1-1.html" target="_blank">
                                                                    <h2>小土狗一只求领养</h2>
                                                                </a>
                                                                <div class="info">
                                                                    <div class="aut" style="float: left; margin: 0;">
                                                                        <a href="home.php?mod=space&uid=12596" target="_blank"> <img src="<?php echo ($smarty["const"]["PIC_URL"]); ?>avatar_3.php" width="26" height="26" /> <span>溴吖頭ツ</span> </a>
                                                                    </div>
                                                                    <div class="time" style="float: left; margin: 0 0 0 20px;"> <i></i> <span>2016-01-24</span></div>
                                                                    <div class="tags" style="margin: 0 0 0 20px;"> <i></i> <a href="thread-9454-1-1.html" title="286人围" target="_blank">286人围观</a></div>
                                                                </div>
                                                                <div class="des">
                                                                    2016.1.15跟孩子回家时在小区门口碰上的，小狗当时就一直跟着我们回家了，本来想自己就把它收养了，但是这两天检查出来怀孕了，以后可能没有精力再养 ...
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="pbox cl">
                                                            <div class="img"> <a class="sort" href="forum.php?mod=forumdisplay&fid=53" target="_blank"> 湖北宠物领养 </a>
                                                                <a href="thread-9446-1-1.html" target="_blank"> <img style="display: inline;" class="lazy" src="<?php echo ($smarty["const"]["PIC_URL"]); ?>73d16a4901b6375abae5459e41fa8904.jpg" title="主人，带我走吧" width="210" height="140" /> </a>
                                                            </div>
                                                            <div class="word">
                                                                <a href="thread-9446-1-1.html" target="_blank">
                                                                    <h2>主人，带我走吧</h2>
                                                                </a>
                                                                <div class="info">
                                                                    <div class="aut" style="float: left; margin: 0;">
                                                                        <a href="home.php?mod=space&uid=12546" target="_blank"> <img src="<?php echo ($smarty["const"]["PIC_URL"]); ?>avatar_4.php" width="26" height="26" /> <span>遇见</span> </a>
                                                                    </div>
                                                                    <div class="time" style="float: left; margin: 0 0 0 20px;"> <i></i> <span>2016-01-23</span></div>
                                                                    <div class="tags" style="margin: 0 0 0 20px;"> <i></i> <a href="thread-9446-1-1.html" title="477人围" target="_blank">477人围观</a></div>
                                                                </div>
                                                                <div class="des">
                                                                    因为快放寒假了，没时间照顾。希望有责任有爱心的人，领养小狗。有意者联系qq：1132545940 ...
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="pbox cl">
                                                            <div class="img"> <a class="sort" href="forum.php?mod=forumdisplay&fid=56" target="_blank"> 四川宠物领养 </a>
                                                                <a href="thread-9439-1-1.html" target="_blank"> <img style="display: inline;" class="lazy" src="<?php echo ($smarty["const"]["PIC_URL"]); ?>2fbd9b8f98db38351fd9f6427946780f.jpg" title="家养田园小猫求收养" width="210" height="140" /> </a>
                                                            </div>
                                                            <div class="word">
                                                                <a href="thread-9439-1-1.html" target="_blank">
                                                                    <h2>家养田园小猫求收养</h2>
                                                                </a>
                                                                <div class="info">
                                                                    <div class="aut" style="float: left; margin: 0;">
                                                                        <a href="home.php?mod=space&uid=12472" target="_blank"> <img src="<?php echo ($smarty["const"]["PIC_URL"]); ?>avatar_5.php" width="26" height="26" /> <span>muyun459</span> </a>
                                                                    </div>
                                                                    <div class="time" style="float: left; margin: 0 0 0 20px;"> <i></i> <span>2016-01-21</span></div>
                                                                    <div class="tags" style="margin: 0 0 0 20px;"> <i></i> <a href="thread-9439-1-1.html" title="434人围" target="_blank">434人围观</a></div>
                                                                </div>
                                                                <div class="des">
                                                                    3个月前我遇见她，看到可爱可怜就收养下来了，由于是学生放假没法继续养她了，所以希望有好心的朋友给她一个新家。 我给她买了全套的猫砂盆，猫砂，猫 ...
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="pbox cl">
                                                            <div class="img"> <a class="sort" href="forum.php?mod=forumdisplay&fid=2" target="_blank"> 北京宠物领养 </a>
                                                                <a href="thread-9423-1-1.html" target="_blank"> <img style="display: inline;" class="lazy" src="<?php echo ($smarty["const"]["PIC_URL"]); ?>0233782b0a2016f679b6c989f635ab07.jpg" title="可爱小狗狗找寻爱心主人啦" width="210" height="140" /> </a>
                                                            </div>
                                                            <div class="word">
                                                                <a href="thread-9423-1-1.html" target="_blank">
                                                                    <h2>可爱小狗狗找寻爱心主人啦</h2>
                                                                </a>
                                                                <div class="info">
                                                                    <div class="aut" style="float: left; margin: 0;">
                                                                        <a href="home.php?mod=space&uid=10484" target="_blank"> <img src="<?php echo ($smarty["const"]["PIC_URL"]); ?>avatar_6.php" width="26" height="26" /> <span>bamgaga</span> </a>
                                                                    </div>
                                                                    <div class="time" style="float: left; margin: 0 0 0 20px;"> <i></i> <span>2016-01-19</span></div>
                                                                    <div class="tags" style="margin: 0 0 0 20px;"> <i></i> <a href="thread-9423-1-1.html" title="1830人围" target="_blank">1830人围观</a></div>
                                                                </div>
                                                                <div class="des">
                                                                    大家好！是这么回事，狗妈妈迷路了找不到家啦！被我们一楼的住户收留了，他家开汗蒸房也许挺忙的，顾不上这条母狗，怀了小狗，共产下八只小狗狗，目前 ...
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="pbox cl">
                                                            <div class="img"> <a class="sort" href="forum.php?mod=forumdisplay&fid=54" target="_blank"> 辽宁宠物领养 </a>
                                                                <a href="thread-9416-1-1.html" target="_blank"> <img style="display: inline;" class="lazy" src="<?php echo ($smarty["const"]["PIC_URL"]); ?>558df272725b80ce72090a521fdb5e2c.jpg" title="猫咪求好心人领养" width="210" height="140" /> </a>
                                                            </div>
                                                            <div class="word">
                                                                <a href="thread-9416-1-1.html" target="_blank">
                                                                    <h2>猫咪求好心人领养</h2>
                                                                </a>
                                                                <div class="info">
                                                                    <div class="aut" style="float: left; margin: 0;">
                                                                        <a href="home.php?mod=space&uid=12268" target="_blank"> <img src="<?php echo ($smarty["const"]["PIC_URL"]); ?>avatar_7.php" width="26" height="26" /> <span>xy19610</span> </a>
                                                                    </div>
                                                                    <div class="time" style="float: left; margin: 0 0 0 20px;"> <i></i> <span>2016-01-18</span></div>
                                                                    <div class="tags" style="margin: 0 0 0 20px;"> <i></i> <a href="thread-9416-1-1.html" title="668人围" target="_blank">668人围观</a></div>
                                                                </div>
                                                                <div class="des">
                                                                    有三只小猫和猫妈妈，因原主人出国了，所以寻求好心人领养，要求对猫咪不离不弃，大连本地人，有能力照顾猫咪，可以接受定期询问，猫妈妈一岁，猫宝宝 ...
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="pbox cl">
                                                            <div class="img"> <a class="sort" href="forum.php?mod=forumdisplay&fid=47" target="_blank"> 天津宠物领养 </a>
                                                                <a href="thread-9408-1-1.html" target="_blank"> <img style="display: inline;" class="lazy" src="<?php echo ($smarty["const"]["PIC_URL"]); ?>d64ff5dee5e311073b9875d20f0cc5fb.jpg" title="半岁小帅哥求个温暖的家" width="210" height="140" /> </a>
                                                            </div>
                                                            <div class="word">
                                                                <a href="thread-9408-1-1.html" target="_blank">
                                                                    <h2>半岁小帅哥求个温暖的家</h2>
                                                                </a>
                                                                <div class="info">
                                                                    <div class="aut" style="float: left; margin: 0;">
                                                                        <a href="home.php?mod=space&uid=12217" target="_blank"> <img src="<?php echo ($smarty["const"]["PIC_URL"]); ?>avatar_8.php" width="26" height="26" /> <span>徐芝麻</span> </a>
                                                                    </div>
                                                                    <div class="time" style="float: left; margin: 0 0 0 20px;"> <i></i> <span>2016-01-18</span></div>
                                                                    <div class="tags" style="margin: 0 0 0 20px;"> <i></i> <a href="thread-9408-1-1.html" title="885人围" target="_blank">885人围观</a></div>
                                                                </div>
                                                                <div class="des">
                                                                    狗狗是我九月份在楼道里捡的，在家养了几个月，现在差不多半岁了，由于工作原因，我没时间去照料他，我不想他再流浪了。 狗狗名字叫布丁，帅哥，活泼 ...
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="pbox cl">
                                                            <div class="img"> <a class="sort" href="forum.php?mod=forumdisplay&fid=2" target="_blank"> 北京宠物领养 </a>
                                                                <a href="thread-9397-1-1.html" target="_blank"> <img style="display: inline;" class="lazy" src="<?php echo ($smarty["const"]["PIC_URL"]); ?>6583b067f9578dde2d4d07eab2716e71.jpg" title="8岁哈士奇妹妹，因有宝宝降生求北京好心人领养（附图）" width="210" height="140" /> </a>
                                                            </div>
                                                            <div class="word">
                                                                <a href="thread-9397-1-1.html" target="_blank">
                                                                    <h2>8岁哈士奇妹妹，因有宝宝降生求北京好心人领养（附图</h2>
                                                                </a>
                                                                <div class="info">
                                                                    <div class="aut" style="float: left; margin: 0;">
                                                                        <a href="home.php?mod=space&uid=12182" target="_blank"> <img src="<?php echo ($smarty["const"]["PIC_URL"]); ?>avatar_9.php" width="26" height="26" /> <span>小东西</span> </a>
                                                                    </div>
                                                                    <div class="time" style="float: left; margin: 0 0 0 20px;"> <i></i> <span>2016-01-17</span></div>
                                                                    <div class="tags" style="margin: 0 0 0 20px;"> <i></i> <a href="thread-9397-1-1.html" title="1534人围" target="_blank">1534人围观</a></div>
                                                                </div>
                                                                <div class="des">
                                                                    我家有黑白色母哈士奇一只，从2007年它3个月开始饲养，目前8岁了体重约40斤，每年按时打疫苗，未生过小狗。性格活泼，特别喜欢和人玩耍。 现因家中 ...
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="framePYWyPy" class="frame move-span cl frame-1">
                                    <div id="framePYWyPy_left" class="column frame-1-c">
                                        <div id="framePYWyPy_left_temp" class="move-span temp"></div>
                                        <div id="portal_block_6" class="block move-span">
                                            <div id="portal_block_6_content" class="dxb_bc">
                                                <div class="portal_block_summary">
                                                    <div class="read_more cl">
                                                        <a href="#">阅读更多 +</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--[/diy]-->
                        </div>
                    </div>
                    <div class="lph-right">
                        <!--[diy=diy6]-->
                        <div id="diy6" class="area">
                            <div id="framem3b5jD" class="frame move-span cl frame-1">
                                <div id="framem3b5jD_left" class="column frame-1-c">
                                    <div id="framem3b5jD_left_temp" class="move-span temp"></div>
                                    <div id="portal_block_7" class="block move-span">
                                        <div id="portal_block_7_content" class="dxb_bc">
                                            <div class="portal_block_summary">
                                                <div class="right-box">
                                                    <a rel="nofollow" href="#" target="_blank"><img src="<?php echo ($smarty["const"]["PIC_URL"]); ?>a1.jpg" width="278"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--[/diy]-->
                        <div class="kuaixun right-box">
                            <!--[diy=diy7]-->
                            <div id="diy7" class="area">
                                <div id="framexLt7b1" class="frame move-span cl frame-1">
                                    <div id="framexLt7b1_left" class="column frame-1-c">
                                        <div id="framexLt7b1_left_temp" class="move-span temp"></div>
                                        <div id="portal_block_8" class="block move-span">
                                            <div id="portal_block_8_content" class="dxb_bc">
                                                <div class="right-box-title">
                                                    <h3>宠物新闻</h3>
                                                    <a href="#" target="_blank">MORE></a> </div>
                                                <ul class="kx-ul">
                                                    <li class="cl hov">
                                                        <a href="article-3023-1.html" target="_blank">
                                                            <div class="time">06:10</div>
                                                            <div class="tits">当贪吃狗狗和贪吃小朋友拼命争夺一块饼干时，结果已笑</div>
                                                        </a>
                                                    </li>
                                                    <li class="cl">
                                                        <a href="article-3022-1.html" target="_blank">
                                                            <div class="time">22:09</div>
                                                            <div class="tits">两只乌龟因严寒被冻水中 网友:它们还有救吗</div>
                                                        </a>
                                                    </li>
                                                    <li class="cl">
                                                        <a href="article-3021-1.html" target="_blank">
                                                            <div class="time">22:09</div>
                                                            <div class="tits">台湾男子盗窃被判刑 家中小狗警局痴等</div>
                                                        </a>
                                                    </li>
                                                    <li class="cl">
                                                        <a href="article-3020-1.html" target="_blank">
                                                            <div class="time">05:09</div>
                                                            <div class="tits">英女子带爱犬过年男友被咬死</div>
                                                        </a>
                                                    </li>
                                                    <li class="cl">
                                                        <a href="article-3019-1.html" target="_blank">
                                                            <div class="time">09:44</div>
                                                            <div class="tits">和哈利波特的宠物一起喝咖啡</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--[/diy]-->
                        </div>
                        <!--[diy=diy8]-->
                        <div id="diy8" class="area">
                            <div id="framec66D8T" class="frame move-span cl frame-1">
                                <div id="framec66D8T_left" class="column frame-1-c">
                                    <div id="framec66D8T_left_temp" class="move-span temp"></div>
                                    <div id="portal_block_9" class="block move-span">
                                        <div id="portal_block_9_content" class="dxb_bc">
                                            <div class="portal_block_summary">
                                                <div class="right-box">
                                                    <a href="http://www.beidaihe2008.com" target="_blank"> <img src="<?php echo ($smarty["const"]["PIC_URL"]); ?>a2.jpg"> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--[/diy]-->
                        <div class="hotauthor right-box">
                            <!--[diy=diy9]-->
                            <div id="diy9" class="area">
                                <div id="frameNE7KEB" class="frame move-span cl frame-1">
                                    <div id="frameNE7KEB_left" class="column frame-1-c">
                                        <div id="frameNE7KEB_left_temp" class="move-span temp"></div>
                                        <div id="portal_block_10" class="block move-span">
                                            <div id="portal_block_10_content" class="dxb_bc">
                                                <div class="daren cl" style="position:relative;"><span class="daren-new-icon"></span>
                                                    <span class="daren-new-icon"></span>
                                                    <h3 class="nav-font"><span>达人堂</span><em>爱宠物，更爱分享</em></h3>
                                                    <div class="home-daren-list-wrap">
                                                        <ul class="home-daren-list">
                                                            <li class="usercard">
                                                                <a target="_blank" class="avatar nslog" title="admin" href="home.php?mod=space&uid=1"><img src="<?php echo ($smarty["const"]["PIC_URL"]); ?>avatar_10.php" alt="admin" width="35" height="35" /></a>
                                                            </li>
                                                            <li class="usercard">
                                                                <a target="_blank" class="avatar nslog" title="一坨" href="home.php?mod=space&uid=7"><img src="<?php echo ($smarty["const"]["PIC_URL"]); ?>avatar_11.php" alt="一坨" width="35" height="35" /></a>
                                                            </li>
                                                            <li class="usercard">
                                                                <a target="_blank" class="avatar nslog" title="山顶洞人" href="home.php?mod=space&uid=12"><img src="<?php echo ($smarty["const"]["PIC_URL"]); ?>avatar_12.php" alt="山顶洞人" width="35" height="35" /></a>
                                                            </li>
                                                            <li class="usercard">
                                                                <a target="_blank" class="avatar nslog" title="天生胆小" href="home.php?mod=space&uid=4"><img src="<?php echo ($smarty["const"]["PIC_URL"]); ?>avatar_13.php" alt="天生胆小" width="35" height="35" /></a>
                                                            </li>
                                                            <li class="usercard">
                                                                <a target="_blank" class="avatar nslog" title="牛牛" href="home.php?mod=space&uid=16"><img src="<?php echo ($smarty["const"]["PIC_URL"]); ?>avatar_14.php" alt="牛牛" width="35" height="35" /></a>
                                                            </li>
                                                            <li class="usercard">
                                                                <a target="_blank" class="avatar nslog" title="王大贵" href="home.php?mod=space&uid=714"><img src="<?php echo ($smarty["const"]["PIC_URL"]); ?>avatar_15.php" alt="王大贵" width="35" height="35" /></a>
                                                            </li>
                                                            <li class="usercard">
                                                                <a target="_blank" class="avatar nslog" title="666666" href="home.php?mod=space&uid=217"><img src="<?php echo ($smarty["const"]["PIC_URL"]); ?>avatar_16.php" alt="666666" width="35" height="35" /></a>
                                                            </li>
                                                            <li class="usercard">
                                                                <a target="_blank" class="avatar nslog" title="llhkai" href="home.php?mod=space&uid=1617"><img src="<?php echo ($smarty["const"]["PIC_URL"]); ?>avatar_17.php" alt="llhkai" width="35" height="35" /></a>
                                                            </li>
                                                            <li class="home-daren-list-more"><a href="misc.php?mod=ranklist" target="_blank" class="nslog"><em>755位达人</em></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--[/diy]-->
                        </div>
                        <div class="express right-box cl">
                            <!--[diy=diy12]-->
                            <div id="diy12" class="area">
                                <div id="frameGv3jJr" class="frame move-span cl frame-1">
                                    <div id="frameGv3jJr_left" class="column frame-1-c">
                                        <div id="frameGv3jJr_left_temp" class="move-span temp"></div>
                                        <div id="portal_block_13" class="block move-span">
                                            <div id="portal_block_13_content" class="dxb_bc">
                                                <div class="right-box-title cl">
                                                    <h3>宠物百科</h3>
                                                    <a rel="nofollow" href="#" target="_blank">MORE></a>
                                                </div>
                                                <ul class="ep-ul">
                                                    <li>
                                                        <div class="img">
                                                            <a href="article-2490-1.html" target="_blank"> <img src="<?php echo ($smarty["const"]["PIC_URL"]); ?>d2ccdcaf49db660158dade9abf8d8d14.jpg" width="90" height="60" /> </a>
                                                        </div>
                                                        <div class="word">
                                                            <a href="article-2490-1.html" target="_blank">
                                                                <h4 class="name">巨型淡水龙虾</h4>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="img">
                                                            <a href="article-2432-1.html" target="_blank"> <img src="<?php echo ($smarty["const"]["PIC_URL"]); ?>d519cc8873b02e8c70865dac8079e64d.jpg" width="90" height="60" /> </a>
                                                        </div>
                                                        <div class="word">
                                                            <a href="article-2432-1.html" target="_blank">
                                                                <h4 class="name">黄金巨手虾</h4>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="img">
                                                            <a href="article-2431-1.html" target="_blank"> <img src="<?php echo ($smarty["const"]["PIC_URL"]); ?>01a3ca5c7b2dbc02f38ab8d3ce272903.jpg" width="90" height="60" /> </a>
                                                        </div>
                                                        <div class="word">
                                                            <a href="article-2431-1.html" target="_blank">
                                                                <h4 class="name">天空蓝魔</h4>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="img">
                                                            <a href="article-2430-1.html" target="_blank"> <img src="<?php echo ($smarty["const"]["PIC_URL"]); ?>3858bb1f6e8a1bfbbf5298be32368c4a.jpg" width="90" height="60" /> </a>
                                                        </div>
                                                        <div class="word">
                                                            <a href="article-2430-1.html" target="_blank">
                                                                <h4 class="name">樱花虾</h4>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="img">
                                                            <a href="article-2257-1.html" target="_blank"> <img src="<?php echo ($smarty["const"]["PIC_URL"]); ?>f801637a67c97822f32300cf6899d2b8.jpg" width="90" height="60" /> </a>
                                                        </div>
                                                        <div class="word">
                                                            <a href="article-2257-1.html" target="_blank">
                                                                <h4 class="name">迷你马</h4>
                                                            </a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="frameRYX5an" class="frame move-span cl frame-1">
                                    <div id="frameRYX5an_left" class="column frame-1-c">
                                        <div id="frameRYX5an_left_temp" class="move-span temp"></div>
                                        <div id="portal_block_14" class="block move-span">
                                            <div id="portal_block_14_content" class="dxb_bc">
                                                <div class="kuaixun cl" style="margin: 25px 0 0 0;">
                                                    <div class="right-box-title cl" style="margin: 0 0 5px 0;">
                                                        <h3>精彩回顾</h3>
                                                        <a href="#" target="_blank">MORE></a> </div>
                                                    <ul class="kx-ul cl">
                                                        <li class="cl">
                                                            <a href="thread-9471-1-1.html" target="_blank">
                                                                <div class="time">16:50</div>
                                                                <div class="tits">2个月大的小幼犬求爱心主人领养</div>
                                                            </a>
                                                        </li>
                                                        <li class="cl">
                                                            <a href="thread-9470-1-1.html" target="_blank">
                                                                <div class="time">15:53</div>
                                                                <div class="tits">求狗狗</div>
                                                            </a>
                                                        </li>
                                                        <li class="cl">
                                                            <a href="thread-9466-1-1.html" target="_blank">
                                                                <div class="time">10:13</div>
                                                                <div class="tits">厦门宠物招领</div>
                                                            </a>
                                                        </li>
                                                        <li class="cl">
                                                            <a href="thread-9468-1-1.html" target="_blank">
                                                                <div class="time">14:01</div>
                                                                <div class="tits">2岁半萨摩寻好人家</div>
                                                            </a>
                                                        </li>
                                                        <li class="cl">
                                                            <a href="thread-9467-1-1.html" target="_blank">
                                                                <div class="time">10:50</div>
                                                                <div class="tits">9个月小型犬。求领养</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--[/diy]-->
                        </div>
                        <div class="weixinewm right-box">
                            <div class="we-img"><img src="<?php echo ($smarty["const"]["PIC_URL"]); ?>lph-right-ewm.jpg"></div>
                        </div>
                        <!--[diy=diy13]-->
                        <div id="diy13" class="area"></div>
                        <!--[/diy]-->
                    </div>
                </div>
                <div class="mainother cl">
                    <!--[diy=diy_last]-->
                    <div id="diy_last" class="area">
                        <div id="frameA85PjY" class="frame move-span cl frame-1">
                            <div id="frameA85PjY_left" class="column frame-1-c">
                                <div id="frameA85PjY_left_temp" class="move-span temp"></div>
                                <div id="portal_block_16" class="block move-span">
                                    <div id="portal_block_16_content" class="dxb_bc">
                                        <div class="portal_block_summary">
                                            <div class="partners cl">
                                                <div class="partnerstitle"></div>
                                                <div class="partnersimg">
                                                    <a href="http://www.hao123.com/" target="_blank"><img src="<?php echo ($smarty["const"]["PIC_URL"]); ?>logo.jpg" alt="hao123上网导航" /></a>
                                                </div>
                                                <div class="partnersimg">
                                                    <a href="http://www.goumin.com/" target="_blank"><img src="<?php echo ($smarty["const"]["PIC_URL"]); ?>link_logo2.jpg" alt=""></a>
                                                </div>
                                                <div class="partnersimg">
                                                    <a href="http://www.aigou.com/" target="_blank"><img src="<?php echo ($smarty["const"]["PIC_URL"]); ?>link_logo3.jpg" alt=""></a>
                                                </div>
                                                <div class="partnersimg">
                                                    <a href="http://www.mypethome.com/" target="_blank"><img src="<?php echo ($smarty["const"]["PIC_URL"]); ?>link_logo4.jpg" alt=""></a>
                                                </div>
                                                <div class="partnersimg">
                                                    <a href="http://www.chinapet.com/" target="_blank"><img src="<?php echo ($smarty["const"]["PIC_URL"]); ?>link_logo5.jpg" alt=""></a>
                                                </div>
                                                <div class="partnersimg">
                                                    <a href="http://www.ttpet.com/" target="_blank"><img src="<?php echo ($smarty["const"]["PIC_URL"]); ?>link_logo6.jpg" alt=""></a>
                                                </div>
                                                <div class="partnersimg">
                                                    <a href="http://www.ichong123.com/" target="_blank"><img src="<?php echo ($smarty["const"]["PIC_URL"]); ?>link_logo7.jpg" alt=""></a>
                                                </div>
                                                <div class="partnersimg">
                                                    <a href="http://www.ganji.com/" target="_blank"><img src="<?php echo ($smarty["const"]["PIC_URL"]); ?>link_logo8.jpg" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="frameyEBJ7i" class="frame move-span cl frame-1">
                            <div id="frameyEBJ7i_left" class="column frame-1-c">
                                <div id="frameyEBJ7i_left_temp" class="move-span temp"></div>
                                <div id="portal_block_17" class="block move-span">
                                    <div id="portal_block_17_content" class="dxb_bc">
                                        <div class="portal_block_summary">
                                            <div class="links cl">
                                                <div class="linkstitle"></div>
                                                <ul class="ulfix cl">
                                                    <li><a href="http://www.fang.eu" target="_blank" class="url_main">房易优</a></li>
                                                    <li><a href="http://www.shcwhj.com" target="_blank" class="url_main">上海宠物婚介网</a></li>
                                                    <li><a href="http://www.shdog.net" target="_blank" class="url_main">上海狗狗网</a></li>
                                                    <li><a href="http://www.pet0513.com" target="_blank" class="url_main">南通宠物网</a></li>
                                                    <li><a href="http://www.goumin.com" target="_blank" class="url_main">狗民网</a></li>
                                                    <li><a href="http://www.aopets.com" target="_blank" class="url_main">宠物用品</a></li>
                                                    <li><a href="http://www.petkoo.com/" target="_blank" class="url_main">宠酷网</a></li>
                                                    <li><a href="http://www.muyangquan.com" target="_blank" class="url_main">中国牧羊犬网</a></li>
                                                    <li><a href="http://www.5iao.cn" target="_blank" class="url_main">中华藏獒网</a></li>
                                                    <li><a href="http://www.petkoo.com" target="_blank" class="url_main">宠酷网</a></li>
                                                    <li><a href="http://www.tcbaby.cn" target="_blank" class="url_main">成都天才宠物网</a></li>
                                                    <li><a href="http://www.zangao123.com" target="_blank" class="url_main">藏獒</a></li>
                                                    <li><a href="http://www.chongwu88.cn" target="_blank" class="url_main">中国宠物医院</a></li>
                                                    <li><a href="http://www.bjaichong.com" target="_blank" class="url_main">家宠易康</a></li>
                                                    <li><a href="http://www.ao66.com/" target="_blank" class="url_main">中国藏獒网</a></li>
                                                    <li><a href="http://www.dogmr.com" target="_blank" class="url_main">宠物美容学校</a></li>
                                                    <li><a href="http://www.58.com/zangao" target="_blank" class="url_main">藏獒</a></li>
                                                    <li><a href="http://www.ttpet.com" target="_blank" class="url_main">天天宠物网</a></li>
                                                    <li><a href="http://www.1dutm.com/" target="_blank" class="url_main">一度藏獒网</a></li>
                                                    <li><a href="http://www.zhonghuadubin.com" target="_blank" class="url_main">杜宾犬</a></li>
                                                    <li><a href="http://pet.pclady.com.cn/" target="_blank" class="url_main">pclady宠物</a></li>
                                                    <li><a href="http://www.maogoupet.cn" target="_blank" class="url_main">猫狗网</a></li>
                                                    <li><a href="http://www.pethr.com/" target="_blank" class="url_main">宠物人才网</a></li>
                                                    <li><a href="http://www.56pet.com/" target="_blank" class="url_main">56宠物网</a></li>
                                                    <li><a href="http://pet.pclady.com.cn/dog/" target="_blank" class="url_main">宠物狗专区</a></li>
                                                    <li><a href="http://www.yipets.com" target="_blank" class="url_main">忆宠物摄影工作室</a></li>
                                                    <li><a href="http://www.dog126.com/" target="_blank" class="url_main">淘狗网</a></li>
                                                    <li><a href="http://sh.58.com/pets.shtml" target="_blank" class="url_main">上海宠物网</a></li>
                                                    <li><a href="http://www.diaoshu.net" target="_blank" class="url_main">宠物貂</a></li>
                                                    <li><a href="http://sh.58.com/dog/" target="_blank" class="url_main">上海宠物狗</a></li>
                                                    <li><a href="http://www.szpet.com" target="_blank" class="url_main">深圳宠物网</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--[/diy]-->
                </div>
            </div>
            <script type="text/javascript">
                jQuery.noConflict();
                jQuery("#pbzttab .pbz-hd a").mouseover(function() {
                    var num = jQuery("#pbzttab .pbz-hd a").index(jQuery(this));
                    var this1 = jQuery(this);
                    jQuery("#pbzttab .pbz-bd .bd").css({
                        "display": "none"
                    });
                    jQuery("#pbzttab .pbz-bd .bd").eq(num).css({
                        "display": "block"
                    });
                    jQuery("#pbzttab .pbz-hd i").stop().animate({
                        "left": 0 + num * 139
                    }, {
                        easing: 'easeInExpo',
                        duration: 200,
                        complete: function() {
                            jQuery("#pbzttab .pbz-hd a").removeClass("cur")
                            this1.addClass("cur");
                        }
                    })
                })
                var yjkxFadeIn = function() {
                    var list = jQuery("#pbzttab .pbz-bd .bd ul li"),
                        length = list.length,
                        speed = 550,
                        time = 80,
                        maxCount = length - 1,
                        minCount = 0,
                        curCount = minCount,
                        initLeft = 20,
                        initLeftInterval = 5,
                        initOpcity = 0,
                        endOpcity = 1;

                    var fade = function() {
                        var sitv = setInterval(function() {
                            if (curCount > maxCount) {
                                clearInterval(sitv);
                            }
                            list.eq(curCount).fadeIn(speed);
                            curCount++;
                        }, time);
                    }
                    var star = function() {
                        fade();
                    }
                    star();
                }
                yjkxFadeIn();
            </script>
        </div>






        <div id="footer" class="footer cl">
            <div id="ft" class="wp cl">
                <div class="footer-left cl">&copy; 2001-2015 <a href="http://www.petly.com" target="_blank">宠物领养网</a> <a href="http://www.petly.net" target="_blank">PETLY</a> 备案：
                    <a href="http://www.miitbeian.gov.cn/" target="_blank">冀ICP备11010768号-4</a>

                    <script>
                        var _hmt = _hmt || [];
                        (function() {
                            var hm = document.createElement("script");
                            hm.src = "//hm.baidu.com/hm.js?a3e7dea0b0240cb3036db165aa11281b";
                            var s = document.getElementsByTagName("script")[0];
                            s.parentNode.insertBefore(hm, s);
                        })();
                    </script>
                </div>
                <div class="rgt">
                    <a href="/aboutus/index.html" target="_blank" title="">关于我们</a><span></span>
                    <a href="/aboutus/remind.html" target="_blank" title="">领养提示</a><span></span>
                    <a href="/aboutus/help.html" target="_blank" title="">使用帮助</a><span></span>
                    <a href="/aboutus/cooperation.html" target="_blank" title="">商务合作</a><span></span>
                    <a href="/aboutus/contact.html" target="_blank" title="">联系我们</a>
                </div>
            </div>










            <script src="<?php echo ($smarty["const"]["JS_URL"]); ?>home.php" type="text/javascript"></script>










            <div id="share">
                <a id="totop" title="">返回顶部</a>
            </div>
            <script type="text/javascript">
                jQuery.noConflict();
                jQuery(function() {
                    //首先将#back-to-top隐藏
                    jQuery("#totop").hide();
                    //当滚动条的位置处于距顶部100像素以下时，跳转链接出现，否则消失
                    jQuery(function() {
                        jQuery(window).scroll(function() {
                            if (jQuery(window).scrollTop() > 100) {
                                jQuery("#totop").fadeIn();
                            } else {
                                jQuery("#totop").fadeOut();
                            }
                        });
                        //当点击跳转链接后，回到页面顶部位置
                        jQuery("#totop").click(function() {
                            jQuery('body,html').animate({
                                scrollTop: 0
                            }, 500);
                            return false;
                        });
                    });
                });
            </script>

            <div id="discuz_tips" style="display:none;"></div>
            <script type="text/javascript">
                var tipsinfo = '46826411|X3.2|0.6||0||0|7|1453831744|9abdaa16595ea041a291790f7206bc60|2';
            </script>
            <script src="<?php echo ($smarty["const"]["JS_URL"]); ?>discuz_tips.js" type="text/javascript" charset="UTF-8"></script>
        </div>
    </div>
</body>

</html>