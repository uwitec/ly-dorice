<?php /* Smarty version 2.6.26, created on 2013-01-29 07:55:38
         compiled from topic_food_way.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "topic_header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="con border" style="text-align: left;">
    永和餐厅<img src="templates/images/63.gif"/>美食<img src="templates/images/63.gif"/>攻略<img src="templates/images/63.gif"/>多吃番茄心情好 能防抑郁症
</div>
<div class="con border">
    <?php if ($this->_tpl_vars['tid'] == ""): ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "topic_food_way_index.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php else: ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "topic_food_way_one.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endif; ?>
    <div id="order_right">  
        <div class="way" style="margin-bottom: 10px;">
            <h1 class="h1 all_back"><img src="templates/images/07.gif"/>热门推荐</h1>
            <ul>
                <li>多吃番茄心情好,能防抑郁症</li>
                <li>营养师最爱吃的8大零食</li>
                <li>多吃冬瓜不得脂肪肝</li>
                <li>鱿鱼含牛磺酸可降胆固醇</li>
                <li>冰镇饮料会增加女性患脑梗风险</li>
            </ul>
        </div>
        <div class="common ad">
            <img src="templates/images/cul_1.png"/>
        </div>
        <div class="common ad">
            <img src="templates/images/ad_2.jpg"/>
        </div>
    </div>
    <div class="clear"></div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "topic_footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>