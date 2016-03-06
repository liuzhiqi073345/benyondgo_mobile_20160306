<?php if ($this->_var['orders']): ?>
<div class="order_list">
  <?php $_from = $this->_var['orders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
  <div id="OrderList" class="ord_list">
  	<a href="user.php?act=order_detail&order_id=<?php echo $this->_var['item']['order_id']; ?>" class="lnk" >
    <h2><img src="themesmobile/68ecshopcom_mobile/images/dianpu.png">状态：<span><?php echo $this->_var['item']['order_status']; ?></span></h2>
    <h3>订单编号：<?php echo $this->_var['item']['order_sn']; ?></h3>
    <?php $_from = $this->_var['item']['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
    <dl class="dingdan">
      <dt class="dingdan_img"><img src="<?php echo $this->_var['list']['goods_thumb']; ?>"></dt>
      <dd class="dingdan_name">
        <p><?php echo sub_str($this->_var['list']['goods_name'],60); ?></p>
      </dd>
      <dd class="dingdan_pice"><?php echo $this->_var['list']['goods_price']; ?><em>x<?php echo $this->_var['list']['goods_number']; ?></em></dd>
    </dl>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </a>
    <div class="pic">实付：<strong><?php echo $this->_var['item']['total_fee']; ?></strong></div>
    <div class="anniu">
                  <?php if ($this->_var['item']['shipping_status'] == 2): ?> 
                  <?php if ($this->_var['item']['comment_s'] == 0): ?> 
                  <?php else: ?> 
                  <a href="user.php?act=comment_order&rec_id=<?php echo $this->_var['item']['comment_s']; ?>" class="on_comment">评价订单</a> 
                  <?php endif; ?>
                  <?php if ($this->_var['item']['shaidan_s'] == 0): ?> 
                  <?php else: ?> 
                  <a href="user.php?act=shaidan_send&id=<?php echo $this->_var['item']['shaidan_s']; ?>" class="on_comment">晒单</a> 
                  <?php endif; ?>
                  
                  <?php endif; ?><?php echo $this->_var['item']['handler']; ?>
    </div>
  </div>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
  <div style="background:#fff;"><?php echo $this->fetch('library/pages.lbi'); ?></div>
</div>
<script type="text/javascript">
<?php $_from = $this->_var['lang']['merge_order_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</script> 
<?php else: ?>
<div class="tips_a"><img src="themesmobile/68ecshopcom_mobile/images/icogantanhao.png"></div>
<div class="tips">您还没有购买过商品</div>
<div class="tips">
            <a href="javascript:history.back(-1)" style="color: #666;">
        <span class="tishi">返回上一页</span>
      </a>
            <a href="index.php" style="color: #666;">
        <span class="tishi">去购物</span>
      </a>
</div>
<?php endif; ?> 