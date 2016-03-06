<div class="user_com"> 
  
  <div class="com_top">
    <h2><a href="user.php?act=profile">设置</a></h2>
    <dl>
    <dt><?php if ($this->_var['headimgurl'] != ''): ?><img src="<?php echo $this->_var['headimgurl']; ?>"><?php else: ?><img src="themesmobile/68ecshopcom_mobile/images/user68.jpg"><?php endif; ?></dt>
    <dd><span><h3><strong><?php if ($this->_var['info']['mobile_phone'] != ''): ?><?php echo $this->_var['info']['mobile_phone']; ?><?php elseif ($this->_var['info']['mobile_phone'] == ''): ?><?php echo $this->_var['info']['username']; ?><?php endif; ?></strong><h3></span>
        <em><?php echo $this->_var['rank_name']; ?></em></dd>
    </dl>
</div>

  <div class="uer_topnav">
    <ul>
      <li class="bain"><a href="user.php?act=order_list" ><span><?php echo $this->_var['order_count']; ?></span>我的订单</a></li>
      <li class="bain"><a href="user.php?act=collection_list"><span><?php echo $this->_var['collect_count']; ?></span>我的收藏</a></li>
      <li><a href="user.php?act=my_comment"><span><?php echo $this->_var['comment_count']; ?></span>我的评价</a></li>
    </ul>
  </div>
  
  <div class="Wallet">
    <dl class="Wallet_dl1">
      <a href="user.php?act=account_detail"><em class="Icon Icon1"></em>
      <dt>我的钱包</dt>
      <dd style="color:#aaaaaa;">查看我的钱包</dd>
      </a>
    </dl>
    <ul class="Wallet_detail">
      <?php 
$k = array (
  'name' => 'member_info1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
    </ul>
  </div>
  
  <div class="Wallet">
    <dl>
      <a href="user.php?act=order_list" ><em class="Icon Icon2"></em>
      <dt>全部订单</dt>
      <dd>查看订单</dd>
      </a>
    </dl>
    <dl>
      <a href="user.php?act=vc_login"><em class="Icon Icon11"></em>
      <dt>储值卡充值</dt>
      <dd>&nbsp;</dd>
      </a>
    </dl>
    
    <dl>
      <a href="user.php?act=my_comment"><em class="Icon Icon4"></em>
      <dt>我的评价</dt>
      <dd>查看评价</dd>
      </a>
    </dl>
    <dl>
      <a href="user.php?act=address_list"><em class="Icon Icon5"></em>
      <dt>地址管理</dt>
      <dd>&nbsp;</dd>
      </a>
    </dl>
  </div>
  <div class="Wallet">
	<?php if ($this->_var['is_distrib'] == 1): ?>
	<dl>
      <a href="user.php"><em class="Icon Icon6"></em>
      <dt>我的分销</dt>
      <dd>&nbsp;</dd>
      </a>
    </dl>
    <?php endif; ?>
    <!--<dl>
      <a href="user.php?act=affiliate"><em class="Icon Icon6"></em>
      <dt>我的推荐</dt>
      <dd>&nbsp;</dd>
      </a>
    </dl>-->
    <dl>
      <a href="user.php?act=message_list"><em class="Icon Icon7"></em>
      <dt>我的留言</dt>
      <dd>&nbsp;</dd>
      </a>
    </dl>
    <dl>
      <a href="user.php?act=collection_list"><em class="Icon Icon9"></em>
      <dt>我的收藏</dt>
      <dd>&nbsp;</dd>
      </a>
    </dl>
    <dl>
      <a href="user.php?act=message_list"><em class="Icon Icon4"></em>
      <dt>服务及反馈</dt>
      <dd>&nbsp;</dd>
      </a>
    </dl>
  </div>
  <div class="Wallet">
    <dl onClick="window.location.href='user.php?act=logout'">
      <em class="Icon Icon8"></em>
      <dt>注销登录</dt>
    </dl>
  </div>
</div>
