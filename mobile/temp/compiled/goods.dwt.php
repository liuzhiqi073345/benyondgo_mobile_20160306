<!DOCTYPE html >
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<title><?php echo $this->_var['page_title']; ?></title>
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
<link rel="stylesheet" type="text/css" href="themesmobile/68ecshopcom_mobile/css/public.css"/>
<link rel="stylesheet" type="text/css" href="themesmobile/68ecshopcom_mobile/css/goods.css"/>
<script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/jquery.js"></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.json.js,transport.js')); ?>
<script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/touchslider.dev.js"></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
</head>
<body>
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
</script> 
<script language="javascript"> 
<!--
/*屏蔽所有的js错误*/
function killerrors() { 
return true; 
} 
window.onerror = killerrors; 
//-->
function tiaozhuan()
{ 
var thisurl = window.location.href;
location.href='share_goods.php?content=<?php echo $this->_var['goods']['goods_style_name']; ?>&pics=<?php echo $this->_var['goods']['goods_img']; ?>&gid=<?php echo $this->_var['goods']['goods_id']; ?>&url='+thisurl;
}
</script> 
<script type="text/javascript">
/*第一种形式 第二种形式 更换显示样式*/
function setGoodsTab(name,cursel,n){
$('html,body').animate({'scrollTop':0},600);
for(i=1;i<=n;i++){
var menu=document.getElementById(name+i);
var con=document.getElementById("user_"+name+"_"+i);
menu.className=i==cursel?"on":"";
con.style.display=i==cursel?"block":"none";
}
}
</script>
<div class="main">

	<div class="tab_nav">
  <div class="header">
    <div class="h-left"><a class="sb-back" href="javascript:history.back(-1)" title="返回"></a></div>
    <div class="h-mid">
      <ul>
        <li><a href="javascript:;" class="tab_head on"   id="goods_ka1" onClick="setGoodsTab('goods_ka',1,3)">商品</a></li>
        <li><a href="javascript:;" class="tab_head" id="goods_ka2" onClick="setGoodsTab('goods_ka',2,3)">详情</a></li>
        <li><a href="goods_comment.php?act=list&id=<?php echo $this->_var['goods']['goods_id']; ?>" class="tab_head" id="goods_ka3">评价</a></li>
      </ul>
    </div>
    <div class="h-right">
      <aside class="top_bar">
        <div onClick="show_menu();$('#close_btn').addClass('hid');" id="show_more"><a href="javascript:;"></a> </div>
        <a href="flow.php" class="show_cart"><em class="global-nav__nav-shop-cart-num" id="ECS_CARTINFO"><?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></em></a> </aside>
    </div>
  </div>
</div>
	 
	<?php echo $this->fetch('library/up_menu.lbi'); ?> 
	
    
    <form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" id="purchase_form" name="ECS_FORMBUY">
    <div class="main" id="user_goods_ka_1" style="display:block;">
        <?php echo $this->fetch('library/goods_gallery.lbi'); ?>
            <div class="product_info"> 
              
              <div class="info_dottm">
                <h3 class="name"><?php echo $this->_var['goods']['goods_name']; ?></h3>
                <div class="right"><a onClick="tiaozhuan()"><div id="pro_share" class="share"></div></a></div>
              </div>
              
              <dl class="goods_price">
                <dt><?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?><span id="ECS_GOODS_AMOUNT" style=" margin-left:10px;"><?php echo $this->_var['goods']['promote_price']; ?></span><strong ><?php echo $this->_var['goods']['shop_price_formated']; ?></strong><?php else: ?><span id="ECS_GOODS_AMOUNT" style="margin-left:10px;"><?php echo $this->_var['goods']['shop_price_formated']; ?></span><?php if ($this->_var['cfg']['show_marketprice']): ?><strong><?php echo $this->_var['goods']['market_price']; ?></strong><?php endif; ?> <?php endif; ?></dt>
                <?php echo $this->smarty_insert_scripts(array('files'=>'lefttime.js')); ?> 
                <?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?>
                <dd><strong id="leftTime"><?php echo $this->_var['lang']['please_waiting']; ?></strong><span>距结束：</span><em><img src="themesmobile/68ecshopcom_mobile/images/time.png"></em></dd>
                <?php endif; ?>
              </dl>
              
              <ul class="price_dottm">
                <li style=" text-align:left">折扣：<?php echo $this->_var['zhekou']; ?>折</li>
                <li><?php echo $this->_var['review_count']; ?>人评价</li>
                <li style=" text-align:right"><?php echo $this->_var['order_num']; ?>人已付款</li>
              </ul>
            </div>

	    <?php if ($this->_var['promotion'] || $this->_var['goods']['bonus_money']): ?>
            <section id="search_ka" class="huodong">
                <div class="subNav">
                    <div class="att_title"> 
                    <?php $_from = $this->_var['promotion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');$this->_foreach['promotion'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['promotion']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
        $this->_foreach['promotion']['iteration']++;
?>
                    <?php if ($this->_foreach['promotion']['iteration'] < 2): ?>
                    <?php if ($this->_var['item']['type'] == "favourable"): ?> 
                    <span><img src="themesmobile/68ecshopcom_mobile/images/huodong.png"> </span> 
                    <?php elseif ($this->_var['item']['type'] == "auction"): ?>
                    <span><img src="themesmobile/68ecshopcom_mobile/images/paimai.png"> </span> 
                    <?php endif; ?>
                    <p><?php echo $this->_var['item']['act_name']; ?></p>
                    <?php endif; ?> 
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                    </div>
                </div>
                  
                <div class="navContent navContent_huodong"> 
                	<?php $_from = $this->_var['promotion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');$this->_foreach['promotion'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['promotion']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
        $this->_foreach['promotion']['iteration']++;
?> 
                	<p class="youhui_list">           
                  		<?php if ($this->_var['item']['type'] == "favourable"): ?> 
                		<a href="activity.php" title="<?php echo $this->_var['lang']['favourable']; ?>"><img src="themesmobile/68ecshopcom_mobile/images/hui.png"></a>
                        <?php elseif ($this->_var['item']['type'] == "auction"): ?>
                        <a href="auction.php" title="<?php echo $this->_var['lang']['favourable']; ?>"><img src="themesmobile/68ecshopcom_mobile/images/pai.png"></a>
                  		<?php endif; ?>
                  		<a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo $this->_var['lang'][$this->_var['item']['type']]; ?> <?php echo $this->_var['item']['act_name']; ?><?php echo $this->_var['item']['time']; ?>" class="act_name"><?php echo $this->_var['item']['act_name']; ?></a>
                  	</p>
                	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  
                	<?php if ($this->_var['volume_price_list']): ?>
                    <?php $_from = $this->_var['volume_price_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('price_key', 'price_list');if (count($_from)):
    foreach ($_from AS $this->_var['price_key'] => $this->_var['price_list']):
?>  
                    <p class="youhui_list">    
                		<span><img src="themesmobile/68ecshopcom_mobile/images/hui.png"></span>
                        <span>购买<?php echo $this->_var['price_list']['number']; ?>件&nbsp;优惠价：<strong><?php echo $this->_var['price_list']['format_price']; ?></strong></span>
                    </p>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                	<?php endif; ?>
                    <?php if ($this->_var['goods']['bonus_money']): ?>
                    <p class="youhui_list"> 
                    	<span><img src="themesmobile/68ecshopcom_mobile/images/hui.png"></span>
                        <a href="user.php?act=bonus"><?php echo $this->_var['goods']['type_name']; ?></a> 
                    </p>
                    <?php endif; ?>
                    
                    <?php if ($this->_var['goods']['give_integral'] > 0): ?>
                    <p class="youhui_list"> 
                    	<span><img src="themesmobile/68ecshopcom_mobile/images/ji.png"></span>
                       	<span><?php echo $this->_var['lang']['goods_give_integral']; ?><?php echo $this->_var['goods']['give_integral']; ?> <?php echo $this->_var['points_name']; ?></span>
                    </p>
                    <?php endif; ?>
                </div>      
            </section>
            <?php endif; ?> 
            
            <?php if ($this->_var['rank_prices']): ?>
            <section id="search_ka">
                <div class="ui-sx bian1"> 
                    <div class="subNavBox" > 	
                        <div class="subNav"><strong>会员专享价</strong></div>
                        <ul class="navContent">
                        	<li class="user_price">		
                            	<?php $_from = $this->_var['rank_prices']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'rank_price');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['rank_price']):
?>	
                            	<p>
                            		<span class="key"><?php echo $this->_var['rank_price']['rank_name']; ?></span>
                            		<b class="p-price-v"><?php echo $this->_var['rank_price']['price']; ?></b>
                            	</p>
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </li>	
                        </ul>
                    </div>
               </div>
            </section>
            <?php endif; ?>
            <?php if ($this->_var['goods']['integral']): ?>
            <section id="search_ka">
                <div class="subNavBox" >
                    <div class="subNav" style="background:none;">
                      <strong><?php echo $this->_var['lang']['goods_integral']; ?><?php echo $this->_var['goods']['integral']; ?> <?php echo $this->_var['points_name']; ?></strong>
                    </div>
                </div>
            </section>
            <?php endif; ?>
            <?php if ($this->_var['cfg']['show_goodssn']): ?>
            <section id="search_ka">
                <div class="subNavBox" >
                    <div class="subNav" style="background:none;">
                         <strong><?php echo $this->_var['lang']['goods_sn']; ?> <?php echo $this->_var['goods']['goods_sn']; ?></strong>
                    </div>
                </div>
            </section>
            <?php endif; ?>
            <?php if ($this->_var['goods']['goods_brand'] && $this->_var['cfg']['show_brand']): ?>
            <section id="search_ka">
                <div class="subNavBox" >
                    <div class="subNav" style="background:none;">
                         <strong><?php echo $this->_var['lang']['goods_brand']; ?> <?php echo $this->_var['goods']['goods_brand']; ?></strong>
                    </div>
                </div>
            </section>
            <?php endif; ?>
            <?php if ($this->_var['cfg']['show_goodsweight']): ?>
            <section id="search_ka">
                <div class="subNavBox" >
                    <div class="subNav" style="background:none;">
                         <strong><?php echo $this->_var['lang']['goods_weight']; ?> <?php echo $this->_var['goods']['goods_weight']; ?></strong>
                    </div>
                </div>
            </section>
            <?php endif; ?>
            <?php if ($this->_var['cfg']['show_addtime']): ?>
            <section id="search_ka">
                <div class="subNavBox" >
                    <div class="subNav" style="background:none;">
                         <strong><?php echo $this->_var['lang']['add_time']; ?> <?php echo $this->_var['goods']['add_time']; ?></strong>
                    </div>
                </div>
            </section>
            <?php endif; ?>
            <?php if ($this->_var['goods']['goods_number'] != "" && $this->_var['cfg']['show_goodsnumber']): ?>
            <section id="search_ka">
                <div class="subNavBox" >
                    <div class="subNav" style="background:none;">
                         <strong>商品库存： <?php echo $this->_var['goods']['goods_number']; ?></strong>
                    </div>
                </div>
            </section>
            <?php endif; ?>
            <script type="text/javascript">
            $(function(){
                $(".subNav").click(function(){
                    $(this).next(".navContent").slideToggle(300).siblings(".navContent").slideUp(500);
                    $(this).toggleClass("currentDd").siblings(".subNav").removeClass("currentDd");
                    $(this).toggleClass("currentDt").siblings(".subNav").removeClass("currentDt");
                    if($(".is_scroll").length <= 0){
                    	$('html,body').animate({'scrollTop':$('body')[0].scrollHeight},600);
                    }
                })	
            })
            </script>
            <script type="text/jscript">
            function click_search (){
              var search_ka = document.getElementById("search_ka");
              if (search_ka.className == "s-buy open ui-section-box"){
                  search_ka.className = "s-buy ui-section-box";
                  }else {
                      search_ka.className = "s-buy open ui-section-box";
                      }
            }
            function changeAtt(t) {
            t.lastChild.checked='checked';
            for (var i = 0; i<t.parentNode.childNodes.length;i++) {
                    if (t.parentNode.childNodes[i].className == 'hover') {
                        t.parentNode.childNodes[i].className = '';
                        t.childNodes[0].checked="checked";
                    }
                }
            t.className = "hover";
            changePrice();
            }
            function changeAtt1(t) {
            t.lastChild.checked='checked';
            for (var i = 0; i<t.parentNode.childNodes.length;i++) {
                    if (t.className == 'hover') {
                        t.className = '';
                        t.childNodes[0].checked = false;
                    }
                    else{
                        t.className="hover";
                        t.childNodes[0].checked = true;
                    }
                    
                
            }
            changePrice();
            }
            </script>
            <div class="is_scroll">
<section id="search_ka">
<div class="ui-sx bian1"> 
<div class="subNavBox" > 
<div class="subNav" style=" border:0;"><a href="pocking.php?id=<?php echo $this->_var['goods']['goods_id']; ?>"><strong>自提点</strong></a></div>
</div>
</div> 

  
</section>
</div>
    </div>
    
    <div class="select_box">
        <div class="select_top">
            <span>请选择</span>
            <a href="javascript:;" class="select_box_close" style="float:right;"></a>
        </div>
        
        <div class="select_inner">
            <?php if ($this->_var['specification']): ?>  
            <ul class="navContent" style="display:block;"> 
                <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');$this->_foreach['specification'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['specification']['total'] > 0):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
        $this->_foreach['specification']['iteration']++;
?>
                <li class="no-padd">   
                  <div class="title padd-l10"><?php echo $this->_var['spec']['name']; ?></div>
                  <div class="item  padd-l10">
                  <?php if ($this->_var['spec']['attr_type'] == 1): ?>
                  <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                    <a <?php if ($this->_var['key'] == 0): ?>class="hover"<?php endif; ?> href="javascript:;" id="<?php echo $this->_var['value']['id']; ?>" name="<?php echo $this->_var['value']['id']; ?>" onclick="changeAtt(this);" for="spec_value_<?php echo $this->_var['value']['id']; ?>" title="<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php echo $this->_var['value']['format_price']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php echo $this->_var['value']['format_price']; ?><?php endif; ?>"><input style="display:none" id="spec_value_<?php echo $this->_var['value']['id']; ?>" type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> />
                    <?php echo $this->_var['value']['label']; ?>  <?php if ($this->_var['value']['price'] > 0): ?><font>+ <?php echo $this->_var['value']['format_price']; ?></font><?php elseif ($this->_var['value']['price'] < 0): ?><font>- <?php echo $this->_var['value']['format_price']; ?></font><?php endif; ?></a>
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                  <?php else: ?>
                  <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                  <a <?php if ($this->_var['key'] == 0): ?>class="hover"<?php endif; ?> href="javascript:;" name="<?php echo $this->_var['value']['id']; ?>" onclick="changeAtt1(this)" for="spec_value_<?php echo $this->_var['value']['id']; ?>" title="<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php echo $this->_var['value']['format_price']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php echo $this->_var['value']['format_price']; ?><?php endif; ?>"><input type="checkbox" style=" display:none" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?>/>
                                <?php echo $this->_var['value']['label']; ?> <?php if ($this->_var['value']['price'] > 0): ?><font>+ <?php echo $this->_var['value']['format_price']; ?></font><?php elseif ($this->_var['value']['price'] < 0): ?><font>- <?php echo $this->_var['value']['format_price']; ?></font><?php endif; ?></a>
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                  <?php endif; ?>
                  </div>                    
                </li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  
                
            </ul>
            <?php endif; ?>
            <div class="ui-sx bian1"> 
                <div class="subNavBox"> 
                    <div class="subNav"><strong>购买数量</strong></div>
                    <?php if ($this->_var['goods']['min_buynum'] > 0 || $this->_var['tag'] == 1): ?>
                    <div class="limit_num">
                            <?php if ($this->_var['goods']['min_buynum'] > 0): ?><span class="title1" style="width:50%;padding:0; height:30px; line-height:30px;">最小起订数量：<?php echo $this->_var['goods']['min_buynum']; ?></span><?php endif; ?>
                            <?php if ($this->_var['tag'] == 1): ?><span class="title1" style="width:50%;padding:0; height:30px; line-height:30px;">限购数量：<?php echo $this->_var['goods']['buymax']; ?></span><?php endif; ?>
                    </div><?php endif; ?>
                    <ul class="navContent" style="display:block"> 
                        <li class="bd_bt">
                            
                            <div class="item1">
                             <script language="javascript" type="text/javascript">  function goods_cut(){var num_val=document.getElementById('number');  var new_num=num_val.value;  var Num = parseInt(new_num);  if(Num>1)Num=Num-1;  num_val.value=Num;}  function goods_add(){var num_val=document.getElementById('number');  var new_num=num_val.value;  var Num = parseInt(new_num);  Num=Num+1;  num_val.value=Num;} </script>
                             <span class="ui-number">
                              <button type="button" class="decrease" onclick="goods_cut();changePrice();"></button>
                              <input type="number" class="num" id="number" onblur="changePrice();" name="number" value="<?php echo empty($this->_var['goods']['min_buynum']) ? '1' : $this->_var['goods']['min_buynum']; ?>" min="1" max="<?php echo $this->_var['goods']['goods_number']; ?>" style=" text-align:center"/>
                              <button type="button" class="increase" onclick="goods_add();changePrice();"></button>
                             </span>
                          </div>
                        </li>
                    </ul>  
                </div>
            </div>    
        </div>
        <div class="select_box_btn">
            <a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>);" class="add_cart_btn">确定</a>
            <a href="javascript:addToCart1(<?php echo $this->_var['goods']['goods_id']; ?>);" charset="buy_now_btn">确定</a>
        </div>
    </div>
    
    </form>
    
    <div class="main" id="user_goods_ka_2" style="display:none">
      <div class="product_main" style=" margin-top:40px;">
      	
        <div class="product_images product_desc" id="product_desc"><?php echo $this->_var['goods']['goods_desc']; ?></div>
      </div>
      <?php if ($this->_var['properties']): ?>
      <section class="index_floor">
    	<h2 style=" border-bottom:1px solid #ccc;"><span></span><?php echo $this->_var['lang']['xinxi']; ?></h2>
    	<ul class="xiangq">
        <?php $_from = $this->_var['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'property_group');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['property_group']):
?>
        <?php $_from = $this->_var['property_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'property');if (count($_from)):
    foreach ($_from AS $this->_var['property']):
?>
      	<li><p><?php echo htmlspecialchars($this->_var['property']['name']); ?>:</p><span><?php echo $this->_var['property']['value']; ?></span></li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      	</ul>
      </section>
      <?php endif; ?>
    </div>
    
    <div class="tab_attrs tab_item hide" id="user_goods_ka_3" style="display:none;">
    	<?php echo $this->fetch('library/comments.lbi'); ?> 
    </div>
</div>
    
    <?php if ($this->_var['package_goods_list_120']): ?>
    <div class="is_scroll">
    <div style=" height:8px; background:#eeeeee; margin-top:-1px;"></div>
    <section class="index_taocan">
    <a href="goods.php?act=taocan&goods_id=<?php echo $this->_var['goods']['goods_id']; ?>">
    <h2><span></span>优惠套餐</h2>
        <div class="tc_goods">
        <?php $_from = $this->_var['package_goods_list_120']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pa_item');$this->_foreach['pa_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['pa_list']['total'] > 0):
    foreach ($_from AS $this->_var['pa_item']):
        $this->_foreach['pa_list']['iteration']++;
?>
        <?php if (($this->_foreach['pa_list']['iteration'] <= 1)): ?>
         <?php $_from = $this->_var['pa_item']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pa_goods');$this->_foreach['pa_list_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['pa_list_goods']['total'] > 0):
    foreach ($_from AS $this->_var['pa_goods']):
        $this->_foreach['pa_list_goods']['iteration']++;
?>
         <?php if ($this->_foreach['pa_list_goods']['iteration'] < 4): ?>
          <dl <?php if ($this->_foreach['pa_list_goods']['iteration'] == 3): ?> class="t_goods" <?php else: ?> class="t_goods1" <?php endif; ?>>
          <dt><img src="<?php echo $this->_var['pa_goods']['goods_thumb']; ?>" class="B_eee" ></dt>
          <dd><?php echo $this->_var['pa_goods']['rank_price_zk_format']; ?></dd>
           </dl>
          <?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
</a>
  </section>
</div>
<?php endif; ?>


<?php if ($this->_var['related_goods']): ?>
<section class="index_floor is_scroll">
    <h2><span></span><?php echo $this->_var['lang']['goods_botoomtitle']; ?></h2>
	<div class="bd">
		<ul>
			<?php $_from = $this->_var['related_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'releated_goods_data');$this->_foreach['releated_goods_data'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['releated_goods_data']['total'] > 0):
    foreach ($_from AS $this->_var['releated_goods_data']):
        $this->_foreach['releated_goods_data']['iteration']++;
?>
			<li>
				<a href="<?php echo $this->_var['releated_goods_data']['url']; ?>">
					<div class="products_kuang"><img src="<?php echo $this->_var['releated_goods_data']['goods_thumb']; ?>"></div>
					<div class="goods_name"><?php echo $this->_var['releated_goods_data']['short_name']; ?></div>
					<div class="price" >
						<p href="<?php echo $this->_var['goods']['url']; ?>">
						<?php if ($this->_var['releated_goods_data']['promote_price'] != 0): ?> 
						<?php echo $this->_var['releated_goods_data']['formated_promote_price']; ?> 
						<?php else: ?>
						<?php echo $this->_var['releated_goods_data']['shop_price']; ?><?php endif; ?></p>
                 		<a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>);" class="car"><img src="themesmobile/68ecshopcom_mobile/images/cutp.png"></a>
              		</div>
            	</a>
			</li>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</ul>
	</div>
</section>
<?php endif; ?>  
<?php if ($this->_var['fittings']): ?>
<section class="index_floor is_scroll" style="border-top:1px solid #ddd ">
    <h2><span></span><?php echo $this->_var['lang']['goods_botoomtitle_two']; ?></h2>
    <div class="bd">
		<ul>
			<?php $_from = $this->_var['fittings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_49386900_1457169835');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_49386900_1457169835']):
?>
			<li>
				<a href="<?php echo $this->_var['goods_0_49386900_1457169835']['url']; ?>">
					<div class="products_kuang"><img src="<?php echo $this->_var['goods_0_49386900_1457169835']['goods_thumb']; ?>"></div>
					<div class="goods_name"><?php echo htmlspecialchars($this->_var['goods_0_49386900_1457169835']['short_name']); ?></div>
					<div class="price" >
						<p href="<?php echo $this->_var['goods_0_49386900_1457169835']['url']; ?>"><?php echo $this->_var['goods_0_49386900_1457169835']['fittings_price']; ?> </p>
						<a href="javascript:addToCart(<?php echo $this->_var['goods_0_49386900_1457169835']['goods_id']; ?>);" class="car"><img src="themesmobile/68ecshopcom_mobile/images/cutp.png"></a>
					</div>
				</a>
			</li>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</ul>
	</div>
</section>
<?php endif; ?>
<script>
function goTop(){
	$('html,body').animate({'scrollTop':0},600);
}
</script>
<a href="javascript:goTop();" class="gotop"><img src="themesmobile/68ecshopcom_mobile/images/topup.png"></a>
<div style=" height:60px;"></div>
<div class="footer_nav">
 <ul> 
 	<li class="bian"><a href="index.php"><em class="goods_nav1"></em><span>首页</span></a> </li>
 	<li class="bian"><a href="tel:4000785268"><em class="goods_nav2"></em><span>客服</span></a> </li>
 	<li><a href="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>)" id="favorite_add"><em class="goods_nav3"></em><span>收藏</span></a></li>
 </ul>
 <dl>
 	<dd class="flow"><a class="button active_button addToCartBtn" href="javascript:;">加入购物车</a> </dd>
 	<dd class="goumai"><a style="display:block;" class="buyNowBtn" href="javascript:;">立即购买</a> </dd>
 </dl>                
</div>
<script>
$(function(){
	$('.addshop_cat').click(function(){
	$(".goods").show();var flyElm=$(".good").clone().css("opacity","0.7");flyElm.attr("id","goods_img");var _scrollHeight=$(document).scrollTop(),_windowHeight=$(window).height(),_windowWidth=$(window).width(),_popupHeight=$(".good").height(),_popupWeight=$(".good").width();_posiTop=(_windowHeight-_popupHeight)/2+_scrollHeight;_posiLeft=(_windowWidth-_popupWeight)/2;
flyElm.css({"z-index":9E3,display:"block",position:"absolute",top:_posiTop+"px",left:_posiLeft+"px",width:$(".good").width()+"px",height:$(".good").height()+"px"});$("body").append(flyElm);
		flyElm.animate({
			top:$('.num_cart').offset().top,
			left:$('.num_cart').offset().left,
			width:20,
			height:20,
		},{duration: 1000,
             complete: function(){
			$("#goods_img").remove();
				addToCart(<?php echo $this->_var['goods']['goods_id']; ?>);
				}});

	});

});
</script>
<script type="text/javascript">
var goods_id = <?php echo $this->_var['goods_id']; ?>;
var goodsattr_style = <?php echo empty($this->_var['cfg']['goodsattr_style']) ? '1' : $this->_var['cfg']['goodsattr_style']; ?>;
var gmt_end_time = <?php echo empty($this->_var['promote_end_time']) ? '0' : $this->_var['promote_end_time']; ?>;
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var goodsId = <?php echo $this->_var['goods_id']; ?>;
var now_time = <?php echo $this->_var['now_time']; ?>;


onload = function(){
  changePrice();
  try {onload_leftTime(now_time);}
  catch (e) {}
}

/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;
  <?php if ($this->_var['goods']['min_buynum']): ?>
  if (qty < <?php echo $this->_var['goods']['min_buynum']; ?>)
  {
	alert('对不起！本商品最小起订数为<?php echo $this->_var['goods']['min_buynum']; ?>');
	qty = <?php echo $this->_var['goods']['min_buynum']; ?>;
  }
<?php endif; ?>
  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}

/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;

    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}

</script>
<script>
$(function(){
	//加入购物车和立即购买弹出数量和属性
	$('.addToCartBtn').click(function(){
		$('.select_box').animate({'height':230});
		$('.select_box .add_cart_btn').css('display','block');
		$('.select_box .buy_now_btn').hide();
	})
	$('.buyNowBtn').click(function(){
		$('.select_box').animate({'height':230});
		$('.select_box .add_cart_btn').hide();
		$('.select_box .buy_now_btn').css('display','block');
	})
	$('.select_box_close').click(function(){
		$('.select_box').animate({'height':0});	
	})
	$('.select_box .buy_now_btn,.select_box .add_cart_btn').click(function(){
		$('.select_box').css({'height':0});	
	})
})
</script>
</body>
</html>
                
                