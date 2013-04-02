<?php /* Smarty version 2.6.26, created on 2013-02-27 03:43:06
         compiled from topic_culture_index.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "topic_header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="con border" style="text-align: left;">
    永和餐厅<img src="templates/images/63.gif"/>文化
</div>
<div class="con border">
    <div id="order_left">
        <div class="pic sc">
            <div class="sc_left" onclick="move_left()"></div>
            <div class="scroll_nax">
                <div class="scroll" id="move">
                    <ul>
                        <li><img src="templates/images/sc_1.jpg"/></li>
                        <li><img src="templates/images/sc_2.jpg"/></li>
                        <li><img src="templates/images/sc_3.jpg"/></li>
                        <li><img src="templates/images/sc_4.jpg"/></li>
                        <li><img src="templates/images/sc_4.jpg"/></li>
                        <li><img src="templates/images/sc_1.jpg"/></li>
                        <li><img src="templates/images/sc_4.jpg"/></li>
                        <li><img src="templates/images/sc_4.jpg"/></li>
                        <li><img src="templates/images/sc_1.jpg"/></li>
                    </ul>
                </div>
            </div>
            <div class="sc_right" onclick="move_right()"></div>
            <div class="clear"></div>
        </div>
        <script>
            var i=1;
            var temp=201;
            function move_left(){
                if(i>=7){
                    return false;
                }
                var x=-i*temp;
                $("#move").animate({left:x+"px"},1000);
                i++;
            }
            function move_right(){
                if(i<=1){
                    return false;
                }
                var x=-(i-2)*temp;
                $("#move").animate({left:x+"px"},1000);
                i--;
            }
        </script>
        <div class="culture">
            <p class="style2" style="text-align: center;" id="wen"><span class="current">永和故事</span><span>企业简介</span></p>
            <div id="gushi0">
            <img src="templates/images/sc_1.jpg" class="gushi"/>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;“永和”是我国台湾省的一个地名。上世纪50年代初期，由山东和河北的两位老兵首先开始经营，一群祖籍大陆远离家乡的退役老兵迫于生计，聚集在台湾省台北县永和镇中正桥畔，搭起经营快餐早点的小棚，磨豆浆、烤烧饼、炸油条，渐渐形成了一片供应早餐的摊铺。因为这些老兵手艺地道，磨出的豆浆新鲜营养香浓可口，做出的烧饼油条色泽金黄松软酥脆，以致以豆浆为代表的永和镇的各种小吃店盛名远播，传遍台湾全岛。</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;永和豆浆的盛行始于中华少儿棒球队在美国威廉波特世界少棒锦标赛打出好成绩，带动观赏棒球比赛的风气，由于时差，看完棒球赛往往已经接近清晨，而最早开门的早餐店为永和豆浆，人们渐渐开始习惯看完棒球比赛后去吃永和豆浆。“永和豆浆”一词，起初只是“过桥到永和喝豆浆”的泛称，后来简称“永和豆浆”。</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;永和豆浆是台湾小吃的一大特色，台湾永和文化的象征之一。永和镇上有几十家豆浆店，人们只要路过永和镇都会跑来吃，许多人到台北还特地到永和镇喝豆浆。早年宋美龄赠词：“玉液琼浆，甘如蜜酪”。包括台湾政要人物连战、马英九等都光顾过，名气十分响亮。而台湾小吃已经成了台湾文化的一部分。实际上，台湾小吃已经成了名片，永和的豆浆已经是符号，起到了让人认识台湾的作用。如今，举世闻名的永和豆浆已经从台湾走向了世界，并成为台湾文化的重要组成部分，同时也凝聚着两岸同胞的浓郁乡情。</p>
            </div>
            <div id="gushi1" style="display: none;"> 
            <img src="templates/images/sc_2.jpg" class="gushi"/>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;“永和中式美食秉承永和豆浆原产地的精神和理念，以发扬中华传统美食为己任，以“永和我心，永和我味”为品牌理念，延续永和豆浆的经典美味，推广台湾中式餐饮体系和台湾传统美食文化。永和中式美食成功地从单纯的豆浆、油条产品，逐渐扩大到各式中式美食，在原有台湾中式餐饮体系的基础上，根据大陆不同地域、不同口味，对原有产品进行改良、发展和创新，推出了豆浆油条、活力早餐、馄饨水饺、精选面食、精选套餐、炒饭炒面、开胃小菜、风味小吃、甜品饮料等，共有300多个产品供顾客选择，真正体现了永和中式美食新而快的高品质追求与原则。</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;永和中式美食通过不断完善产品制作工艺，丰富产品种类，为人们提供新鲜健康的饮食。永和中式美食制作的特大香酥油条，是在传统永和油条的基础上改良而成的创新品种，以面粉、鸡蛋等多种食品原料制成，不含对人体有害的物质，具有色泽金黄、外酥里嫩、松泡膨大、柔韧有劲的特点。油条所用面粉经过特别改良订制，所用发酵配方则是历经现代生物低温发酵技术研制而成，摒除传统含铝配方，在煎炸过程中更是定时换油，保证炸出的油条金黄香脆，健康美味。永和中式美食制作的豆浆，是纯天然的绿色食品，所用原料精选东北原产地优质豆浆专用大豆，以现代灭菌工艺和最新除腥技术，现磨现煮，既保留了大豆中原有的天然营养成分，更使豆浆达到浓、纯、味美的口感。</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;随着时代的发展，消费者的要求也在不断发生变化，人们已不仅满足于吃饱，更关注健康环保的食品、舒适洁净的用餐环境和物超所值的优质服务。永和中式美食顺应时代发展的潮流，不断地吸收更新更完美的内涵，打造最具价值的餐饮经营模式。提供24小时连锁经营，满足消费者饮食便利，提供健康速食新风，提供服务品质满意度，将永和中式美食一次次推向事业高峰。秉持这样的精神与理念，我们深信，永和中式美食的骄人成绩必将让世人瞩目。</p>
            </div>
        </div>
        <script>
            $("#wen span").each(function(i,k){
                $(this).click(function(){
                    $("#wen span").removeClass("current");
                    $(this).addClass("current");
                    $("#gushi0,#gushi1").hide();
                    $("#gushi"+i).show();
                });
            });
        </script>
        
        <div class="culture">
            <img src="templates/images/cul_1.jpg" class="wenhua"/>
            <p class="style2">品牌文化</p>
            <p>品牌理念：永和我心，永和我味。</p>
            <p>经营宗旨：成就中国快餐第一品牌。</p>
            <p>企业精神：诚信、务实、创新，顾客满意，共同成长。</p>
            <p>企业宗旨：为消费者创造价值、为员工创造机会，为企业创造未来。</p>
            <p>企业使命：用美食连接世界，丰富和发展人类餐饮文化。</p>
            <p>核心价值：群策群力，同心同德，不断挑战，追求卓越。</p>
            <p>产品理念：为顾客提供方便、快捷的中华美食。</p>
            <p>品牌内涵：源远流长、博大精深的中华饮食文化是永和中式美食的无尽源泉。</p>
            <p>品牌精神：“和”是一种圆融、一种感恩、一种尊重。互相包容、求同存异、共同成长。</p>
            <p>企业目标：让全球顾客实现随时随地享受中华美食的梦想。</p>
        </div>
        
    </div>
    <div id="order_right">
        <div class="common ad">
            <img src="templates/images/cul_1.png"/>
        </div>
        <div class="common ad">
            <img src="templates/images/ad_2.jpg"/>
        </div>
        <div class="common ad">
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