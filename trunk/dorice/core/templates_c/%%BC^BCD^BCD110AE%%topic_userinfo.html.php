<?php /* Smarty version 2.6.26, created on 2013-01-30 08:15:02
         compiled from topic_userinfo.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "topic_common_header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="logo" style="border-bottom:2px solid #F0ECEC">
    <div class="logo"><img src="templates/images/logo_1.jpg"/></div>
    <div id="user_menu">
        <ul>
            <li><a href="index.php"><span>我的首页</span></a></li>
            <li><a href="index.php"><span>永和首页</span></a></li>
        </ul>
    </div>
    <div class="clear"></div>
</div>
<div class="con border">
    <div class="user_m">
        <ul>
            <li style="margin-left:50px;"><a href="index.php?mod=user&code=u_setting"><i class="u_set"></i></a><p><a href="index.php?mod=user&code=u_setting">个人设置</a></p></li>
            <li><a href="index.php?mod=user&code=u_order"><i class="u_order"></i></a><p><a href="index.php?mod=user&code=u_order">我的订单</a></p></li>
            <li><a href="index.php?mod=user&code=u_save"><i class="u_save"></i></a><p><a href="index.php?mod=user&code=u_save">我的收藏</a></p></li>
            <li><a href="index.php?mod=user&code=u_comment"><i class="u_comment"></i></a><p><a href="index.php?mod=user&code=u_comment">我的评论</a></p></li>
            <li><a href="index.php?mod=user&code=u_jifen"><i class="u_jifen"></i></a><p><a href="index.php?mod=user&code=u_jifen">我的积分</a></p></li>
        </ul>
        <ul class="clear"></ul>
    </div>
</div>
<div class="con border">
    <div id="order_left">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "topic_user_info.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>
    <div id="order_right">
        <div class="user_info">
            <ul>
                <li><img src="templates/images/no-pic.jpg" width="190"/></li>
                <li class="style2">莫邪</li>
                <li>更新头像 更新资料</li>
                <li>当前积分：3000</li>
                <li>收藏（0）评论（0）</li>
            </ul>    
            <ul class="clear"></ul>
        </div>
        <div class="common ad" style="margin-top:10px;">
            <img src="templates/images/cul_2.png"/>
        </div>
    </div>
    <div class="clear"></div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "topic_footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>