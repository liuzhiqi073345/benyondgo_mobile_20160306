<?php exit;?>a:3:{s:8:"template";a:4:{i:0;s:76:"D:/wwwroot/beyondgo/wwwroot/mobile/themesmobile/68ecshopcom_mobile/brand.dwt";i:1;s:86:"D:/wwwroot/beyondgo/wwwroot/mobile/themesmobile/68ecshopcom_mobile/library/up_menu.lbi";i:2;s:89:"D:/wwwroot/beyondgo/wwwroot/mobile/themesmobile/68ecshopcom_mobile/library/goods_list.lbi";i:3;s:89:"D:/wwwroot/beyondgo/wwwroot/mobile/themesmobile/68ecshopcom_mobile/library/footer_nav.lbi";}s:7:"expires";i:1457190360;s:8:"maketime";i:1457186760;}<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta charset="utf-8">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="minimal-ui=yes,width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>Bio-Island_彼岸购保税店 </title>
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<link rel="stylesheet" type="text/css" href="themesmobile/68ecshopcom_mobile/css/public.css"/>
<link rel="stylesheet" type="text/css" href="themesmobile/68ecshopcom_mobile/css/category_list.css"/>
<script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.json.js"></script><script type="text/javascript" src="js/transport.js"></script><script type="text/javascript" src="js/common.js"></script><script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/jquery.more.js"></script>
</head>
<body >
<section class="_pre" >
<header>   
<section class="header" >
     <div class="h-left"><a class="sb-back" href="javascript:history.back(-1)" title="返回"></a></div>
    <div class="h-mid">
Bio-Island          </div>
    <div class="h-right">
            <aside class="top_bar">
              <div onClick="show_menu();$('#close_btn').addClass('hid');" id="show_more"><a href="javascript:;"></a> </div>
            </aside>
          </div>
<script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/mobile.js" ></script>
<div class="goods_nav hid" id="menu">
        <div class="Triangle">
          <h2></h2>
        </div>
        <ul>
          <li><a href="index.php"><span class="menu1"></span><i>首页</i></a></li>
          <li><a href="catalog.php"><span class="menu2"></span><i>分类</i></a></li>
          <li><a href="flow.php"><span class="menu3"></span><i>购物车</i></a></li>
          <li style=" border:0;"><a href="user.php"><span class="menu4"></span><i>我的</i></a></li>
        </ul>
      </div> 
<section class="filtrate_term" id="product_sort" style="width: 100%;">
<ul>
        <li class=""><a href="brand.php?category=0&display=grid&id=170&brand=170&price_min=&price_max=&filter_attr=&page=1&sort=goods_id&order=DESC#goods_list">最新</a></li><li class=""><a href="brand.php?category=0&display=grid&id=170&brand=170&price_min=&price_max=&filter_attr=&page=1&sort=salenum&order=DESC#goods_list" >销量</a></li><li class="on"><a href="brand.php?category=0&display=grid&id=170&brand=170&price_min=&price_max=&filter_attr=&page=1&sort=last_update&order=ASC#goods_list" >更新</a></li><li class=""><a href="brand.php?category=0&display=grid&id=170&brand=170&price_min=&price_max=&filter_attr=&page=1&sort=shop_price&order=ASC#goods_list">价格<span class="arrow_up "></span><span class="arrow_down "></span></a></li><li class=""><a  href="javascript:void(0);" class="show_type show_list" >&nbsp;</a></li>
        </ul>
</section>
</section>
     
</header>
  <div style="height:51px;"></div>
   <script type="text/javascript">
var url = 'brand.php?act=ajax&brand=170&cat=&page=1&sort=&order=';
$(function(){
	$('#J_ItemList').more({'address': url});
});
</script>
<div class="touchweb-com_searchListBox openList" id="goods_list">
   <form action="javascript:void(0)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
<div id="J_ItemList" style="opacity: 1;" >
<div class="product single_item info"></div>
  <a href="javascript:;" class="get_more"  style="text-align:center;">
 
<img src='themesmobile/68ecshopcom_mobile/images/category/loader.gif' width="12" height="12" >
  </a>
</div>
</form>
<script language="javascript" type="text/javascript">  
function goods_cut($val){  
var num_val=document.getElementById('number_'+$val);  
var new_num=num_val.value;  
var Num = parseInt(new_num);  
if(Num>1)Num=Num-1;  
num_val.value=Num;  
} 
function goods_add($val){ 
var num_val=document.getElementById('number_'+$val);  
var new_num=num_val.value;  
var Num = parseInt(new_num);  
Num=Num+1;  
num_val.value=Num;  
}
</script>
   
</div>
</section>
<script>
   $('.show_type').bind("click", function() {
    if ($('#goods_list').hasClass('openList')){
	$('#goods_list').removeClass('openList');
	$(this).removeClass('show_list');
	}
	else
	{
	$('#goods_list').addClass('openList');	
	$(this).addClass('show_list');
	}
});
</script>
<script type="Text/Javascript" language="JavaScript">
<!--
function selectPage(sel)
{
  sel.form.submit();
}
//-->
</script>
<script type="text/javascript">
window.onload = function()
{
  Compare.init();
  fixpng();
}
var button_compare = '';
var exist = "您已经选择了%s";
var count_limit = "最多只能选择4个商品进行对比";
var goods_type_different = "\"%s\"和已选择商品类型不同无法进行对比";
var compare_no_goods = "您没有选定任何需要比较的商品或者比较的商品数少于 2 个。";
var btn_buy = "购买";
var is_cancel = "取消";
var select_spe = "请选择商品属性";
</script>
<footer>
<div style="height:50px; line-height:50px; clear:both;"></div>
<div class="v_nav">
  <div class="vf_nav">
    <ul>
      <li> <a href="./"> <i class="vf_1"></i> <span>首页</span></a></li>
      <li><a href="tel:4008516900"> <i class="vf_2"></i> <span>联系我们</span></a></li>
      <li><a href="catalog.php"> <i class="vf_3"></i> <span>分类</span></a></li>
      <li><a href="flow.php"> <i class="vf_4" style=" width:28px;"></i> <span>购物车</span> <em class="global-nav__nav-shop-cart-num" id="ECS_CARTINFO" style=" margin-top:2px; margin-left:-1px;">554fcae493e564ee0dc75bdf2ebf94cacart_info|a:1:{s:4:"name";s:9:"cart_info";}554fcae493e564ee0dc75bdf2ebf94ca</em> </a></li>
      <li><a href="user.php"> <i class="vf_5"></i> <span>我的</span></a></li>
    </ul>
  </div>
</div>
</footer>
</body>
</html>