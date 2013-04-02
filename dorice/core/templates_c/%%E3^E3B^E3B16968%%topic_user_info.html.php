<?php /* Smarty version 2.6.26, created on 2013-01-31 03:10:37
         compiled from topic_user_info.html */ ?>

<?php if ($this->_tpl_vars['code'] == 'u_order'): ?>
<div class="u_setting">
    <div class="u_ti style2">全部订单</div>
    <div class="no_ord">您暂时还没有任何订单！现在就去<a href="index.php?mod=order">预订餐厅</a></div>
    <table border="0" cellpadding="0" cellspacing="0">
        <tr class="o_ti">
            <td width="140">订单号</td>
            <td width="180">餐厅</td>
            <td width="60">人数</td>
            <td width="120">时间</td>
            <td width="150">筛选
                <select>
                    <option>全部</option>
                    <option>待就餐</option>
                    <option>已就餐</option>
                    <option>已过期</option>
                    <option>待评论</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>201301221234</td>
            <td>永和餐厅（国贸店）</td>
            <td>5</td>
            <td>2013-01-22</td>
            <td>未就餐<span>退订</span></td>
        </tr>
        <tr>
            <td>201301221234</td>
            <td>永和餐厅（国贸店）</td>
            <td>5</td>
            <td>2013-01-22</td>
            <td>已过期</td>
        </tr>
        <tr>
            <td>201301221234</td>
            <td>永和餐厅（国贸店）</td>
            <td>5</td>
            <td>2013-01-22</td>
            <td>已就餐</td>
        </tr>
    </table>
</div>
<?php elseif ($this->_tpl_vars['code'] == 'u_save'): ?>
<div class="u_setting u_s_ti">
    <div class="u_ti style2">收藏的菜品</div>
    <div class="u_f_s" style="display: none;">暂无任何收藏菜品</div>
    <div class="u_f_s">
        <ul>
            <li><img src="templates/images/food1.jpg"/><p>宫保鸡丁ddddd</p></li>
            <li><img src="templates/images/food3.jpg"/><p>宫保鸡丁</p></li>
            <li><img src="templates/images/food3.jpg"/><p>宫保鸡丁</p></li>
            <li><img src="templates/images/food3.jpg"/><p>宫保鸡丁</p></li>
        </ul>
        <ul class="clear"></ul>
    </div>
</div>
<div class="u_setting u_s_ti">
    <div class="u_ti style2">收藏的餐厅</div>
    <div class="u_f_s" style="display: none;">暂无任何收藏餐厅</div>
    <div class="u_f_s">
        <ul>
            <li><img src="templates/images/food1.jpg"/><p>永和餐厅（国贸店）</p></li>
            <li><img src="templates/images/food3.jpg"/><p>永和餐厅（国贸店）</p></li>
            <li><img src="templates/images/food3.jpg"/><p>永和餐厅（国贸店）</p></li>
            <li><img src="templates/images/food3.jpg"/><p>永和餐厅（国贸店）</p></li>
        </ul>
        <ul class="clear"></ul>
    </div> 
</div>
<?php elseif ($this->_tpl_vars['code'] == 'u_comment'): ?>
<div class="u_setting u_s_ti">
    <div class="u_ti style2">菜品评论</div>
    <div class="u_f_s" style="display: none;">您还没有评论过任何菜品</div>
    <div class="order_menu" style="border:none;">
        <ul>
            <li>
                <div class="food_img"><img src="templates/images/jifen_1.jpg"/></div>
                <div class="food_info">
                    <p class="style2">宫保鸡丁</p>
                    <p>这个很不错的哦，口感非常舒服，吃来吃去还是川菜味道好啊，啥也不用说了，强烈推荐，大家也可以去品尝一下。</p>
                    <p>评论时间：2013-01-22 11:34:22</p>
                </div>
            </li>
            <li>
                <div class="food_img"><img src="templates/images/jifen_1.jpg"/></div>
                <div class="food_info">
                    <p class="style2">宫保鸡丁</p>
                    <p>这个很不错的哦，口感非常舒服，吃来吃去还是川菜味道好啊，啥也不用说了，强烈推荐，大家也可以去品尝一下。</p>
                    <p>评论时间：2013-01-22 11:34:22</p>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="u_setting u_s_ti">
    <div class="u_ti style2">餐厅评论</div>
    <div class="u_f_s" style="display: none;">您还没有评论过任何餐厅</div> 
    <div class="order_menu" style="border:none;">
        <ul>
            <li>
                <div class="food_img"><img src="templates/images/jifen_1.jpg"/></div>
                <div class="food_info">
                    <p class="style2">永和餐厅（国贸店）</p>
                    <p>这个很不错的哦，口感非常舒服，吃来吃去还是川菜味道好啊，啥也不用说了，强烈推荐，大家也可以去品尝一下。</p>
                    <p>评论时间：2013-01-22 11:34:22</p>
                </div>
            </li>
            <li>
                <div class="food_img"><img src="templates/images/jifen_1.jpg"/></div>
                <div class="food_info">
                    <p class="style2">永和餐厅（国贸店）</p>
                    <p>这个很不错的哦，口感非常舒服，吃来吃去还是川菜味道好啊，啥也不用说了，强烈推荐，大家也可以去品尝一下。</p>
                    <p>评论时间：2013-01-22 11:34:22</p>
                </div>
            </li>
        </ul>
    </div>
</div>
<?php elseif ($this->_tpl_vars['code'] == 'u_jifen'): ?>
<div class="u_j_bg">
    <h2 class="style2">我的积分:3000</h2>
    <p>如何获得积分？</p>
</div>
<div class="u_setting u_s_ti">
    <div class="u_ti style2">积分兑换记录</div>
    <div class="order_menu" style="border:none;display: none;">
        暂无任何兑换记录
    </div>
    <div class="order_menu" style="border:none;">
        <ul>
            <li>
                <div class="food_img"><img src="templates/images/jifen_1.jpg"/></div>
                <div class="food_info">
                    <p>IDM冰激凌杯</p>
                    <p>使用积分：2000</p>
                    <p>说　　明： 创意可爱卡通礼品 带搅拌棒冰激凌杯</p>
                    <p>兑换时间：2013-01-22 11:34:22</p>
                </div>
            </li>
            <li>
                <div class="food_img"><img src="templates/images/jifen_1.jpg"/></div>
                <div class="food_info">
                    <p>IDM冰激凌杯</p>
                    <p>使用积分：2000</p>
                    <p>说　　明： 创意可爱卡通礼品 带搅拌棒冰激凌杯</p>
                    <p>兑换时间：2013-01-22 11:34:22</p>
                </div>
            </li>
            </ul>
    </div>
</div>
<?php else: ?>
<div class="u_setting">
    <div class="u_ti style2">基本设置</div>
    <ul>
        <li>昵称：kappa434</li>
        <li>邮箱：382180053@qq.com</li>
        <li>手机：15832624542</li>
        <li>密码：修改密码</li>
        <li>地址：北京市朝阳区双桥</li>
        <li>头像：<img src="templates/images/no-pic.jpg" width="190"/>修改</li>
        <li><input type="button" name="save" value="保存" class="share2 input"/></li>
    </ul> 
</div>
<?php endif; ?>