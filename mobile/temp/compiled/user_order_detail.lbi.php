<div class="detail_top">
  <div class="lan">
    <dl>
      <dt class="dingdan_1"></dt>
      <dd><span><?php echo $this->_var['order']['pay_status']; ?>&nbsp;&nbsp;&nbsp;&nbsp;卖家<?php echo $this->_var['order']['shipping_status']; ?></span><?php if ($this->_var['order']['extension_code'] == "group_buy"): ?><a href="./group_buy.php?act=view&id=<?php echo $this->_var['order']['extension_id']; ?>" class="status" style="color:#fff;margin-left:10px;"><?php echo $this->_var['lang']['order_is_group_buy']; ?></a> <?php elseif ($this->_var['order']['extension_code'] == "exchange_goods"): ?><a href="./exchange.php?act=view&id=<?php echo $this->_var['order']['extension_id']; ?>" class="status" style="color:#fff;margin-left:10px;"><?php echo $this->_var['lang']['order_is_exchange']; ?></a> <?php endif; ?><a href="user.php?act=message_list&order_id=<?php echo $this->_var['order']['order_id']; ?>" class="view_message button dim_button" style="color:#fff;margin-left:10px;"><span><?php echo $this->_var['lang']['business_message']; ?></span></a><br>
        <span class="dingdanhao"><?php echo $this->_var['lang']['detail_order_sn']; ?>&nbsp;:&nbsp;<?php echo $this->_var['lang']['colon']; ?><?php echo $this->_var['order']['order_sn']; ?></span><br>
        <span><?php if ($this->_var['order']['shipping_fee'] > 0): ?><?php echo $this->_var['lang']['shipping_fee']; ?><?php echo $this->_var['lang']['colon']; ?>&nbsp;:<?php echo $this->_var['order']['formated_shipping_fee']; ?><?php endif; ?></span> </dd>
    </dl>
  </div>
  <?php if ($this->_var['iswei']): ?>
  <?php if ($this->_var['order']['pay_name'] == '微信支付'): ?>
  <dl style="border-bottom:1px solid #eeeeee">
    <dt style=" position:absolute;" class="dingdan_2"></dt>
    <dd style=" margin-left:30px;"> <span class="zhif"><?php echo $this->_var['lang']['select_payment']; ?>&nbsp;:&nbsp;<?php echo $this->_var['lang']['colon']; ?><?php echo $this->_var['order']['pay_name']; ?></span> <span class="zhif"><?php echo $this->_var['lang']['order_amount']; ?>&nbsp;:&nbsp;<?php echo $this->_var['lang']['colon']; ?><?php echo $this->_var['order']['formated_order_amount']; ?></span> <span class="zhif"><?php echo $this->_var['order']['pay_desc']; ?></span> <?php if ($this->_var['order']['order_amount'] > 0): ?><a href="weixinpay.php?oid=<?php echo $this->_var['order']['order_id']; ?>" style="color:#fff; font-size:16px;" class="zhifu">微支付</a><?php endif; ?><span class="time"><?php echo $this->_var['order']['pay_time']; ?></span> </dd>
  </dl>
  <?php elseif ($this->_var['order']['pay_name'] == '支付宝'): ?>
  <dl style="border-bottom:1px solid #eeeeee">
    <dt style=" position:absolute;" class="dingdan_2"></dt>
    <dd style=" margin-left:30px;"> <span class="zhif"><?php echo $this->_var['lang']['select_payment']; ?>&nbsp;:&nbsp;<?php echo $this->_var['lang']['colon']; ?><?php echo $this->_var['order']['pay_name']; ?></span> <span class="zhif"><?php echo $this->_var['lang']['order_amount']; ?>&nbsp;:&nbsp;<?php echo $this->_var['lang']['colon']; ?><?php echo $this->_var['order']['formated_order_amount']; ?></span> <span class="zhif"><?php echo $this->_var['order']['pay_desc']; ?></span> <?php if ($this->_var['order']['order_amount'] > 0): ?><a href="././pay/alipayapi.php?out_trade_no=<?php echo $this->_var['order']['order_sn']; ?>&total_fee=<?php echo $this->_var['order']['formated_order_amount_wap']; ?>" style="color:#fff;font-size:16px;" class="zhifu">去支付宝支付</a><?php endif; ?><span class="time"><?php echo $this->_var['order']['pay_time']; ?></span> </dd>
  </dl>
  <?php endif; ?>
  <?php else: ?>
  <dl style="border-bottom:1px solid #eeeeee">
    <dt style=" position:absolute;" class="dingdan_2"></dt>
    <dd style=" margin-left:30px;"> <span class="zhif"><?php echo $this->_var['lang']['select_payment']; ?>&nbsp;:&nbsp;<?php echo $this->_var['lang']['colon']; ?><?php echo $this->_var['order']['pay_name']; ?></span> <span class="zhif"><?php echo $this->_var['lang']['order_amount']; ?>&nbsp;:&nbsp;<?php echo $this->_var['lang']['colon']; ?><?php echo $this->_var['order']['formated_order_amount']; ?></span> <span class="zhif"><?php echo $this->_var['order']['pay_desc']; ?></span> <?php if ($this->_var['order']['order_amount'] > 0): ?><a href="././pay/alipayapi.php?out_trade_no=<?php echo $this->_var['order']['order_sn']; ?>&total_fee=<?php echo $this->_var['order']['formated_order_amount_wap']; ?>" class="zhifu" style="color:#fff; font-size:16px;">去支付宝支付</a><?php endif; ?><span class="time"><?php echo $this->_var['order']['pay_time']; ?></span> </dd>
  </dl>
  <?php endif; ?>
  
  
  <?php if ($this->_var['order']['to_buyer']): ?>
  <dl class="<?php if ($this->_var['order']['invoice_no']): ?>even<?php else: ?>odd<?php endif; ?><?php if (! $this->_var['virtual_card']): ?> last<?php endif; ?>">
    <dt><?php echo $this->_var['lang']['detail_to_buyer']; ?><?php echo $this->_var['lang']['colon']; ?></dt>
    <dd class="last"><?php echo $this->_var['order']['to_buyer']; ?></dd>
  </dl>
  <?php endif; ?>
  <?php if ($this->_var['virtual_card']): ?>
  <dl class="odd last">
    <dt><?php echo $this->_var['lang']['virtual_card_info']; ?><?php echo $this->_var['lang']['colon']; ?></dt>
    <dd class="last">
      <ul class="virtual_card clearfix">
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
        <li> <span class="type"><?php echo $this->_var['vgoods']['goods_name']; ?></span> <span class="id"><strong><?php echo $this->_var['lang']['card_sn']; ?><?php echo $this->_var['lang']['colon']; ?></strong><?php echo $this->_var['card']['card_sn']; ?></span> <span class="serial_code"><strong><?php echo $this->_var['lang']['card_password']; ?><?php echo $this->_var['lang']['colon']; ?></strong><em><?php echo $this->_var['card']['card_password']; ?></em></span> <span class="expire_date"><strong><?php echo $this->_var['lang']['end_date']; ?><?php echo $this->_var['lang']['colon']; ?></strong><em><?php echo $this->_var['card']['end_date']; ?></em></span> </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
    </dd>
  </dl>
  <?php endif; ?> 
  
  <?php if ($this->_var['order']['is_pickup'] != 1): ?>
  <dl>
    <dt class="dingdan_3"></dt>
    <dd>
      <h3><?php echo $this->_var['lang']['consignee_name']; ?>&nbsp;:<?php echo $this->_var['lang']['colon']; ?>&nbsp;<?php echo $this->_var['order']['consignee']; ?><em><?php echo $this->_var['order']['tel']; ?></em></h3>
      <?php if ($this->_var['order']['exist_real_goods']): ?>
      <div class="adss"><?php echo $this->_var['lang']['detailed_address']; ?><?php echo $this->_var['lang']['colon']; ?>&nbsp;:&nbsp;<?php echo $this->_var['order']['region']; ?> <?php echo $this->_var['order']['address']; ?><?php if ($this->_var['order']['zipcode']): ?>[<?php echo $this->_var['lang']['postalcode']; ?><?php echo $this->_var['lang']['colon']; ?><?php echo $this->_var['order']['zipcode']; ?>]<?php endif; ?></div>
      <?php endif; ?> </dd>
  </dl>
  <?php endif; ?>
<?php if ($this->_var['order']['shipping_status'] != '未发货'): ?>
<dl style="border-top:1px solid #eeeeee; margin-top:10px;">
<dt class="dingdan_4"></dt>
<dd><h3>物流信息</h3>
<?php echo $this->fetch('library/kuaidi.lbi'); ?>
</dd>
</dl>
<?php endif; ?>
</div>


<div class="ord_list1">
	<h2><img src="themesmobile/68ecshopcom_mobile/images/dianpu.png">订单商品</h2>
	<?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods_list']['iteration']++;
?>
	<div class="ord_dingdan">
		<div class="ord_img"><a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>"></a></div>
        <div class="ord_name">
             <p>
             	<?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] != 'package_buy'): ?>
                <a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>"><?php echo sub_str($this->_var['goods']['goods_name'],40); ?></a>
                <?php elseif ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] == 'package_buy'): ?>
                <span class="name"><?php echo $this->_var['goods']['goods_name']; ?></span>
                <span class="package_goods_list">
                <?php $_from = $this->_var['goods']['package_goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'package_goods_list');$this->_foreach['package_goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['package_goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['package_goods_list']):
        $this->_foreach['package_goods_list']['iteration']++;
?>
                <em><?php echo $this->_var['package_goods_list']['goods_name']; ?></em>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </span>
                <?php else: ?>
                <?php echo $this->_var['goods']['goods_name']; ?>
                <?php endif; ?>
            </p>
            <span>
                <?php if ($this->_var['goods']['goods_attr']): ?><?php echo $this->_var['goods']['goods_attr']; ?><?php endif; ?>
                <?php if ($this->_var['goods']['is_shipping']): ?><em class="carriage_free"><?php echo $this->_var['lang']['carriage_free']; ?></em><?php endif; ?>
                <?php if ($this->_var['goods']['parent_id'] > 0): ?><em class="accessories"><?php echo $this->_var['lang']['accessories']; ?></em><?php endif; ?>
                <?php if ($this->_var['goods']['is_gift'] > 0): ?><em class="largess"><?php echo $this->_var['lang']['largess']; ?></em><?php endif; ?>
            </span>
            <strong> <?php echo $this->_var['goods']['goods_price']; ?>&nbsp;x&nbsp;<?php echo $this->_var['goods']['goods_number']; ?></strong>
           </div>                     
       </div>
   	<div class="xiaoji">小计：<strong><?php echo $this->_var['goods']['subtotal']; ?></strong></div>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>


<div class="jiage">
  <p><?php echo $this->_var['lang']['goods_all_price']; ?>
    <?php if ($this->_var['order']['extension_code'] == "group_buy"): ?><?php echo $this->_var['lang']['gb_deposit']; ?><?php endif; ?><?php echo $this->_var['lang']['colon']; ?>&nbsp;:&nbsp;<span class="price"><?php echo $this->_var['order']['formated_goods_amount']; ?></span> <?php if ($this->_var['order']['discount'] > 0): ?>
    - <?php echo $this->_var['lang']['discount']; ?><?php echo $this->_var['lang']['colon']; ?>&nbsp;:&nbsp;<span class="price"><?php echo $this->_var['order']['formated_discount']; ?></span> <?php endif; ?>
    <?php if ($this->_var['order']['tax'] > 0): ?>
    + <?php echo $this->_var['lang']['tax']; ?><?php echo $this->_var['lang']['colon']; ?>&nbsp;:&nbsp;<span class="price"><?php echo $this->_var['order']['formated_tax']; ?></span> <?php endif; ?>
    <?php if ($this->_var['order']['shipping_fee'] > 0): ?>
    + <?php echo $this->_var['lang']['shipping_fee']; ?><?php echo $this->_var['lang']['colon']; ?>&nbsp;:&nbsp;<span class="price"><?php echo $this->_var['order']['formated_shipping_fee']; ?></span> <?php endif; ?>
    <?php if ($this->_var['order']['insure_fee'] > 0): ?>
    + <?php echo $this->_var['lang']['insure_fee']; ?><?php echo $this->_var['lang']['colon']; ?>&nbsp;:&nbsp;<span class="price"><?php echo $this->_var['order']['formated_insure_fee']; ?></span> <?php endif; ?>
    <?php if ($this->_var['order']['pay_fee'] > 0): ?>
    + <?php echo $this->_var['lang']['pay_fee']; ?><?php echo $this->_var['lang']['colon']; ?>&nbsp;:&nbsp;<span class="price"><?php echo $this->_var['order']['formated_pay_fee']; ?></span> <?php endif; ?>
    <?php if ($this->_var['order']['pack_fee'] > 0): ?>
    + <?php echo $this->_var['lang']['pack_fee']; ?><?php echo $this->_var['lang']['colon']; ?>&nbsp;:&nbsp;<span class="price"><?php echo $this->_var['order']['formated_pack_fee']; ?></span> <?php endif; ?>
    <?php if ($this->_var['order']['card_fee'] > 0): ?>
    + <?php echo $this->_var['lang']['card_fee']; ?><?php echo $this->_var['lang']['colon']; ?>&nbsp;:&nbsp;<span class="price"><?php echo $this->_var['order']['formated_card_fee']; ?></span> <?php endif; ?>
    <?php if ($this->_var['order']['money_paid'] > 0): ?> - <?php echo $this->_var['lang']['order_money_paid']; ?><?php echo $this->_var['lang']['colon']; ?>&nbsp;:&nbsp;<span class="price"><?php echo $this->_var['order']['formated_money_paid']; ?></span><?php endif; ?>
    <?php if ($this->_var['order']['surplus'] > 0): ?> - <?php echo $this->_var['lang']['use_surplus']; ?><?php echo $this->_var['lang']['colon']; ?>&nbsp;:&nbsp;<span class="price"><?php echo $this->_var['order']['formated_surplus']; ?></span><?php endif; ?>
    <?php if ($this->_var['order']['integral_money'] > 0): ?> - <?php echo $this->_var['lang']['use_integral']; ?><?php echo $this->_var['lang']['colon']; ?>&nbsp;:&nbsp;<span class="price"><?php echo $this->_var['order']['formated_integral_money']; ?></span><?php endif; ?>
    <?php if ($this->_var['order']['bonus'] > 0): ?> - <?php echo $this->_var['lang']['use_bonus']; ?><?php echo $this->_var['lang']['colon']; ?>&nbsp;:&nbsp;<span class="price"><?php echo $this->_var['order']['formated_bonus']; ?></span><?php endif; ?></p>
  <p><?php echo $this->_var['lang']['order_amount']; ?><?php echo $this->_var['lang']['colon']; ?>&nbsp;:&nbsp;<span class="price1"><?php echo $this->_var['order']['formated_order_amount']; ?></span><?php if ($this->_var['order']['extension_code'] == "group_buy"): ?><?php echo $this->_var['lang']['notice_gb_order_amount']; ?><?php endif; ?></p>
  <div class="clearfix"></div>
  <?php if ($this->_var['allow_edit_surplus']): ?>
  <form action="user.php" method="post" name="formFee" id="formFee">
    <div class=" ub-ac ub-pc" style="overflow: hidden;">
      <label>
      <div class="all_clor dizhji lin_qu ufl" style="width:43%; margin-top:16px;"> <?php echo $this->_var['lang']['use_more_surplus']; ?>： </div>
      <div class=" c-wh ufl mar-top" style="width:55%; padding-right:2%;">
        <input name="surplus" value="0" type="text" class="c-f-text1"/>
        <br/>
        <span style="display:inline-block;width:100%;line-height:2em"><?php echo $this->_var['max_surplus']; ?></span> 
        <input onclick="return check_surplus_open(this.form)" type="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>"  class="tx-c c-org-g buttonHeight mar-top2 t-wh  font18" style="margin-top:10px;width:98%; padding:0;"/>
    <input type="hidden" name="act" value="act_edit_surplus">
    <input type="hidden" name="order_id" value="<?php echo $_GET['order_id']; ?>">
        </div>
      </label>
    </div>
    
  </form>
  <?php endif; ?> 
</div>
</div>

  
<section class="qita">
	<div class="subNav">|&nbsp;其他信息</div>
    <div class="navContent"> 
    	<ul>
            <?php if ($this->_var['order']['is_pickup'] == 1): ?>
            <li class="first"> 自提点店名：<?php echo $this->_var['order']['pickup_point_message']['shop_name']; ?><br>
              联系人：<?php echo $this->_var['order']['pickup_point_message']['contact']; ?><br>
              联系方式：<?php echo $this->_var['order']['pickup_point_message']['phone']; ?><br>
              地址：<?php echo $this->_var['order']['pickup_point_message']['region']; ?> <?php echo $this->_var['order']['pickup_point_message']['address']; ?><br>
            </li>
            <?php endif; ?>
			<?php if ($this->_var['order']['shipping_id'] > 0): ?><li class="first"><?php echo $this->_var['lang']['shipping']; ?><?php echo $this->_var['lang']['colon']; ?>&nbsp;:&nbsp;<?php echo $this->_var['order']['shipping_name']; ?></li><?php endif; ?>
			<?php if ($this->_var['order']['pay_name']): ?><li <?php if ($this->_var['order']['shipping_id'] <= 0): ?> class="first"<?php endif; ?>><?php echo $this->_var['lang']['payment']; ?><?php echo $this->_var['lang']['colon']; ?>&nbsp;:&nbsp;<?php echo $this->_var['order']['pay_name']; ?></li><?php endif; ?>
			<?php if ($this->_var['order']['pack_name']): ?><li><?php echo $this->_var['lang']['use_pack']; ?><?php echo $this->_var['lang']['colon']; ?>&nbsp;:&nbsp;<?php echo $this->_var['order']['pack_name']; ?></li><?php endif; ?>
			<?php if ($this->_var['order']['card_name']): ?><li><?php echo $this->_var['lang']['use_card']; ?><?php echo $this->_var['lang']['colon']; ?>&nbsp;:&nbsp;<?php echo $this->_var['order']['card_name']; ?></li><?php endif; ?>
			<?php if ($this->_var['order']['card_message']): ?><li><?php echo $this->_var['lang']['bless_note']; ?><?php echo $this->_var['lang']['colon']; ?>&nbsp;:&nbsp;<?php echo $this->_var['order']['card_message']; ?></li><?php endif; ?>
			<?php if ($this->_var['order']['integral'] > 0): ?><li><?php echo $this->_var['lang']['use_integral']; ?><?php echo $this->_var['lang']['colon']; ?>&nbsp;:&nbsp;<?php echo $this->_var['order']['integral']; ?></li><?php endif; ?>
			<?php if ($this->_var['order']['inv_payee'] && $this->_var['order']['inv_content']): ?>
				<li><?php echo $this->_var['lang']['invoice_title']; ?><?php echo $this->_var['lang']['colon']; ?>&nbsp;:&nbsp;<?php echo $this->_var['order']['inv_payee']; ?></li>
				<li><?php echo $this->_var['lang']['invoice_content']; ?><?php echo $this->_var['lang']['colon']; ?>&nbsp;:&nbsp;<?php echo $this->_var['order']['inv_content']; ?></li>
			<?php endif; ?>
			<?php if ($this->_var['order']['postscript']): ?><li><?php echo $this->_var['lang']['order_postscript']; ?><?php echo $this->_var['lang']['colon']; ?>&nbsp;:&nbsp;<?php echo $this->_var['order']['postscript']; ?></li><?php endif; ?>
			<?php if ($this->_var['order']['how_oos_name']): ?><li><?php echo $this->_var['lang']['booking_process']; ?><?php echo $this->_var['lang']['colon']; ?>&nbsp;:&nbsp;<?php echo $this->_var['order']['how_oos_name']; ?></li><?php endif; ?>
		</ul>
	</div>      
</section>
