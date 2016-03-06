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
<script src="themesmobile/68ecshopcom_mobile/js/modernizr.js"></script>
<link rel="stylesheet" href="themesmobile/68ecshopcom_mobile/css/ecsmart.css">
<link rel="stylesheet" href="themesmobile/68ecshopcom_mobile/css/public.css">
<link rel="stylesheet" href="themesmobile/68ecshopcom_mobile/css/flow.css">
<script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/jquery.js"></script>
<script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/ecsmart.js"></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.json.js,transport.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,utils.js,shopping_flow.js')); ?>
</head>
<body style="background: rgb(235, 236, 237);">

<div id="popup_window" class="popup_window" style=" display:none;">
	<div class="popup_inner">
      <p class="yezf_tit">请输入余额支付密码</p>
      <input id="surplus_password_input" class='yezf_tit' type="password"/>
      <div class="btn_box">
          <input class="yezf_QXB" type="button" onclick="cancel_input_surplus()" value="取消" />
  		  <input class="yezf_QRB" type="button" onclick="end_input_surplus()" value="确定" />
      </div>
	</div>
</div>

<div class="tab_nav">
  <div class="header">
    <div class="h-left"> <a class="sb-back" href="javascript:history.back(-1)" title="返回"></a> </div>
    <div class="h-mid"> <?php if ($this->_var['step'] == 'cart'): ?>购物车<?php elseif ($this->_var['step'] == 'login'): ?>登录<?php elseif ($this->_var['step'] == 'consignee'): ?>填写收货地址<?php elseif ($this->_var['step'] == 'checkout'): ?>确认订单<?php elseif ($this->_var['step'] == 'ziti'): ?>自提列表<?php elseif ($this->_var['step'] == 'done'): ?>提交订单<?php endif; ?> </div>
    <?php if ($this->_var['step'] == 'cart'): ?><?php if ($this->_var['goods_list']): ?>
    <div class="h-right">
        <aside class="top_bar">
          <div onClick="show_menu();$('#close_btn').addClass('hid');" id="show_more"><a href="javascript:;"></a> </div>
        </aside>
    </div>
    <?php endif; ?><?php endif; ?>
  </div>
</div>
<?php if ($this->_var['step'] == 'cart'): ?><?php if ($this->_var['goods_list']): ?><?php echo $this->fetch('library/up_menu.lbi'); ?>  <?php endif; ?><?php endif; ?>
<div id="tbh5v0">
  <div class="screen-wrap fullscreen login"> <?php if ($this->_var['step'] == 'cart'): ?>
    <?php if ($this->_var['goods_list']): ?>
    <div class="page-shopping" >
      <div>
        <form id="formCart1" name="formCart" method="post" action="flow.php">
          <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['name']['iteration']++;
?>
          <div class="item-list">
            <div class="item">
              <div class="inner">
                <div style="width:60%; float:left; height:98px;">
                  <div class="check-wrapper"> <span  class="cart-checkbox checked" >
                    <input type="checkbox" autocomplete="off" name="sel_cartgoods[]" value="<?php echo $this->_var['goods']['rec_id']; ?>" id="sel_cartgoods_<?php echo $this->_var['goods']['rec_id']; ?>" checked=checked  style="display:none;">
                    </span> </div>
                  <div class="pic"> <a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>"> <img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" ></a> </div>
                  <div class="name"> <span> 
                    <?php if ($this->_var['goods']['is_gift'] != 0): ?> 
                    <span style="color:#FF0000">（<?php echo $this->_var['lang']['largess']; ?>）</span> 
                    <?php endif; ?> 
                    <a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>"><?php echo $this->_var['goods']['goods_name']; ?></a> <?php if ($this->_var['goods']['goods_attr']): ?><?php echo $this->_var['goods']['goods_attr']; ?><?php endif; ?> </span> </div>
                  <div class="attr"> <span><?php if ($this->_var['goods']['goods_attr']): ?><?php echo $this->_var['goods']['goods_attr']; ?><?php endif; ?></span> </div>
                  <div class="num"> <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['is_gift'] == 0 && $this->_var['goods']['parent_id'] == 0): ?>
                    <div class="xm-input-number"> 
                       
                      <a href="javascript:;" onclick="minus_num(<?php echo $this->_var['goods']['rec_id']; ?>,<?php echo $this->_var['goods']['goods_id']; ?>);" id="jiannum<?php echo $this->_var['goods']['rec_id']; ?>"  class="input-sub <?php if ($this->_var['goods']['goods_number'] < 2): ?><?php else: ?>active<?php endif; ?> "></a>
                      <input type="text" onKeyDown='if(event.keyCode == 13) event.returnValue = false' name="goods_number[<?php echo $this->_var['goods']['rec_id']; ?>]" id="goods_number_<?php echo $this->_var['goods']['rec_id']; ?>" value="<?php echo $this->_var['goods']['goods_number']; ?>" class="input-num"  onblur="change_price(<?php echo $this->_var['goods']['rec_id']; ?>,<?php echo $this->_var['goods']['goods_id']; ?>)"/>
                      <input type="hidden" id="hidden_<?php echo $this->_var['goods']['rec_id']; ?>" value="<?php echo $this->_var['goods']['goods_number']; ?>">
                      <a href="javascript:;" onclick='javascript:add_num(<?php echo $this->_var['goods']['rec_id']; ?>,<?php echo $this->_var['goods']['goods_id']; ?>)' class="input-add active"></a> </div>
                    <?php else: ?>
                    x<?php echo $this->_var['goods']['goods_number']; ?>
                    <?php endif; ?> </div>
                </div>
                <div style=" position:absolute; right:0px; top:20px; width:120px; height:98px;">
                  <div class="price"> <span class="mar_price"><?php echo $this->_var['goods']['market_price']; ?></span> <br>
                    <span><?php echo $this->_var['goods']['goods_price']; ?></span> </div>
                  <div class="delete"> <a href="javascript:if (confirm('<?php echo $this->_var['lang']['drop_goods_confirm']; ?>')) location.href='flow.php?step=drop_goods&amp;id=<?php echo $this->_var['goods']['rec_id']; ?>'; ">
                    <div class="icon-shanchu"></div>
                    </a> </div>
                </div>
                <div style="height:0px; line-height:0px; clear:both;"></div>
              </div>
              <div class="append"></div>
            </div>
          </div>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          <?php if (favourable_list): ?>
          <div class="flow_fav">
              <?php if ($this->_var['favourable_list']): ?> 
              <a class="choose_gift" href="javascript:void(0);" onclick="choose_gift(<?php echo $this->_var['cartkey']; ?>)"><span>赠品</span>选择赠品</a>
              <?php endif; ?> 
          </div>
          <?php if ($this->_var['discount'] > 0): ?>
          <div class="flow_fav_txt"><?php echo $this->_var['your_discount']; ?></div>
          <?php endif; ?>
          <?php endif; ?>
          <input type="hidden" name="step" value="update_cart">
          <div class="bottom-panel" >
            <div class="quanxuan">
              <div class="check-wrapper"> <span  class="cart-checkbox checked" onclick="return chkAll_onclick()"></span><span class="cart-checktext">全选</span> </div>
            </div>
            <div class="info"> <span class="hot" id="cart_amount_desc"><em>总计：</em><?php echo $this->_var['shopping_money']; ?></span> <br>
              <span class="hot_text">不含运费</span> </div>
            <div class="right"> 
              <input type="button" href="javascript:void();"  onclick="return selcart_submit();" class="xm-button " value="去结算">
              </div>
          </div>
          <script type="text/javascript" charset="utf-8">
   $(".inner .cart-checkbox").click(function(){
  if($(this).hasClass('checked')){
    $(this).removeClass('checked');
    $(this).find('input').attr('checked',false);
  }
  else
  {
    $(this).addClass('checked');
    $(this).find('input').attr('checked',true);
  }
if($(".inner .cart-checkbox")==true)
{
$('.quanxuan .cart-checkbox').addClass('checked');
}
else
{
$('.quanxuan .cart-checkbox').removeClass('checked');
}

  var is_checked = true;
            $('.inner .cart-checkbox').each(function(){
        if(!$(this).hasClass('checked'))
          {
            is_checked = false;
            return false;
          }
               });
        if(is_checked){
        $('.quanxuan .cart-checkbox').addClass('checked'); 
        }else
        {
        $('.quanxuan .cart-checkbox').removeClass('checked'); 
        }
      select_cart_goods();
         
});

  function chkAll_onclick() 
  {
    var is_checked = false;
    if($('.quanxuan .cart-checkbox').hasClass('checked')){
      $('.quanxuan .cart-checkbox').removeClass('checked');
      $('.inner .cart-checkbox').removeClass('checked');
      is_checked = false;
    }   
    else{
      $('.quanxuan .cart-checkbox').addClass('checked');
      $('.inner .cart-checkbox').addClass('checked');
      is_checked = true;
    }
    for (var i=0;i<document.formCart.elements.length;i++)
    {
    var e = document.formCart.elements[i];
    e.checked = is_checked;
    }
    select_cart_goods();
  }
  function select_cart_goods()
  {
        var sel_goods = new Array();
        var obj_cartgoods = document.getElementsByName("sel_cartgoods[]");
        var j=0;
        for (i=0;i<obj_cartgoods.length;i++)
        {
      if(obj_cartgoods[i].checked == true)
      { 
        sel_goods[j] = obj_cartgoods[i].value;
        j++;
      }
        }
        Ajax.call('flow.php', 'act=selcart&sel_goods=' + sel_goods, selcartResponse, 'GET', 'JSON');
  }
  function selcartResponse(res)
  {
  if(res.result == '请选择要结算的商品！')
  {
        $('.xm-button').addClass('to_cart');
      $('.xm-button').attr('disable');
  }
  else{
      $('.xm-button').removeClass('to_cart');
      $('.xm-button').removeAttr('disable');
    }
    if (res.err_msg.length > 0)
    {
            alert(res.err_msg);
    }
    else
    {
     
       document.getElementById('cart_amount_desc').innerHTML=res.result;
    }
  }
  function selcart_submit()
  {
	var obj_cartgoods = document.getElementsByName("sel_cartgoods[]");
	var j=0;
	for (i=0;i<obj_cartgoods.length;i++)
	{
      if(obj_cartgoods[i].checked == true)
      { 
        j++;
      }
	}
	if (j>0)
	{
      document.formCart.action='flow.php?step=checkout';
      document.formCart.elements['step'].value='checkout';
      document.formCart.submit();
      return true;
	}
	else
	{   
	  alert('请选择要结算的商品！');
	  return false;
	}
  }
  </script> 
  <script>
  function add_num(rec_id,goods_id)
   {
    document.getElementById("goods_number_"+rec_id+"").value++;
    if(document.getElementById("goods_number_"+rec_id+"").value > 1)
    {
      document.getElementById("jiannum"+rec_id).className = 'input-sub active';
      }else
      {
      document.getElementById("jiannum"+rec_id).className = 'input-sub';
      }
    var number = document.getElementById("goods_number_"+rec_id+"").value;
    Ajax.call('flow.php', 'step=update_group_cart&rec_id=' + rec_id +'&number=' + number+'&goods_id=' + goods_id, changePriceResponse, 'GET', 'JSON');
   }
  function minus_num(rec_id,goods_id)
  {
    if (document.getElementById("goods_number_"+rec_id+"").value>1)
    {
      document.getElementById("goods_number_"+rec_id+"").value--;
      if(document.getElementById("goods_number_"+rec_id+"").value > 1)
    {
      document.getElementById("jiannum"+rec_id).className = 'input-sub active';
      }else
      {
      document.getElementById("jiannum"+rec_id).className = 'input-sub';
      }
    }
    var number = document.getElementById("goods_number_"+rec_id+"").value;
    Ajax.call('flow.php', 'step=update_group_cart&rec_id=' + rec_id +'&number=' + number+'&goods_id=' + goods_id, changePriceResponse, 'GET', 'JSON');
  }

function change_price(rec_id,goods_id)
{
  var r = /^[1-9]+[0-9]*]*$/;
  var number = document.getElementById("goods_number_"+rec_id+"").value;
  if (!r.test(number))
  {
    alert("您输入的格式不正确！");
    document.getElementById("goods_number_"+rec_id+"").value=document.getElementById("hidden_"+rec_id+"").value;
  }
  else
  {
    Ajax.call('flow.php','step=update_group_cart&rec_id=' + rec_id +'&number=' + number+'&goods_id=' + goods_id, changePriceResponse, 'GET', 'JSON');
  }
}

function changePriceResponse(result){
		if(result.error == 1){
		  alert(result.content);
		  document.getElementById("goods_number_"+result.rec_id+"").value =result.number;
		  document.getElementById("hidden_"+result.rec_id+"").value =result.number;
		}else{
		  document.getElementById("hidden_"+result.rec_id+"").value =result.number;
		  document.getElementById('cart_amount_desc').innerHTML = result.cart_amount_desc;//购物车商品总价说明
		  show_div_text = "恭喜您！ 商品数量修改成功！ ";
		}
	}
</script>
        </form>
      </div>
    </div>
    <?php if ($this->_var['fittings_list'] || $this->_var['collection_goods']): ?>
    <?php if ($this->_var['fittings_list']): ?> 
    <script type="text/javascript" charset="utf-8">
  function fittings_to_flow(goodsId,parentId)
  {
    var goods        = new Object();
    var spec_arr     = new Array();
    var number       = 1;
    goods.spec     = spec_arr;
    goods.goods_id = goodsId;
    goods.number   = number;
    goods.parent   = parentId;
    Ajax.call('flow.php?step=add_to_cart', 'goods=' +  $.toJSON(goods), fittings_to_flow_response, 'POST', 'JSON');
  }
  function fittings_to_flow_response(result)
  {
    if (result.error > 0)
    {
      // 如果需要缺货登记，跳转
      if (result.error == 2)
      {
        alert(result.message);
      
      }
      else if (result.error == 6)
      {
        openSpeDivflow(result.message, result.goods_id, result.parent);
      }
      else
      {
        alert(result.message);
      }
    }
    else
    {
      location.href = 'flow.php';
    }
  }
  </script>
    <section class="index_floor" style="border-top:1px solid #e1e0e0 ">
      <h2> <span></span> 商品相关配件 </h2>
      <div class="bd">
        <ul>
          <?php $_from = $this->_var['fittings_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'fittings');$this->_foreach['fittings_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fittings_list']['total'] > 0):
    foreach ($_from AS $this->_var['fittings']):
        $this->_foreach['fittings_list']['iteration']++;
?>
          <li> <a href="<?php echo $this->_var['fittings']['url']; ?>">
            <div class="products_kuang"> <img src="<?php echo $this->_var['option']['static_path']; ?><?php echo $this->_var['fittings']['goods_thumb']; ?>"></div>
            <div class="goods_name"><?php echo htmlspecialchars($this->_var['fittings']['goods_name']); ?></div>
            </a>
            <div class="price"> <a href="<?php echo $this->_var['fittings']['url']; ?>">
              <p><?php echo $this->_var['fittings']['fittings_price']; ?></p>
              </a> <a href="javascript:fittings_to_flow(<?php echo $this->_var['fittings']['goods_id']; ?>,<?php echo $this->_var['fittings']['parent_id']; ?>)" class="car"> <img src="themesmobile/68ecshopcom_mobile/images/cutp.png"></a> </div>
          </li>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
      </div>
    </section>
    <?php endif; ?>
    <?php if ($this->_var['collection_goods']): ?>
    <section class="index_floor" style="border-top:1px solid #e1e0e0 ">
      <h2> <span></span> 我的收藏 </h2>
      <div class="bd">
        <ul>
          <?php $_from = $this->_var['collection_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods']['iteration']++;
?>
          <li> <a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>">
            <div class="products_kuang"> <img src="<?php echo $this->_var['goods']['goods_thumb']; ?>"></div>
            <div class="goods_name"><?php echo $this->_var['goods']['goods_name']; ?></div>
            </a>
            <div class="price"> <a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>">
              <p><?php echo $this->_var['goods']['shop_price']; ?></p>
              </a> <a href="javascript:addToCartflow(<?php echo $this->_var['goods']['goods_id']; ?>)" class="car"> <img src="themesmobile/68ecshopcom_mobile/images/index_flow.png"></a> </div>
          </li>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
      </div>
    </section>
    <?php endif; ?>
    <?php endif; ?> 
    
    <div style=" height:72px; clear:both"></div>
    <?php else: ?>
    <section id="cart-content">
      <div class="qb_tac" style="padding:50px 0"> <img src="themesmobile/68ecshopcom_mobile/images/flow/empty_cart.png" width="100" height="95"> <br>
        购物车还是空的</div>
      <div class="qb_gap" style="width:60%; margin:0 auto;"> <a href="./" class="mod_btn btn_strong" >马上逛逛</a> </div>
    </section>
    <?php echo $this->fetch('library/footer_nav.lbi'); ?> 
    <script language="javascript">
$(function(){ 
$('input[type=text],input[type=password]').bind({ 
focus:function(){ 
 $(".global-nav").css("display",'none'); 
}, 
blur:function(){ 
 $(".global-nav").css("display",'flex'); 
} 
}); 
}) 
</script> 
    <?php endif; ?>
    <?php endif; ?>
    
    
    <?php if ($this->_var['step'] == 'login'): ?> 
    <script>
      $().ready(function(){
          //登录切换
          $("#logRegTab li").bind("click", function () {
              if (this.id == "mob_log") {
                  $("#mob_log").removeClass("currl");
                  $("#acc_log").addClass("currr");
                  $("#phonearea").removeClass("hide");
                  $("#accountarea").addClass("hide");
              } else {
                  $("#acc_log").removeClass("currr");
                  $("#mob_log").addClass("currl");
                  $("#phonearea").addClass("hide");
                  $("#accountarea").removeClass("hide");
              }
			  $(".btn_log").css("color","#FFFEFE");
          });
	  });
  </script> 
    <?php echo $this->smarty_insert_scripts(array('files'=>'user.js')); ?> 
    <script type="text/javascript">
        <?php $_from = $this->_var['lang']['flow_login_register']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
          var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

        
        function checkLoginForm(frm) {
          if (Utils.isEmpty(frm.elements['username'].value)) {
            alert(username_not_null);
            return false;
          }

          if (Utils.isEmpty(frm.elements['password'].value)) {
            alert(password_not_null);
            return false;
          }

          return true;
        }

        function checkSignupForm(frm) {
          if (Utils.isEmpty(frm.elements['username'].value)) {
            alert(username_not_null);
            return false;
          }

          if (Utils.trim(frm.elements['username'].value).match(/^\s*$|^c:\\con\\con$|[%,\'\*\"\s\t\<\>\&\\]/))
          {
            alert(username_invalid);
            return false;
          }

          if (Utils.isEmpty(frm.elements['email'].value)) {
            alert(email_not_null);
            return false;
          }

          if (!Utils.isEmail(frm.elements['email'].value)) {
            alert(email_invalid);
            return false;
          }

          if (Utils.isEmpty(frm.elements['password'].value)) {
            alert(password_not_null);
            return false;
          }

          if (frm.elements['password'].value.length < 6) {
            alert(password_lt_six);
            return false;
          }

          if (frm.elements['password'].value != frm.elements['confirm_password'].value) {
            alert(password_not_same);
            return false;
          }
          return true;
        }
        
        </script>
    <div class="m311 log_reg_box">
      <ul class="tab" id="logRegTab">
        <li id="mob_log" class="curr"><span><font>登录</font></span></li>
        <li id="acc_log" class="curr currr"><span><font>免费注册</font></span></li>
      </ul>
      <div id="logRegTabCon">
        <div class="log_reg_item" id="phonearea">
          <section class="innercontent" >
            <form action="flow.php?step=login" name="loginForm" id="loginForm" onsubmit="return checkLoginForm(this)" method="post" class="c-form login-form">
              <fieldset>
                <div class="field username">
                  <div class="c-form-search">
                    <input type="text" name="username" placeholder="请输入用户名/邮箱" value=""/>
                  </div>
                </div>
                <div class="field pwd">
                  <input type="password" name="password" placeholder="密码" class="c-form-txt-normal"/>
                </div>
                <?php if ($this->_var['enabled_register_captcha']): ?>
                <div class="field identifyCode">
                  <div class="c-form-search">
                    <div class="codeTxt">
                      <input type="text" name="captcha" placeholder="验证码" class="c-f-text"/>
                    </div>
                    <div class="codePhoto"> <img class="check-code-img" src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" alt="<?php echo $this->_var['lang']['comment_captcha']; ?>"  title="<?php echo $this->_var['lang']['captcha_tip']; ?>" onClick="this.src='captcha.php?is_login=1&'+Math.random()" height="35"/></div>
                  </div>
                </div>
                <?php endif; ?>
                <div class="field submit-btn">
                  <input type="submit" class="c-btn-oran-big1" onclick="member_login()" value="登 录">
                  <input type="hidden" name="act" value="act_login">
                  <input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>">
                </div>
                <div class="field">
                  <label class="bf1 login_ffri">
                    <input type="checkbox" name="remember" value="1" checked="" >
                    &nbsp;保存登录信息</label>
                  <a class="login_ffleft" href="user.php?act=get_password">找回密码</a> <?php if ($this->_var['anonymous_buy'] == 1): ?>
                  <div style="height:10px; line-height:10px; clear:both"></div>
                  <div class="tips" style="margin-top:20px;"> <a href="flow.php?step=consignee&amp;direct_shopping=1" class="big">不打算登录，直接购买</a> </div>
                </div>
                <?php endif; ?>
                <div style="height:20px; line-height:20px; clear:both"></div>
                <div class="field">
                  <div style="height:10px; line-height:10px; clear:both"></div>
                  使用合作网站账号登录： </div>
                <div class="signIn_coo" >
                  <ul class="coo_panel cssBox">
                    <li class="box_flex_1"> <a href="user.php?act=oath&type=qq">
                      <div class="btn_qq" ></div>
                      </a> </li>
                    <li class="box_flex_1"> <a href="user.php?act=oath&type=alipay">
                      <div class="btn_alipay" ></div>
                      </a> </li>
                    <li class="box_flex_1"> <a href="user.php?act=oath&type=weibo">
                      <div class="btn_weibo"></div>
                      </a> </li>
                  </ul>
                </div>
                <input name="act" type="hidden" value="signin" />
              </fieldset>
            </form>
          </section>
        </div>
        <div class="log_reg_item hide" id="accountarea">
          <section class="innercontent">
            <form action="flow.php?step=login" method="post"  name="formUser" id="registerForm" onsubmit="return checkSignupForm(this)" >
              <fieldset>
                <div class="field username">
                  <div class="c-form-search st" style="background-position: 7px 10px;">
                    <input type="text" name="username" id="username" placeholder="账户名" class="c-f-text"  onblur="is_registered(this.value);"/>
                  </div>
                  <div class="tips" ><span id="username_notice"></span></div>
                </div>
                <div class="field email">
                  <div class="c-form-search st">
                    <input type="email" name="email" placeholder="邮箱地址" value="" class="c-f-text" id="email" onblur="checkEmail(this.value);"  />
                  </div>
                  <div class="tips"><span id="email_notice"></span></div>
                </div>
                <div class="field pwd">
                  <div class="ptxt st">
                    <input type="password" name="password" id="password1" onblur="check_password(this.value);" value="" placeholder="密码" class="c-f-text"/>
                  </div>
                  <div class="tips"><span id="password_notice"> </span></div>
                </div>
                <div class="field pwd">
                  <div class="ptxt st">
                    <input type="password" name="confirm_password" id="conform_password" onblur="check_conform_password(this.value);" value="" placeholder="确认密码" class="c-f-text">
                  </div>
                  <div class="tips"><span id="conform_password_notice"> </span></div>
                </div>
                <?php if ($this->_var['enabled_register_captcha']): ?>
                <div class="field identifyCode">
                  <div class="c-form-search">
                    <div class="codeTxt">
                      <input name="captcha" type="text" value="" placeholder="验证码" class="c-f-text">
                    </div>
                    <div class="codePhoto"> <img src="captcha.php?<?php echo $this->_var['rand']; ?>" alt="<?php echo $this->_var['lang']['comment_captcha']; ?>" title="<?php echo $this->_var['lang']['captcha_tip']; ?>" onClick="this.src='captcha.php?'+Math.random()" height="35" class="check-code-img"/> </div>
                  </div>
                </div>
                <?php endif; ?>
                <div class="field submit-btn">
                  <input type="checkbox" style="display:none" name="agreement" value="1" checked="checked" required>
                  <input type="submit" class="c-btn-orange" value="注 册">
                  <input name="act" type="hidden" value="signup" />
                </div>
              </fieldset>
            </form>
          </section>
        </div>
      </div>
    </div>
    <?php endif; ?>
    
    <?php if ($this->_var['step'] == 'consignee'): ?>
    <?php echo $this->smarty_insert_scripts(array('files'=>'region.js')); ?> 
    <script type="text/javascript">
          region.isAdmin = false;
          <?php $_from = $this->_var['lang']['flow_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
          var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

          
          onload = function() {
            if (!document.all)
            {
              document.forms['theForm'].reset();
            }
          }
          
        </script> 
    
    <?php $_from = $this->_var['consignee_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('sn', 'consignee');if (count($_from)):
    foreach ($_from AS $this->_var['sn'] => $this->_var['consignee']):
?> 
    <?php if (! $this->_var['consignee']['consignee']): ?><a href="javascript:void(0);" class="textlink fl">新增收货地址+</a>
    <div class="clearfix"></div>
    <?php endif; ?>
    <form action="flow.php" method="post" name="theForm" id="theForm" onsubmit="return checkConsignee(this)">
      <?php echo $this->fetch('library/consignee.lbi'); ?>
    </form>
    <div style=" height:10px; line-height:10px; clear:both;"></div>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    <script type="text/javascript">
<?php $_from = $this->_var['lang']['flow_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</script> 
    <?php endif; ?>
    <?php if ($this->_var['step'] == 'checkout'): ?>
    <?php echo $this->smarty_insert_scripts(array('files'=>'region.js,utils.js')); ?>
    <form action="flow.php" method="post" name="theForm" id="theForm" onsubmit="return checkOrderForm(this)">
      <script type="text/javascript">
        var flow_no_payment = "<?php echo $this->_var['lang']['flow_no_payment']; ?>";
        var flow_no_shipping = "<?php echo $this->_var['lang']['flow_no_shipping']; ?>";
  </script>
      <section class="content" style="min-height: 294px;">
        <div class="wrap">
          <div class="active" style="min-height: 294px;">
            <div class="content-buy">
              <div class="wrap order-buy"> <a href="flow.php?step=consignee">
                <section class="address">
                  <div class="address-info" > 收货人:
                    <p class="address-name"><?php echo htmlspecialchars($this->_var['consignee']['consignee']); ?></p>
                    <p class="address-phone"><?php if ($this->_var['consignee']['mobile'] != ""): ?><?php echo $this->_var['consignee']['mobile']; ?><?php else: ?><?php echo $this->_var['consignee']['tel']; ?><?php endif; ?></p>
                  </div>
                  <div class="address-details">收货地址：<?php echo htmlspecialchars($this->_var['consignee']['region']); ?> <?php echo htmlspecialchars($this->_var['consignee']['address']); ?></div>
                </section>
                </a>
                <section class="order " id="order4">
                  <section class="order-info">
                    <div class="order-list">
                      <div class="orderInfo " >
                        <h4 class="seller-name"> <img src="themesmobile/68ecshopcom_mobile/images/flow/dingdan.png" width="28"> 订单详情 
                          <?php if ($this->_var['allow_edit_cart']): ?><a class="modify" href="flow.php">修改</a> <?php endif; ?> 
                        </h4>
                      </div>
                      <ul class="order-list-info">
                        <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
                        <li class="item" id="item2">
                          <div class="itemPay list-price-nums" id="itemPay17">
                            <p class="price">￥<?php echo $this->_var['goods']['subtotal']; ?></p>
                            <p class="nums">x<?php echo $this->_var['goods']['goods_number']; ?></p>
                          </div>
                          <div class="itemInfo list-info" id="itemInfo12">
                            <div class="list-img"> <a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>"> <?php if ($this->_var['goods']['goods_thumb']): ?><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>"><?php else: ?><img src="themesmobile/68ecshopcom_mobile/images/no_picture.gif"><?php endif; ?></a> </div>
                            <div class="list-cont">
                              <h5 class="goods-title"><?php if ($this->_var['goods']['is_gift'] != 0): ?> 
                    <span style="color:#FF0000">（<?php echo $this->_var['lang']['largess']; ?>）</span> 
                    <?php endif; ?> <?php echo $this->_var['goods']['goods_name']; ?></h5>
                              <p class="godds-specification"><?php echo $this->_var['goods']['goods_attr']; ?></p>
                            </div>
                          </div>
                        </li>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                      </ul>
                      <div class="content ptop0">
                        <div class="panel panel-default info-box"> <?php if ($this->_var['total']['real_goods_count'] != 0): ?>
                          <div class="panel-body">                         
                          </div>
                          <div class="panel-body">
							<input id='empeisong_input' type='hidden' value='0' />
                            <div class="title" id="peisongtitle" style="border-bottom:1px solid #eeeeee;"> <span class="i-icon-arrow-down" id="peisongip"></span> <span class="text">配送方式</span><a href="javascript:void(0)" title="<?php echo $this->_var['lang']['modify']; ?><?php echo $this->_var['lang']['goods_list']; ?>" class="link">必选</a> <em class="qxz" id="empeisong"><?php if ($_GET['p'] == 'zt'): ?>门店自提<?php else: ?>请选择配送方式<?php endif; ?></em> </div>
                            <ul class="nav nav-list-sidenav" id="peisong68" style="display:block;">
                              <?php $_from = $this->_var['shipping_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'shipping');$this->_foreach['shipping_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['shipping_list']['total'] > 0):
    foreach ($_from AS $this->_var['shipping']):
        $this->_foreach['shipping_list']['iteration']++;
?>
                              <li>
                                <label for="shipping_method_<?php echo $this->_var['shipping']['shipping_id']; ?>">
                                  <input id="shipping_method_<?php echo $this->_var['shipping']['shipping_id']; ?>" name="shipping" type="radio" value="<?php echo $this->_var['shipping']['shipping_id']; ?>" <?php if ($this->_var['order']['shipping_id'] == $this->_var['shipping']['shipping_id']): ?>checked="true"<?php endif; ?> supportCod="<?php echo $this->_var['shipping']['support_cod']; ?>" insure="<?php echo $this->_var['shipping']['insure']; ?>" onclick="selectShipping(this)" supoortPickup="<?php echo $this->_var['shipping']['support_pickup']; ?>" class="flow_radio"/>
                                  <?php echo $this->_var['shipping']['shipping_name']; ?></label>
                                <?php if ($this->_var['shipping']['shipping_fee'] != 0): ?><?php echo $this->_var['shipping']['format_shipping_fee']; ?><?php else: ?><?php echo $this->_var['lang']['free']; ?><?php endif; ?> 
								<?php if ($this->_var['order']['shipping_id'] == $this->_var['shipping']['shipping_id'] && $this->_var['shipping']['shipping_name'] == '门店自提'): ?>
								<script>
								document.getElementById('empeisong').innerHTML = '门店自提';
								document.getElementById('empeisong_input').value = '1';
								</script>
								<?php endif; ?>
								</li>
                              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                              <!--配送保价 <li><label for="ECS_NEEDINSURE" class="ralabel">
                                                                <input class="pay-radio" type="checkbox" name="need_insure" value="1" id="ECS_NEEDINSURE" onclick="selectInsure(this.checked)"  <?php if ($this->_var['order']['need_insure']): ?>checked="true"<?php endif; ?>  style="margin-top:6px"/><?php echo $this->_var['lang']['need_insure']; ?>
                                                                </label>
                                                             </li>-->
                            </ul>
                          </div>
                          
                          <div class="panel-body" id="pickup_point_box" style="display:<?php if ($_GET['p'] != 'zt'): ?>none<?php endif; ?>;border-bottom:1px solid #eeeeee;">
                            <div class="title"> <span class="text">自提点</span>
                              <input type="hidden" name="pickup_point" value="<?php echo $this->_var['pickup_point_list']['id']; ?>">
                              <em class="qxz"><?php echo $this->_var['pickup_point_list']['shop_name']; ?></em><a href="flow.php?step=ziti" class="revise fr"><font class="f60">修改</font></a> </div>
                          </div>
						  <script>
						  if (document.getElementById('empeisong_input').value == '1')
						  {
							document.getElementById('pickup_point_box').style.display = 'block';
						  }
						  </script>
                          <?php else: ?>
                          <input type="hidden" name="shipping" value="-1" checked="checked"/>
                          <?php endif; ?>
                          
                          <?php if ($this->_var['is_exchange_goods'] != 1 || $this->_var['total']['real_goods_count'] != 0): ?>
                          <div class="panel-body">
                            <div class="title" id="zhifutitle" style="border-bottom:1px solid #eeeeee;"> <span class="i-icon-arrow-down" id="zhifuip"></span> <span class="text">支付方式</span><a href="javascript:void(0)" title="<?php echo $this->_var['lang']['modify']; ?><?php echo $this->_var['lang']['goods_list']; ?>" class="link">必选</a><em class="qxz" id="emzhifu">请选择支付方式</em> </div>
                            <ul class="nav-list-sidenav" id="zhifu68" style="display:block;">
                              <?php $_from = $this->_var['payment_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'payment');if (count($_from)):
    foreach ($_from AS $this->_var['payment']):
?>
                              <li <?php if (! $this->_var['allow_use_surplus'] && $this->_var['payment']['pay_name'] == '余额支付'): ?>style="height:50px"<?php endif; ?>>
                                <label for="payment_method_<?php echo $this->_var['payment']['pay_id']; ?>" >
                                  <input id="payment_method_<?php echo $this->_var['payment']['pay_id']; ?>" type="radio" name="payment" value="<?php echo $this->_var['payment']['pay_id']; ?>" <?php if ($this->_var['order']['pay_id'] == $this->_var['payment']['pay_id']): ?><?php if (( ! $this->_var['allow_use_surplus'] && $this->_var['payment']['pay_name'] == '余额支付' ) || ( $this->_var['cod_disabled'] && $this->_var['payment']['is_cod'] == "1" )): ?><?php else: ?> checked="checked"<?php endif; ?><?php endif; ?> isCod="<?php echo $this->_var['payment']['is_cod']; ?>" onclick="selectPayment(this)" <?php if (( $this->_var['cod_disabled'] && $this->_var['payment']['is_cod'] == "1" ) || ( ! $this->_var['allow_use_surplus'] && $this->_var['payment']['pay_name'] == '余额支付' )): ?>disabled="true"<?php endif; ?> class="pay-radio flow_radio" style="vertical-align:middle"/>
                                  <?php echo $this->_var['payment']['pay_name']; ?></label>
                                <?php if ($this->_var['payment']['is_cod']): ?>
                                (运费由配送决定)
                                <?php else: ?>
                                (运费 <?php echo $this->_var['payment']['format_pay_fee']; ?>)
                                <?php endif; ?>
								<?php if (! $this->_var['allow_use_surplus'] && $this->_var['payment']['pay_name'] == '余额支付'): ?>
								<br />(您的余额不足或网站已禁止使用余额)
								<?php endif; ?>
							  </li>
							  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </ul>
                          </div>
                          <?php else: ?>
                          <input type="radio" name="payment" value="-1" checked="checked" style="display:none"/>
                          <?php endif; ?>
                        </div>
                        
                        <div class="panel panel-default info-box">
                          <div class="orderInfo">
                            <h4 class="seller-name"><img src="themesmobile/68ecshopcom_mobile/images/flow/dingdan.png" width="28"> 其他选项</h4>
                          </div>
                          
                          <?php if ($this->_var['inv_content_list']): ?>
                          <div class="panel-body" style="display:<?php if ($this->_var['is_exchange_goods']): ?>none<?php endif; ?>">
                            <div class="title" id="Invoice_title" style="border-bottom:1px solid #eeeeee;"> <span class="i-icon-arrow-down" id="Invoiceip"></span> <span class="text">发票信息</span><em class="qxz">请填写发票内容</em> </div>
                            <ul class="nav nav-list-sidenav" id="Invoice_ul" style="display:none;">
                            	<li style="border:0;padding:10px 0;">
                                	<div class="need_inv"><input name="need_inv" type="checkbox" id="ECS_NEEDINV" onclick="changeNeedInv()" value="1" class="flow_checkbox"/>&nbsp;开发票：</div>
                                    <select name="inv_type" id="ECS_INVTYPE" <?php if ($this->_var['order']['need_inv'] != 1): ?>disabled="true"<?php endif; ?> onchange="changeNeedInv()">
										<option value="0">发票类型</option>
                                  		<?php echo $this->html_options(array('options'=>$this->_var['inv_type_list'],'selected'=>$this->_var['order']['inv_type'])); ?>
                                  	</select>
                                </li>
                                <li style="border:0;padding:10px 0;">
                                	<div class="need_inv">&nbsp;</div>
                                    <select name="inv_content" id="ECS_INVCONTENT" <?php if ($this->_var['order']['need_inv'] != 1): ?>disabled="true"<?php endif; ?> onchange="changeNeedInv()">
                                      <option value="0">发票内容</option>
                                      <?php echo $this->html_options(array('values'=>$this->_var['inv_content_list'],'output'=>$this->_var['inv_content_list'],'selected'=>$this->_var['order']['inv_content'])); ?>
                                    </select>
                                </li>
                            	<li id="normal_invoice_tbody" style="display:none;border:0; padding:10px 0;">
                                	<div class="individual_inv_box">
                                		<div class="need_inv">发票抬头：</div>
                                    	<label for="individual_inv">
                                    		<input id="individual_inv" type="radio" onchange="changeNeedInv()" name="inv_payee_type" value="individual" checked="true" class="flow_radio"/>个人</label>
                                        <label for="unit_inv">
                                    		<input id="unit_inv" type="radio" onchange="changeNeedInv()" name="inv_payee_type" value="unit" class="flow_radio"/>单位</label>
                                        
                                    </div>
                                    <input class="comWidth" id="ECS_INVPAYEE" name="inv_payee" placeholder="单位名称" style="display:none"/>
                                </li>
                                
                                <li id="vat_invoice_tbody" style="display:none; padding:10px 0;border-bottom:0;">
                                	<h3>公司信息</h3>
                                	<div class="vat_invoice_div">
                                    	<div class="left"><em style='color:#e4393c'>*</em>单位名称：</div>
                                    	<div class="right"><input name='vat_inv_company_name' type='text' class="inputZZS"/></div>
                                    </div>
                                    <div class="vat_invoice_div">
                                    	<div class="left"><em style='color:#e4393c'>*</em>纳税人识别号：</div>
                                    	<div class="right"><input name='vat_inv_taxpayer_id' type='text'  onblur='javascript:check_taxpayer_id(this,"taxpayer_notice")' class="inputZZS inputZZS1"/><div id='taxpayer_notice'></div></div>
                                    </div>
                                    <div class="vat_invoice_div">
                                    	<div class="left"><em style='color:#e4393c'>*</em>注册地址：</div>
                                    	<div class="right"><input name='vat_inv_registration_address' type='text' class="inputZZS" /></div>
                                    </div>
                                    <div class="vat_invoice_div">
                                    	<div class="left"><em style='color:#e4393c'>*</em>注册电话：</div>
                                    	<div class="right"><input name='vat_inv_registration_phone' type='text' class="inputZZS" /></div>
                                    </div>
                                    <div class="vat_invoice_div">
                                    	<div class="left"><em style='color:#e4393c'>*</em>开户银行：</div>
                                    	<div class="right"><input name='vat_inv_deposit_bank' type='text' class="inputZZS" /></div>
                                    </div>
                                    <div class="vat_invoice_div">
                                    	<div class="left"><em style='color:#e4393c'>*</em>银行账户：</div>
                                    	<div class="right"><input name='vat_inv_bank_account' type='text' onblur='javascript:check_bank_account(this,"bank_account_notice")' class="inputZZS inputZZS1" /><div id='bank_account_notice'></div></div>
                                    </div>
                                    <h3>收票人信息</h3>
                                    <div class="vat_invoice_div">
                                    	<div class="left"><em style='color:#e4393c'>*</em>收票人姓名：</div>
                                    	<div class="right"><input name='inv_consignee_name' type='text' class="inputZZS ZZSname" /></div>
                                    </div>
                                    <div class="vat_invoice_div">
                                    	<div class="left"><em style='color:#e4393c'>*</em>收票人手机：</div>
                                    	<div class="right"><input name='inv_consignee_phone' type='text' onblur='javascript:check_phone_number(this,"phone_number_notice")' class="inputZZS inputZZS2"/><div id='phone_number_notice'></div></div>
                                    </div>
                                    <div class="vat_invoice_div" style="padding-bottom:0;">
                                    	<div class="left"><em style='color:#e4393c'>*</em>收票人省份：</div>
                                    	<div class="right"><input type="hidden" name="inv_country" value="1">
                                  <select name="inv_consignee_province" id="sel_inv_provinces" onchange="region.changed(this, 2, 'sel_inv_cities');">
                                    <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['1']; ?></option>
                                    <?php $_from = $this->_var['province_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'province');if (count($_from)):
    foreach ($_from AS $this->_var['province']):
?>
                                    <option value="<?php echo $this->_var['province']['region_id']; ?>" <?php if ($this->_var['address']['province'] == $this->_var['province']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['province']['region_name']; ?></option>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                  </select>
                                  <select name="inv_consignee_city" id="sel_inv_cities" onchange="region.changed(this, 3, 'sel_inv_districts');">
                                    <option value="0">请选择</option>
                                  </select>
                                  <select name="inv_consignee_district" id="sel_inv_districts" style="display:none;">
                                    <option value="0">请选择</option>
                                  </select></div>
                                    </div>
                                    <div class="vat_invoice_div" style="padding-top:0;">
                                    	<div class="left"><em style='color:#e4393c'>*</em>详细地址：</div>
                                    	<div class="right"><input name='inv_consignee_address' type='text' class="inputZZS" /></div>
                                    </div>
                                </li>
                                
                            </ul>
                          </div>
                          
                          <script type="text/javascript">
								var fapiao_con = document.getElementById('ECS_INVCONTENT');
								if (fapiao_con.value=='0'){
									document.getElementById('ECS_INVPAYEE').disabled=true;
								}else{
									document.getElementById('ECS_INVPAYEE').disabled=false;
								}
                          </script> 
                          <?php endif; ?>
                          
                           
                          <?php if ($this->_var['allow_use_surplus']): ?>
                          <div class="panel-body" id="surplus_div">
                            <div class="title" id="yuetitle" style="border-bottom:1px solid #eeeeee;"> <span class="i-icon-arrow-down" id="yueip"></span> <span class="text"><?php echo $this->_var['lang']['use_surplus']; ?></span><em class="qxz" id="emyue">请选择<?php echo $this->_var['lang']['use_surplus']; ?></em> </div>
                            <ul class="nav nav-list-sidenav" id="yue68" style="display:none;">
                              <li>
                                <input type="text" name="surplus" value="<?php echo empty($this->_var['order']['surplus']) ? '0' : $this->_var['order']['surplus']; ?>" id="ECS_SURPLUS" onblur="changeSurplus(this.value)"<?php if ($this->_var['disable_surplus']): ?> disabled="disabled"<?php endif; ?> class="txt1" style="width:50px;"/>
                                &nbsp;<?php echo $this->_var['lang']['your_surplus']; ?>&nbsp;<span class="price"><?php echo empty($this->_var['your_surplus']) ? '0' : $this->_var['your_surplus']; ?></span><span id="ECS_SURPLUS_NOTICE"></span> </li>
                            </ul>
                          </div>
						  <script>
							if('<?php echo $_SESSION['flow_order']['pay_code']; ?>' == 'balance')
								document.getElementById("surplus_div").style.display = "none";
							else
								document.getElementById("surplus_div").style.display = "block";
						  </script>
                          <?php endif; ?> 
                          
                           
                          <?php if ($this->_var['allow_use_integral']): ?>
                          <div class="panel-body">
                            <div class="title" id="jifentitle" style="border-bottom:1px solid #eeeeee;"> <span class="i-icon-arrow-down" id="jifenip"></span> <span class="text"><?php echo $this->_var['lang']['use_integral']; ?></span><em class="qxz" id="emjifen">请选择<?php echo $this->_var['lang']['use_integral']; ?></em> </div>
                            <ul class="nav nav-list-sidenav" id="jifen68" style="display:none;">
                              <li>
                                <input type="text" name="integral" value="<?php echo empty($this->_var['order']['integral']) ? '0' : $this->_var['order']['integral']; ?>" id="ECS_INTEGRAL" onblur="changeIntegral(this.value)" class="txt1"  style="width:50px;"/>
                                &nbsp;<?php echo $this->_var['lang']['can_use_integral']; ?><span class="price points"><?php echo empty($this->_var['your_integral']) ? '0' : $this->_var['your_integral']; ?><?php echo $this->_var['points_name']; ?></span>&nbsp;&nbsp;<?php echo $this->_var['lang']['noworder_can_integral']; ?><?php echo $this->_var['order_max_integral']; ?><?php echo $this->_var['points_name']; ?><span id="ECS_INTEGRAL_NOTICE"></span> </li>
                            </ul>
                          </div>
                          <?php endif; ?> 
                          
                           
                          <?php if ($this->_var['allow_use_bonus']): ?>
                          <div class="panel-body">
                            <div class="title" id="hongbaotitle" style="border-bottom:1px solid #eeeeee;"> <span class="i-icon-arrow-down" id="hongbaoip"></span> <span class="text">使用红包</span><em class="qxz" id="emhongbao">请选择红包</em> </div>
                            <ul class="nav nav-list-sidenav" id="hongbao68" style="display:none;">
                              <li> <?php if ($this->_var['bonus_list']): ?>
                                <?php echo $this->_var['lang']['select_bonus']; ?>
                                <select name="bonus" onchange="changeBonus(this.value)" id="ECS_BONUS">
                                  <option value="0"<?php if ($this->_var['order']['bonus_id'] == 0): ?> selected="selected"<?php endif; ?>><?php echo $this->_var['lang']['please_select']; ?></option>
                                  <?php $_from = $this->_var['bonus_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'bonus');if (count($_from)):
    foreach ($_from AS $this->_var['bonus']):
?>
                                  <option value="<?php echo $this->_var['bonus']['bonus_id']; ?>"<?php if ($this->_var['order']['bonus_id'] == $this->_var['bonus']['bonus_id']): ?> selected="selected"<?php endif; ?>><?php echo $this->_var['bonus']['type_name']; ?>[<?php echo $this->_var['bonus']['bonus_money_formated']; ?>]</option>
                                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                </select>
                                <?php echo $this->_var['lang']['or']; ?><?php echo $this->_var['lang']['enter_bonus_sn']; ?> <br/>
                                <br/>
                                <?php endif; ?>
                                <input type="text" name="bonus_sn" value="<?php echo $this->_var['order']['bonus_sn']; ?>" class="txt1" id="bonus-sn"  placeholder="输入红包序列号"/>
                                <input type="button" name="validate_bonus" value="<?php echo $this->_var['lang']['validate_bonus']; ?>" class="btn1" onclick="validateBonus(document.forms['theForm'].elements['bonus_sn'].value)"/>
                              </li>
                            </ul>
                          </div>
                          <?php endif; ?> 
                          
                           
                          <?php if ($this->_var['card_list']): ?>
                          <div class="panel-body">
                            <div class="title" id="hekatitle" style="border-bottom:1px solid #eeeeee;"> <span class="i-icon-arrow-down" id="hekaip"></span> <span class="text">使用贺卡</span><em class="qxz" id="emheka">请选择贺卡</em> </div>
                            <ul class="nav nav-list-sidenav" id="heka68" style="display:none;">
                              <li>
                                <input type="radio" class="radio flow_radio"  name="card" value="0" <?php if ($this->_var['order']['card_id'] == 0): ?>checked="true"<?php endif; ?> onclick="selectCard(this)" /><?php echo $this->_var['lang']['no_card']; ?></li>
                              <?php $_from = $this->_var['card_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'card');if (count($_from)):
    foreach ($_from AS $this->_var['card']):
?>
                              <li>
                                <input type="radio" class="radio flow_radio"  name="card"  id="card_<?php echo $this->_var['card']['card_id']; ?>" value="<?php echo $this->_var['card']['card_id']; ?>" <?php if ($this->_var['order']['card_id'] == $this->_var['card']['card_id']): ?>checked="true"<?php endif; ?> onclick="selectCard(this)"  /><label for="card_<?php echo $this->_var['card']['card_id']; ?>"><?php echo $this->_var['card']['card_name']; ?>[<?php echo $this->_var['card']['format_card_fee']; ?>，免费额度：<?php echo $this->_var['card']['format_free_money']; ?>]</label>
                              </li>
                              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </ul>
                          </div>
                          <?php endif; ?> 
                          
                           
                          <?php if ($this->_var['pack_list']): ?>
                          <div class="panel-body">
                            <div class="title" id="baozhuangtitle" style="border-bottom:1px solid #eeeeee;"> <span class="i-icon-arrow-down" id="baozhuangip"></span> <span class="text"><?php echo $this->_var['lang']['goods_package']; ?></span><em class="qxz" id="embaozhuang">请选择<?php echo $this->_var['lang']['goods_package']; ?></em> </div>
                            <ul class="nav nav-list-sidenav" id="baozhuang68" style="display:none;">
                              <li>
                                <input type="radio" class="radio flow_radio"  name="pack" value="0" <?php if ($this->_var['order']['pack_id'] == 0): ?>checked="true"<?php endif; ?> onclick="selectPack(this)" /><?php echo $this->_var['lang']['no_pack']; ?></li>
                              <?php $_from = $this->_var['pack_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pack');if (count($_from)):
    foreach ($_from AS $this->_var['pack']):
?>
                              <li>
                                <input type="radio" class="radio flow_radio" name="pack" id="pack_<?php echo $this->_var['pack']['pack_id']; ?>" value="<?php echo $this->_var['pack']['pack_id']; ?>" <?php if ($this->_var['order']['pack_id'] == $this->_var['pack']['pack_id']): ?>checked="true"<?php endif; ?> onclick="selectPack(this)" /><label for="pack_<?php echo $this->_var['pack']['pack_id']; ?>"><?php echo $this->_var['pack']['pack_name']; ?>[<?php echo $this->_var['pack']['format_pack_fee']; ?>，免费额度：<?php echo $this->_var['pack']['format_free_money']; ?>]</label>
                              </li>
                              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </ul>
                          </div>
                          <?php endif; ?> 
                          
                          
                          <div class="panel-body">
                            <div class="title" id="fuyantitle" style="border-bottom:1px solid #eeeeee;"> <span class="i-icon-arrow-down" id="fuyanip"></span> <span class="text">订单附言</span> </div>
                            <ul class="nav nav-list-sidenav" id="fuyan68" style="display:none;">
                              <li>
                                <textarea name="postscript" class="voucher-num" value=""  autocomplete="off" id="postscript"><?php echo htmlspecialchars($this->_var['order']['postscript']); ?></textarea>
                              </li>
                            </ul>
                          </div>
                        </div>
                         
                      </div>
                      <div class="orderPay"><?php echo $this->fetch('library/order_total.lbi'); ?></div>
                    </div>
                  </section>
                </section>
                <section class="bottom-bar">
                  <div class="total-price">
                    <div>
                      <p class="submitOrder ">
                        <input onclick="return check_before_submit()" type="submit" class="c-order-btn  J_submit" value="确认"/>
                        <input type="hidden" name="step" value="done">
                      </p>
                      <p class="realPay">合计：<strong class="price" id="ECS_ORDERTOTAL_T"><?php echo $this->_var['total']['amount_formated']; ?></strong> </p>
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>
      </section>
    </form>
    <?php endif; ?>
    <?php if ($this->_var['step'] == 'ziti'): ?>
    <link rel="stylesheet" href="themesmobile/68ecshopcom_mobile/css/ziti.css">
    
    <div id="pickup_point_list" style="display: block;">
    	<div class="point-list" id="pointList">
        	<h3 class="title">选择自提点</h3>
            <?php $_from = $this->_var['pickup_point_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pickup_point_list');if (count($_from)):
    foreach ($_from AS $this->_var['pickup_point_list']):
?>
            <div class="blockshow " >
                <div class="fl1 ">
                  <a href="flow.php?step=zitic&id=<?php echo $this->_var['pickup_point_list']['id']; ?>" class="ziti_list">
                    <ul>
                      <li class="one">
                      <img <?php if ($this->_var['pickup_point_list']['id'] == $_SESSION['ziti_id']): ?> src="themesmobile/68ecshopcom_mobile/images/ziti_select.png"<?php else: ?>src="themesmobile/68ecshopcom_mobile/images/ziti_select_off.png"<?php endif; ?> width="20" height="20">
                      
                      </li>
                      <li class="two">
                        <h3><?php echo $this->_var['pickup_point_list']['shop_name']; ?></h3>
                        <p><?php echo $this->_var['pickup_point_list']['region']; ?> <?php echo $this->_var['pickup_point_list']['address']; ?></p>
                      </li>
                      <div class="clear"></div>
                    </ul>
                  </a>
                 </div>
                 <div class="telinfo"><span>联系人:<?php echo $this->_var['pickup_point_list']['contact']; ?></span><span><img src="themesmobile/68ecshopcom_mobile/images/tel.png"><?php echo $this->_var['pickup_point_list']['phone']; ?></span></div>
             </div>
             <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </div>
    </div>
    
    
    <div class="point-list" id="pointList" style="display:none;">
      <h3 class="title">自提点列表</h3>
      <div style="padding:10px 0;text-align:center; font-size:14px;">该区域下没有自提点</div>
    </div>
    
    <div style="height:20px; line-height:20px; clear:both;"></div>
    <?php endif; ?>
    
    <?php if ($this->_var['step'] == 'done'): ?>
    <div class="content_success " >
      <div class="con-ct fo-con">
        <h4 class="successtijiao">订单已经提交成功！</h4>
        <ul class="ct-list">
          <li> 订单号为： <em><?php echo $this->_var['order']['order_sn']; ?></em> </li>
          <li> <?php if ($this->_var['order']['shipping_name']): ?><?php echo $this->_var['lang']['select_shipping']; ?><?php echo $this->_var['lang']['colon']; ?> <em><?php echo $this->_var['order']['shipping_name']; ?></em> <?php endif; ?> </li>
          <li> <?php echo $this->_var['lang']['select_payment']; ?><?php echo $this->_var['lang']['colon']; ?> <em><?php echo $this->_var['order']['pay_name']; ?></em> </li>
          <li> <?php echo $this->_var['lang']['order_amount']; ?><?php echo $this->_var['lang']['colon']; ?> <em class="price"><?php echo $this->_var['total']['amount_formated']; ?></em> </li>
        </ul>
      </div>
      <?php if ($this->_var['pay_online']): ?>
      <?php if ($this->_var['iswei']): ?>
      <?php if ($this->_var['order']['pay_name'] == '微信支付'): ?>
      <div class="pay-btn"><a href="./weixinpay.php?oid=<?php echo $this->_var['order']['order_id']; ?>" class="sub-btn btnRadius">微支付</a></div>
      <?php else: ?>
      <div class="pay-btn"><a href="./pay/alipayapi.php?out_trade_no=<?php echo $this->_var['order']['order_sn']; ?>&total_fee=<?php echo $this->_var['order']['order_amount']; ?>" class="sub-btn btnRadius">去支付宝支付</a></div>
      <?php endif; ?>
      <?php else: ?>
      <div class="pay-btn"><a href="./pay/alipayapi.php?out_trade_no=<?php echo $this->_var['order']['order_sn']; ?>&total_fee=<?php echo $this->_var['order']['order_amount']; ?>" class="sub-btn btnRadius">去支付宝支付</a></div>
      <?php endif; ?>
      <?php endif; ?>
      <?php if ($this->_var['virtual_card']): ?>
      <div class="con-ct radius shadow fo-con">
        <ul class="ct-list">
          <?php $_from = $this->_var['virtual_card']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'vgoods');$this->_foreach['virtual_card'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['virtual_card']['total'] > 0):
    foreach ($_from AS $this->_var['vgoods']):
        $this->_foreach['virtual_card']['iteration']++;
?>
          <?php $_from = $this->_var['vgoods']['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'card');$this->_foreach['vgoods_info'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['vgoods_info']['total'] > 0):
    foreach ($_from AS $this->_var['card']):
        $this->_foreach['vgoods_info']['iteration']++;
?>
          <li> <span class="type"><?php echo $this->_var['vgoods']['goods_name']; ?></span> <?php if ($this->_var['card']['card_sn']): ?><span class="id"><strong><?php echo $this->_var['lang']['card_sn']; ?><?php echo $this->_var['lang']['colon']; ?></strong><?php echo $this->_var['card']['card_sn']; ?></span><?php endif; ?>
            <?php if ($this->_var['card']['card_password']): ?><span class="serial_code"><strong><?php echo $this->_var['lang']['card_password']; ?><?php echo $this->_var['lang']['colon']; ?></strong><em><?php echo $this->_var['card']['card_password']; ?></em></span><?php endif; ?>
            <?php if ($this->_var['card']['end_date']): ?><span class="expire_date"><strong><?php echo $this->_var['lang']['end_date']; ?><?php echo $this->_var['lang']['colon']; ?></strong><em><?php echo $this->_var['card']['end_date']; ?></em></span><?php endif; ?> </li>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
      </div>
      <div class="con-ct radius shadow fo-con">
        <ul class="ct-list">
          <li><?php echo $this->_var['order_submit_back']; ?></li>
        </ul>
      </div>
      <?php endif; ?> </div>
    <?php endif; ?>
    <?php if ($this->_var['step'] != 'cart'): ?> <?php echo $this->fetch('library/page_footer.lbi'); ?> <?php endif; ?>
    <?php if ($this->_var['step'] != 'cart'): ?> <?php echo $this->fetch('library/footer_nav.lbi'); ?> 
    <script language="javascript">
$(function(){ 
$('input[type=text],input[type=password]').bind({ 
focus:function(){ 
 $(".global-nav").css("display",'none'); 
}, 
blur:function(){ 
 $(".global-nav").css("display",'flex'); 
} 
}); 
}) 
</script> 
    <?php endif; ?> </div>
  <section class="f_mask" style="display: none;"></section>
<section class="f_block" id="choose" style="height:0px;"></section>
</div>
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
<?php $_from = $this->_var['lang']['passport_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var username_exist = "<?php echo $this->_var['lang']['username_exist']; ?>";
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script> 
<script type="text/javascript">
function closeCustomer(){
	$("#choose").hide();
	}
function choose_gift()
{
	var sel_goods = new Array();
	var obj_cartgoods = document.getElementsByName("sel_cartgoods[]");
	var j = 0;
	for (i=0;i<obj_cartgoods.length;i++)
	{
		//if(obj_cartgoods[i].checked == true)
		{	
			sel_goods[j] = obj_cartgoods[i].value;
			j++;
		}
	}
	Ajax.call('flow.php', 'is_ajax=1&sel_goods='+sel_goods, selgiftResponse, 'GET', 'JSON');
}
function selgiftResponse(res)
{
	$('#choose').html(res.result);
	$("#choose").animate({height:'80%'},[10000]);
		var total=0,h=$(window).height(),
        top =$('.f_title').height()||0,
        con = $('.f_content');
		total = 0.8*h;
		con.height(total-top+'px');
	$(".f_mask").show();
}
function close_choose(){	

	$(".f_mask").hide();
	$('#choose').animate({height:'0'},[10000]);

}
</script> 
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
<?php $_from = $this->_var['lang']['passport_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var username_exist = "<?php echo $this->_var['lang']['username_exist']; ?>";
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>
</body>
</html>
