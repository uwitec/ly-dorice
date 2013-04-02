<?php /* Smarty version 2.6.26, created on 2013-03-22 06:32:35
         compiled from topic_header.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "topic_common_header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="public logo_bg">
    <div class="logo"><a href=""><img src="templates/images/public/logo.png"/></a></div>
    <div class="city">
        <ul>
            <li><span class="cy">乌鲁木齐</span></li>
        </ul>
    </div>
    <div class="city_se">
        <ul>
            <li><a href="">北京</a></li><li><a href="">上海</a></li>
            <li><a href="">广州</a></li><li><a href="">深圳</a></li>
            <li><a href="">武汉</a></li><li><a href="">成都</a></li>
            <li><a href="">乌鲁木齐</a></li><li><a href="">杭州</a></li>
            <li><a href="">合肥</a></li><li><a href="">南京</a></li>
            <li><a href="">长沙</a></li><li><a href="">重庆</a></li><li><a href="">更多城市</a></li>
        </ul>
    </div>
    <script>
        $(".city,.city_se").mouseover(function(){
            $(".city_se").show();
        });
        $(".city,.city_se").mouseout(function(){
            $(".city_se").hide();
        });
    </script>
    <div class="tel style2">预订电话：400-177-177</div>
    <div class="clear"></div>
</div>
<div id="menu">
    <div class="m_b">
        <ul>
            <li <?php if ($this->_tpl_vars['mod'] == 'topic'): ?>class="current"<?php endif; ?>><a href="index.php"><span>首 页</span></a></li>
            <li <?php if ($this->_tpl_vars['mod'] == 'out'): ?>class="current"<?php endif; ?>><a href="index.php?mod=out"><span>叫外卖</span></a></li>
            <li <?php if ($this->_tpl_vars['mod'] == 'order'): ?>class="current"<?php endif; ?>><a href="index.php?mod=order"><span>订餐位</span></a></li>
            <li <?php if ($this->_tpl_vars['mod'] == 'privilege'): ?>class="current"<?php endif; ?>><a href="index.php?mod=privilege"><span>优 惠</span></a></li>
            <li <?php if ($this->_tpl_vars['mod'] == 'cate'): ?>class="current"<?php endif; ?>><a href="index.php?mod=cate"><span>美 食</span></a></li>
            <li <?php if ($this->_tpl_vars['mod'] == 'credits'): ?>class="current"<?php endif; ?>><a href="index.php?mod=credits"><span>积 分</span></a></li>
            <li <?php if ($this->_tpl_vars['mod'] == 'news'): ?>class="current"<?php endif; ?>><a href="index.php?mod=news"><span>资 讯</span></a></li>
        </ul>
    </div>
</div>
<div id="sea_bg" class="com_bg">
    <div id="search">
        <div class="sea_bg">
            <div class="s_list" id="s_list">
                <ul>
                    <li class="first last">餐厅</li>
                    <li>餐厅</li>
                    <li class="last">美食</li>
                </ul>
            </div>
            <script>
                $("#s_list").mouseover(function(){
                    $("#s_list li").show();
                    $("#s_list li:eq(0)").removeClass('last');
                    $("#s_list").addClass('s_cu');
                });
                $("#s_list").mouseout(function(){
                    $("#s_list li:eq(1)").hide();
                    $("#s_list li:eq(2)").hide();
                    $("#s_list li:eq(0)").addClass('last');
                    $("#s_list").removeClass('s_cu');
                });
                $("#s_list li:eq(1)").click(function(){
                    $("#s_list li:eq(0)").html('餐厅');
                    $("#s_list li:eq(1)").hide();
                    $("#s_list li:eq(2)").hide();
                    $("#s_list li:eq(0)").addClass('last');
                    $("#s_list").removeClass('s_cu');
                });
                $("#s_list li:eq(2)").click(function(){
                    $("#s_list li:eq(0)").html('美食');
                    $("#s_list li:eq(1)").hide();
                    $("#s_list li:eq(2)").hide();
                    $("#s_list li:eq(0)").addClass('last');
                    $("#s_list").removeClass('s_cu');
                });
            </script>
        </div>
        <input type="text" id="sea" class="in"/>
        <input type="button" id="sub"  value="搜 索" class="bu" onclick="search_all()"/>
        <div class="sea_hot">热门搜索：
            <span><a href="#">一品香</a></span>
            <span><a href="#">北京大饭店</a></span>
            <span><a href="#">东行宫</a></span>
            <span><a href="#">无二世家</a></span>
        </div>
        <script>
            function search_all(){
                var val=$("#sea").val();
                window.location.href='index.php?mod=topic&code=search&key='+val;
            }
        </script>
    </div>
</div>