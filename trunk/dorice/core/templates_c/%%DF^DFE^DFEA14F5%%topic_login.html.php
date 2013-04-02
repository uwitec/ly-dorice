<?php /* Smarty version 2.6.26, created on 2013-01-23 09:14:12
         compiled from topic_login.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "topic_header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="con border">
    <div id="login">
        <div class="login_nax">
            <p>健康饮食是一种态度</p>
            <p class="current">预订也是一种态度</p>
        </div>
        <div class="login_left">
            <div class="login_left_in">
                <h1>永和餐厅登录</h1>
                <ul>
                    <form action="" method="post" name="form" onsubmit="return checkform(this)">
                    <li>账号：<input type="text" name="username" class="input"/></li>
                    <li>密码：<input type="password" name="password" class="input"/></li>
                    <li><input type="checkbox" name="" class="mar" checked/>记住密码 <span class="mar">忘记密码?</span></li>
                    <li><input type="submit" name="submit" value="登录" class="mar button"/></li>
                    </form>
                    <li><span class="mar">还没有注册？<a href="index.php?mod=user&code=register">注册新账号</a></span></li>
                </ul>
            </div>
        </div>
        <div class="login_ad">
            <img src="templates/images/login_ad.jpg"/>
        </div>
    </div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "topic_footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>