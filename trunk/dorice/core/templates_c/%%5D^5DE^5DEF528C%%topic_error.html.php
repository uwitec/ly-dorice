<?php /* Smarty version 2.6.26, created on 2013-01-31 03:53:02
         compiled from topic_error.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "topic_common_header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="logo">
    <div class="logo"><img src="templates/images/logo_1.jpg"/></div>
    <div class="clear"></div>
</div>
<div class="con border">
    <div class="error">
        <p class="ti">抱歉！页面没有找到！</p>
        <p class="con_r">页面将在<span id="t_time">5</span>秒钟之后跳转到永和首页，您也可以点击<a href="index.php">这里</a>立即跳转...</p>
    </div>
</div>
<script>
    t_change();
    function change_t(i){
        $("#t_time").html(i);
    }
    function t_change(){
        for(var i=5;i>0;i--){
            setTimeout('change_t('+i+')',(5-i)*1000);
        }
        setTimeout(t_link,5000);
    }
    function t_link(){
        window.location.href='index.php';
    }
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "topic_footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>