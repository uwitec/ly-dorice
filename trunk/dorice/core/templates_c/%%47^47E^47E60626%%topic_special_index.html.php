<?php /* Smarty version 2.6.26, created on 2013-01-25 08:59:58
         compiled from topic_special_index.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "topic_header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="con border" style="text-align: left;">
    永和餐厅<img src="templates/images/63.gif"/>特价
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "topic_sort.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="con border">
    <div id="order_left">
        <div id="special_focus">
            <div id="s_f_img">
                <img src="templates/images/focus_1.jpg" width="690" height="360"/>
                <img src="templates/images/focus_2.jpg" width="690" height="360"/>
                <img src="templates/images/focus_3.jpg" width="690" height="360"/>
                <img src="templates/images/focus_4.jpg" width="690" height="360"/>
            </div>
            <div id="s_f_simg">
                <ul>
                    <li>
                        <span class="curr"></span>
                        <span class="curr_con"><img src="templates/images/focus_1.jpg" width="120" height="70"/></span>
                    </li>
                    <li>
                        <span class="curr"></span>
                        <span class="curr_con"><img src="templates/images/focus_2.jpg" width="120" height="70"/></span>
                    </li>
                    <li>
                        <span class="curr"></span>
                        <span class="curr_con"><img src="templates/images/focus_3.jpg" width="120" height="70"/></span>
                    </li>
                    <li>
                        <span class="curr"></span>
                        <span class="curr_con"><img src="templates/images/focus_4.jpg" width="120" height="70"/></span>
                    </li>
                </ul>
            </div>
            <div id="s_f_inf">
                <div id="s_f_info">
                    <p class="style2">《宫保鸡丁》</p>
                    <p class="style2">特价：￥17<i style="margin-left:20px;">原价：￥22</i></p>
                </div>
            </div>
        </div>
        <script>
            $("#s_f_img img:eq(0)").show();
            $("#s_f_simg .curr:eq(0)").addClass("current");
            $("#s_f_simg .curr_con").each(function(i,k){
                $(this).mouseover(function(){ 
                    $("#s_f_simg .curr").removeClass("current");
                    $("#s_f_simg .curr:eq("+i+")").addClass("current");
                    $("#s_f_img img").hide();
                    $("#s_f_img img:eq("+i+")").show();
                });
            });
        </script>
        <div class="order_menu" style="background-color: #FFFFED">
            <h1 class="h1">今日特价</h1>
            <ul>
                <li>
                    <div class="food_img"><img src="templates/images/food3.jpg"/></div>
                    <div class="food_info">
                        <p>菜名：辣子鸡丁</p>
                        <p>菜系：川菜</p>
                        <p>主料：鸡丁 青椒</p>
                        <p>特色：鲜香可口，美味十足，油而不腻</p>
                    </div>
                    <div class="food_order">
                        <p class="style4"><i>原价：￥24</i></p>
                        <p class="style2">特价：￥20</p>
                        <p class="join style3">加入菜单</p>
                    </div>
                </li>
                <li>
                    <div class="food_img"><img src="templates/images/food3.jpg"/></div>
                    <div class="food_info">
                        <p>菜名：辣子鸡丁</p>
                        <p>菜系：川菜</p>
                        <p>主料：鸡丁 青椒</p>
                        <p>特色：鲜香可口，美味十足，油而不腻</p>
                    </div>
                    <div class="food_order">
                        <p class="style4"><i>原价：￥24</i></p>
                        <p class="style2">特价：￥20</p>
                        <p class="join style3">加入菜单</p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="order_menu" style="background-color:#FAEEF2">
            <h1 class="h1">特价列表</h1>
            <ul>
                <li>
                    <div class="food_img"><img src="templates/images/food3.jpg"/></div>
                    <div class="food_info">
                        <p>菜名：辣子鸡丁</p>
                        <p>菜系：川菜</p>
                        <p>主料：鸡丁 青椒</p>
                        <p>特色：鲜香可口，美味十足，油而不腻</p>
                    </div>
                    <div class="food_order">
                        <p class="style4"><i>原价：￥24</i></p>
                        <p class="style2">特价：￥20</p>
                        <p class="join style3">加入菜单</p>
                    </div>
                </li>
                <li>
                    <div class="food_img"><img src="templates/images/food3.jpg"/></div>
                    <div class="food_info">
                        <p>菜名：辣子鸡丁</p>
                        <p>菜系：川菜</p>
                        <p>主料：鸡丁 青椒</p>
                        <p>特色：鲜香可口，美味十足，油而不腻</p>
                    </div>
                    <div class="food_order">
                        <p class="style4"><i>原价：￥24</i></p>
                        <p class="style2">特价：￥20</p>
                        <p class="join style3">加入菜单</p>
                    </div>
                </li>
                <li>
                    <div class="food_img"><img src="templates/images/food3.jpg"/></div>
                    <div class="food_info">
                        <p>菜名：辣子鸡丁</p>
                        <p>菜系：川菜</p>
                        <p>主料：鸡丁 青椒</p>
                        <p>特色：鲜香可口，美味十足，油而不腻</p>
                    </div>
                    <div class="food_order">
                        <p class="style4"><i>原价：￥24</i></p>
                        <p class="style2">特价：￥20</p>
                        <p class="join style3">加入菜单</p>
                    </div>
                </li>
                <li>
                    <div class="food_img"><img src="templates/images/food3.jpg"/></div>
                    <div class="food_info">
                        <p>菜名：辣子鸡丁</p>
                        <p>菜系：川菜</p>
                        <p>主料：鸡丁 青椒</p>
                        <p>特色：鲜香可口，美味十足，油而不腻</p>
                    </div>
                    <div class="food_order">
                        <p class="style4"><i>原价：￥24</i></p>
                        <p class="style2">特价：￥20</p>
                        <p class="join style3">加入菜单</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div id="order_right">
        <div class="active">
            <h1 class="h1 all_back"><img src="templates/images/07.gif"/>永和活动</h1>
            <ul>
                <li><span class="span1"><img src="templates/images/song.png"/>单次消费满199元（酒水除外），送宫保鸡丁一份。</span></li>
                <li><span class="span1"><img src="templates/images/song.png"/>单次消费满299元（酒水除外），即打9折。</span></li>
                <li><span class="span1"><img src="templates/images/song.png"/>单次消费满399元（酒水除外），即打9折+香烟一包。</span></li>
            </ul>
        </div>
        <div class="common ad">
            <img src="templates/images/ad_2.jpg"/>
        </div>
        <div class="special">
            <h1 class="h1 all_back"><img src="templates/images/07.gif"/>热门美食</h1>
            <ul>
                <li>
                    <span><img src="templates/images/food1.jpg" width="100" height="80"/></span>
                    <span class="name"><小炒羊肉></span>
                    <span class="price">价格：<i>￥20</i></span>
                    <span class="mess">已有3人预订</span>
                </li>
                <li>
                    <span><img src="templates/images/food1.jpg" width="100" height="80"/></span>
                    <span class="name"><小炒羊肉></span>
                    <span class="price">价格：<i>￥20</i></span>
                    <span class="mess">已有3人预订</span>
                </li>
                <li>
                    <span><img src="templates/images/food1.jpg" width="100" height="80"/></span>
                    <span class="name"><小炒羊肉></span>
                    <span class="price">价格：<i>￥20</i></span>
                    <span class="mess">已有3人预订</span>
                </li>
            </ul>
            <div style="text-align: left;margin-left:10px;">更多</div>
        </div>
        <div class="way">
            <h1 class="h1 all_back"><img src="templates/images/07.gif"/>热门推荐</h1>
            <ul>
                <li>多吃番茄心情好,能防抑郁症</li>
                <li>营养师最爱吃的8大零食</li>
                <li>多吃冬瓜不得脂肪肝</li>
                <li>鱿鱼含牛磺酸可降胆固醇</li>
                <li>冰镇饮料会增加女性患脑梗风险</li>
            </ul>
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