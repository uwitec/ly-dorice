<?php /* Smarty version 2.6.26, created on 2013-03-22 03:45:51
         compiled from topic_news_index.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "topic_header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="nav">多爱食 > 资讯</div>
<div class="public">
    <div id="pub_le">
        <div class="pub_le">
            <h1 class="com_bg_2"><span class="h1"></span>排行榜</h1>
            <div class="rank_sort">
                <ul>
                    <li class="current first">外卖排行榜</li>
                    <li>预订排行榜</li>
                </ul>
                <ul class="clear"></ul>
            </div>
            <div class="rank" >
                <ul>
                    <li><b>1</b><span><a href="#">一品香(国贸桥东300米...)</a></span></li>
                    <li><b>2</b><span><a href="#">一品香(国贸桥东300米...)</a></span></li>
                    <li><b>3</b><span><a href="#">一品香(国贸桥东300米...)</a></span></li>
                    <li><b>4</b><span><a href="#">一品香(国贸桥东300米...)</a></span></li>
                    <li class="last"><b>5</b><span><a href="#">一品香(国贸桥东300米...)</a></span></li>
                </ul>
            </div>
            <div class="rank" style="display: none;">
                <ul>
                    <li><b>1</b><span><a href="#">仁和兴川味酒楼(大望路北200米)</a></span></li>
                    <li><b>2</b><span><a href="#">仁和兴川味酒楼(大望路北200米)</a></span></li>
                    <li><b>3</b><span><a href="#">仁和兴川味酒楼(大望路北200米)</a></span></li>
                    <li><b>4</b><span><a href="#">仁和兴川味酒楼(大望路北200米)</a></span></li>
                    <li class="last"><b>5</b><span><a href="#">仁和兴川味酒楼(大望路北200米)</a></span></li>
                </ul>
            </div>
        </div>
        <script>
            $(".rank_sort li").each(function(i,k){
                $(this).mouseover(function(){
                    $(".rank_sort li").removeClass('current');
                    $(this).addClass('current');
                    $(".rank").hide();
                    $(".rank:eq("+i+")").show();
                });
            });
        </script>
        <div class="pub_le">
            <img src="templates/images/ad/ad1.jpg"/>
        </div>
        <div class="pub_le">
            <h1 class="com_bg_2"><span class="h1"></span>专题活动</h1>
            <div class="topic">
                <ul>
                    <li><a href="#">除夕夜享佳美年夜饭，领略异地风情</a></li>
                    <li><a href="#">除夕夜享佳美年夜饭，领略异地风情</a></li>
                    <li><a href="#">除夕夜享佳美年夜饭，领略异地风情</a></li>
                    <li><a href="#">除夕夜享佳美年夜饭，领略异地风情</a></li>
                    <li><a href="#">除夕夜享佳美年夜饭，领略异地风情</a></li>
                    <li><a href="#">除夕夜享佳美年夜饭，领略异地风情</a></li>
                </ul>
            </div>
        </div>
        <div class="pub_le">
            <img src="templates/images/ad/ad3.jpg"/>
        </div>
        <div class="pub_le">
            <h1 class="com_bg_2"><span class="h1"></span>热门就餐地点</h1>
            <div class="hot_site">
                <ul>
                    <li><a href="#"><span>国贸</span></a></li><li><a href="#"><span>大望路</span></a></li><li><a href="#"><span>八里桥</span></a></li>
                    <li><a href="#"><span>魏公村</span></a></li><li><a href="#"><span>清华大学</span></a></li><li><a href="#"><span>三里屯</span></a></li>
                    <li><a href="#"><span>安定门</span></a></li><li><a href="#"><span>西四</span></a></li><li><a href="#"><span>大红门</span></a></li>
                    <li><a href="#"><span>国贸</span></a></li><li><a href="#"><span>大望路</span></a></li><li><a href="#"><span>八里桥</span></a></li>
                    <li><a href="#"><span>魏公村</span></a></li><li><a href="#"><span>清华大学</span></a></li><li><a href="#"><span>三里屯</span></a></li>
                    <li><a href="#"><span>安定门</span></a></li><li><a href="#"><span>西四</span></a></li><li><a href="#"><span>大红门</span></a></li>
                    <li><a href="#"><span>国贸</span></a></li><li><a href="#"><span>大望路</span></a></li><li><a href="#"><span>八里桥</span></a></li>
                    <li><a href="#"><span>魏公村</span></a></li><li><a href="#"><span>清华大学</span></a></li><li><a href="#"><span>三里屯</span></a></li>
                    <li><a href="#"><span>安定门</span></a></li><li><a href="#"><span>西四</span></a></li><li><a href="#"><span>大红门</span></a></li>
                </ul>
                <ul class="clear"></ul>
            </div>
        </div>
        <script>
            $(".hot_site span").each(function(i,k){
                $(this).mouseover(function(){
                    $(".hot_site span").removeClass('current');
                    $(this).addClass('current');
                });
                $(this).mouseout(function(){
                    $(".hot_site span").removeClass('current');
                });
            });
        </script>
        <div class="pub_le">
            <img src="templates/images/ad/ad2.jpg"/>
        </div>
    </div>
    <div id="pub_ri">
        <div class="pub_ri bg4" style="border:1px solid #eee;*border:none;">
            <div class="news_recommend">
                <h1>餐厅推荐</h1>
                <ul>
                    <li><a href="#"><img src="templates/images/service/join1.jpg"/></a><p><a href="#">温馨浪漫之家</a></p></li>
                    <li><a href="#"><img src="templates/images/service/join2.jpg"/></a><p><a href="#">回家的感觉</a></p></li>
                    <li><a href="#"><img src="templates/images/service/join3.jpg"/></a><p><a href="#">久远悠长</a></p></li>
                    <li><a href="#"><img src="templates/images/service/join3.jpg"/></a><p><a href="#">美食风向标</a></p></li>
                </ul>
                <ul class="clear"></ul>
            </div>
        </div>
        
        <div class="pub_ri bg4"  style="border:1px solid #eee;*border:none;">
            <div class="news_recommend">
                <h1>美食推荐</h1>
                <ul>
                    <li><a href="#"><img src="templates/images/cate/food1.jpg"/></a><p><a href="#">享受北风的美味</a></p></li>
                    <li><a href="#"><img src="templates/images/cate/hel_2.jpg"/></a><p><a href="#">吃出浪漫的气息</a></p></li>
                    <li><a href="#"><img src="templates/images/cate/food3.jpg"/></a><p><a href="#">无微不至的关怀</a></p></li>
                    <li><a href="#"><img src="templates/images/cate/hel_1.jpg"/></a><p><a href="#">情侣的专属</a></p></li>
                </ul>
                <ul class="clear"></ul>
            </div>
        </div>
        <div class="pub_ri bg4" id="ss" style="border:1px solid #eee;">
            <div class="news_trends">
                <h1>商家动态</h1>
                <ul>
                    <li>【肯德基】肯德基尚选晚餐又出新菜单啦</li>
                    <li>【肯德基】肯德基尚选晚餐又出新菜单啦</li>
                    <li>【肯德基】肯德基尚选晚餐又出新菜单啦</li>
                    <li>【肯德基】肯德基尚选晚餐又出新菜单啦</li>
                    <li>【肯德基】肯德基尚选晚餐又出新菜单啦</li>
                </ul>
            </div>
            <div class="news_rela">
                <h1>休闲娱乐</h1>
                <ul>
                    <li>【合家欢农家乐】享受美食的同时，休闲娱乐也是...</li>
                    <li>【合家欢农家乐】享受美食的同时，休闲娱乐也是...</li>
                    <li>【合家欢农家乐】享受美食的同时，休闲娱乐也是...</li>
                    <li>【合家欢农家乐】享受美食的同时，休闲娱乐也是...</li>
                    <li>【合家欢农家乐】享受美食的同时，休闲娱乐也是...</li>
                </ul>
            </div>
            <div class="clear"></div>  
        </div>
        <div class="pub_ri bg4" style="border:1px solid #eee;">
            <div class="news_trends">
                <h1>美食攻略</h1>
                <ul>
                    <li>【肯德基】肯德基尚选晚餐又出新菜单啦</li>
                    <li>【肯德基】肯德基尚选晚餐又出新菜单啦</li>
                    <li>【肯德基】肯德基尚选晚餐又出新菜单啦</li>
                    <li>【肯德基】肯德基尚选晚餐又出新菜单啦</li>
                    <li>【肯德基】肯德基尚选晚餐又出新菜单啦</li>
                </ul>
            </div>
            <div class="news_rela">
                <h1>吃货导向</h1>
                <ul>
                    <li>【合家欢农家乐】享受美食的同时，休闲娱乐也是...</li>
                    <li>【合家欢农家乐】享受美食的同时，休闲娱乐也是...</li>
                    <li>【合家欢农家乐】享受美食的同时，休闲娱乐也是...</li>
                    <li>【合家欢农家乐】享受美食的同时，休闲娱乐也是...</li>
                    <li>【合家欢农家乐】享受美食的同时，休闲娱乐也是...</li>
                </ul>
            </div>
            <div class="clear"></div>  
        </div>
        <div class="pub_ri bg4" style="border:1px solid #eee;*border:none;">
            <div class="news_recommend">
                <h1>健康饮食</h1>
                <ul>
                    <li><a href="#"><img src="templates/images/cate/food1.jpg"/></a><p><a href="#">享受北风的美味</a></p></li>
                    <li><a href="#"><img src="templates/images/cate/hel_2.jpg"/></a><p><a href="#">吃出浪漫的气息</a></p></li>
                    <li><a href="#"><img src="templates/images/cate/food3.jpg"/></a><p><a href="#">无微不至的关怀</a></p></li>
                    <li><a href="#"><img src="templates/images/cate/hel_1.jpg"/></a><p><a href="#">情侣的专属</a></p></li>
                </ul>
                <ul class="clear"></ul>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "topic_footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>