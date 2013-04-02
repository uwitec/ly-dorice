<?php /* Smarty version 2.6.26, created on 2013-03-22 09:20:10
         compiled from topic_search_index.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "topic_header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="nav">多爱食 > 搜索 <?php if ($this->_tpl_vars['key']): ?>> <?php echo $this->_tpl_vars['key']; ?>
<?php endif; ?></div>
<div class="public">
    <div id="pub_le">
        <div class="pub_le">
            <h1 class="com_bg_2"><span class="h1"></span>热门餐厅</h1>
            <div class="padding">
                <ul>
                    <li>
                        <div class="re_img"><a href="#"><img src="templates/images/service/join2.jpg"/></a></div>
                        <div class="re_all">
                            <p><span class="style1">花木兰</span></p>
                            <p>地址：朝阳区蓝色港湾国际商区3号楼</p>
                        </div>
                        <div class="clear"></div>
                    </li>
                    <li>
                        <div class="re_img"><a href="#"><img src="templates/images/service/join1.jpg"/></a></div>
                        <div class="re_all">
                            <p><span class="style1">花木兰</span></p>
                            <p>地址：朝阳区蓝色港湾国际商区3号楼</p>
                        </div>
                        <div class="clear"></div>
                    </li>
                    <li class="last">
                        <div class="re_img"><a href="#"><img src="templates/images/service/join2.jpg"/></a></div>
                        <div class="re_all">
                            <p><span class="style1">花木兰</span></p>
                            <p>地址：朝阳区蓝色港湾国际商区3号楼</p>
                        </div>
                        <div class="clear"></div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="pub_le">
            <h1 class="com_bg_2"><span class="h1"></span>餐饮名店</h1>
            <div class="hot_shop">
                <ul>
                    <li><a href="#"><span>俏江南</span></a></li><li><a href="#"><span>仁和兴川味馆</span></a></li><li><a href="#"><span>花木兰</span></a></li>
                    <li><a href="#"><span>俏江南</span></a></li><li><a href="#"><span>浮沉肥牛</span></a></li><li><a href="#"><span>北京大饭店</span></a></li>
                    <li><a href="#"><span>俏江南</span></a></li><li><a href="#"><span>仁和兴川味馆</span></a></li><li><a href="#"><span>北京大饭店</span></a></li>
                </ul>
                <ul class="clear"></ul>
            </div>
        </div>
        <script>
            $(".hot_shop span").each(function(i,k){
                $(this).mouseover(function(){
                    $(".hot_shop span").removeClass('current');
                    $(this).addClass('current');
                });
                $(this).mouseout(function(){
                    $(".hot_shop span").removeClass('current');
                });
            });
        </script>
        <div class="pub_le">
            <h1 class="com_bg_2"><span class="h1"></span>附近餐厅</h1>
            <div class="padding">
                <ul>
                    <li>
                        <div class="re_img"><a href="#"><img src="templates/images/service/join2.jpg"/></a></div>
                        <div class="re_all">
                            <p><span class="style1">花木兰</span></p>
                            <p>地址：朝阳区蓝色港湾国际商区3号楼</p>
                        </div>
                        <div class="clear"></div>
                    </li>
                    <li>
                        <div class="re_img"><a href="#"><img src="templates/images/service/join1.jpg"/></a></div>
                        <div class="re_all">
                            <p><span class="style1">花木兰</span></p>
                            <p>地址：朝阳区蓝色港湾国际商区3号楼</p>
                        </div>
                        <div class="clear"></div>
                    </li>
                    <li class="last">
                        <div class="re_img"><a href="#"><img src="templates/images/service/join2.jpg"/></a></div>
                        <div class="re_all">
                            <p><span class="style1">花木兰</span></p>
                            <p>地址：朝阳区蓝色港湾国际商区3号楼</p>
                        </div>
                        <div class="clear"></div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="pub_le">
            <img src="templates/images/ad/ad6.jpg"/>
        </div>
    </div>
    <div id="pub_ri">
        <div class="pub_ri bg4" style="border:1px solid #eee;">
            <div class="sort_search">
                <h1>全部分类</h1>
                <ul>
                    <li>
                        <b>菜系：</b>
                        <a href="#" class="current">全部</a>
                        <a href="#">川菜</a>
                        <a href="#">川菜</a>
                        <a href="#">川菜</a>
                        <a href="#">川菜</a>
                        <a href="#">川菜</a>
                        <a href="#">川菜</a>
                        <a href="#">川菜</a>
                        <a href="#">川菜</a>
                        <a href="#">川菜</a>
                        <a href="#">川菜</a>
                        <a href="#">川菜</a>
                    </li>
                    <li>
                        <b>类别：</b>
                        <a href="#" class="current">全部</a>
                        <a href="#">川菜</a>
                        <a href="#">川菜</a>
                        <a href="#">川菜</a>
                        <a href="#">川菜</a>
                        <a href="#">川菜</a>
                        <a href="#">川菜</a>
                        <a href="#">川菜</a>
                    </li>
                    <li>
                        <b>口味：</b>
                        <a href="#" class="current">全部</a>
                        <a href="#">川菜</a>
                        <a href="#">川菜</a>
                        <a href="#">川菜</a>
                        <a href="#">川菜</a>
                        <a href="#">川菜</a>
                        <a href="#">川菜</a>
                    </li>
                    <li>
                        <b>价格：</b>
                        <a href="#" class="current">全部</a>
                        <a href="#">川菜</a>
                        <a href="#">川菜</a>
                        <a href="#">川菜</a>
                    </li>
                </ul>
                <ul class="clear"></ul>
            </div>
        </div>
        <div class="pub_ri" style="border:none;">
            <div class="hot_sea"><p>热门搜索：<span><a href="#">雍和宫饭店</a></span><span><a href="#">雍和宫饭店</a></span><span><a href="#">雍和宫饭店</a></span><span><a href="#">雍和宫饭店</a></span><span><a href="#">雍和宫饭店</a></span><span><a href="#">雍和宫饭店</a></span></p></div>
        </div>
        <div class="pub_ri">
            <div class="result">
                <p class="ti"><a href="">最新</a><a href="#" class="no">最热</a><span>共33个结果</span></p>
                <ul>
                    <li>
                        <div class="result_img">
                            <a href="#"><img src="templates/images/cate/foodx.jpg"></a>
                        </div>
                        <div class="result_con">
                            <h3>韩式辣白菜<span>来自：鸿宾楼</span></h3>
                            <p>主料：白菜，辣椒，咖喱，胡萝卜</p>
                            <p>口味：甜，辣，鲜香<span class="p_r">价格：<span class="p_n">￥28</span></span></p>
                            <p>共13人收藏，54条评论</p>
                            <p class="result-nex"><a href="">订一份</a><a href="#">收藏</a><a href="#">去评论</a></p>
                        </div>
                        <div class="clear"></div>
                    </li>
                    <li>
                        <div class="result_img">
                            <a href="#"><img src="templates/images/cate/foodx.jpg"></a>
                        </div>
                        <div class="result_con">
                            <h3>韩式辣白菜</h3>
                            <p>主料：白菜，辣椒，咖喱，胡萝卜</p>
                            <p>口味：甜，辣，鲜香<span class="p_r">价格：<span class="p_n">￥28</span></span></p>
                            <p>共13人收藏，54条评论</p>
                            <p class="result-nex"><a href="">订一份</a><a href="#">收藏</a><a href="#">去评论</a></p>
                        </div>
                        <div class="clear"></div>
                    </li>
                    <li>
                        <div class="result_img">
                            <a href="#"><img src="templates/images/cate/foodx.jpg"></a>
                        </div>
                        <div class="result_con">
                            <h3>韩式辣白菜</h3>
                            <p>主料：白菜，辣椒，咖喱，胡萝卜</p>
                            <p>口味：甜，辣，鲜香<span class="p_r">价格：<span class="p_n">￥28</span></span></p>
                            <p>共13人收藏，54条评论</p>
                            <p class="result-nex"><a href="">订一份</a><a href="#">收藏</a><a href="#">去评论</a></p>
                        </div>
                        <div class="clear"></div>
                    </li>
                    <li>
                        <div class="result_img">
                            <a href="#"><img src="templates/images/cate/foodx.jpg"></a>
                        </div>
                        <div class="result_con">
                            <h3>韩式辣白菜</h3>
                            <p>主料：白菜，辣椒，咖喱，胡萝卜</p>
                            <p>口味：甜，辣，鲜香<span class="p_r">价格：<span class="p_n">￥28</span></span></p>
                            <p>共13人收藏，54条评论</p>
                            <p class="result-nex"><a href="">订一份</a><a href="#">收藏</a><a href="#">去评论</a></p>
                        </div>
                        <div class="clear"></div>
                    </li>
                    <li class="last">
                        <div class="result_img">
                            <a href="#"><img src="templates/images/cate/foodx.jpg"></a>
                        </div>
                        <div class="result_con">
                            <h3>韩式辣白菜</h3>
                            <p>主料：白菜，辣椒，咖喱，胡萝卜</p>
                            <p>口味：甜，辣，鲜香<span class="p_r">价格：<span class="p_n">￥28</span></span></p>
                            <p>共13人收藏，54条评论</p>
                            <p class="result-nex"><a href="">订一份</a><a href="#">收藏</a><a href="#">去评论</a></p>
                        </div>
                        <div class="clear"></div>
                    </li>
                </ul>
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