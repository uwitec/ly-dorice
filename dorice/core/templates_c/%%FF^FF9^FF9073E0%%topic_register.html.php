<?php /* Smarty version 2.6.26, created on 2013-01-24 08:45:54
         compiled from topic_register.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "topic_header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="con border">
    <div id="login" style="height:780px;">
        <div class="login_nax">
            <p>健康饮食是一种态度</p>
            <p class="current">预订也是一种态度</p>
        </div>
        <div class="reg_back">
            <div class="login_left_in">
                <h1>永和餐厅注册</h1>
                <ul>
                    <form action="" method="post" name="form" onsubmit="return checkform(this)">
                    <li>常用邮箱：<input type="text" name="email" class="input"/></li>
                    <li>真实姓名：<input type="text" name="name" class="input"/></li>
                    <li><span style="margin-left:26px;">性别：</span><input type="radio" name="sex" checked>先生<input type="radio" name="sex" style="margin-left:30px;">女士</li>
                    <li>手机号码：<input type="text" name="number" class="input"/></li>
                    <li>用户昵称：<input type="text" name="username" class="input"/></li>
                    <li>用户密码：<input type="password" name="password" class="input"/></li>
                    <li>确认密码：<input type="password" name="password" class="input"/></li>
                    <li><span style="margin-left:12px;">验证码：</span><input type="text" name="check" class="input"/></li>
                    <li><input type="checkbox" name="" class="mar" checked/>我已阅读并同意《用户协议》</li>
                    <li><input type="submit" name="submit" value="立即注册" class="mar button"/></li>
                    </form>
                    <li><span class="mar">已有新账号？<a href="index.php?mod=user&code=login">直接登录</a></span></li>
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