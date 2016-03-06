<?php if ($this->_var['goods_list']): ?>
 <form action="javascript:void(0)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
<?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods_list']['iteration']++;
?>
<?php if ($this->_var['goods']['goods_id']): ?>
<li>
<a href="<?php echo $this->_var['goods']['url']; ?>" class="item">
<div class="pic_box">
<img src="<?php echo $this->_var['goods']['goods_thumb']; ?>">
</div>
<div class="title_box">
<?php echo $this->_var['goods']['goods_name']; ?>
</div>
<div class="active_box">
<?php if ($this->_var['goods']['is_best'] == 1): ?>
<span class="active_tag bg_orange">精品</span>
<?php endif; ?>
<?php if ($this->_var['goods']['is_new'] == 1): ?>
<span class="active_tag bg_green">新品</span>
<?php endif; ?>
<?php if ($this->_var['goods']['is_hot'] == 1): ?>
<span class="active_tag bg_highlight">热卖</span>
<?php endif; ?>
</div>
<div class="price_box">
<span class="new_price">
<i><?php if ($this->_var['goods']['promote_price']): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></i>
</span>
<?php if ($this->_var['goods']['promote_price']): ?>
<span class="price_tag">促销价</span>
<?php endif; ?>
</div>
<div class="comment_box">
评论<?php echo $this->_var['goods']['wap_pingjia']; ?>条
| <span class="percentage">已售<?php echo $this->_var['goods']['wap_count']; ?></span>
</div></a>

<!--
列表页面加减号
<a class="btn-down" onclick="goods_cut(<?php echo $this->_var['goods']['goods_id']; ?>);">-</a>
<input class="txt-prodcount"  id="number_<?php echo $this->_var['goods']['goods_id']; ?>" type="text" onblur="changePrice();" value="1" onfocus="if(value=='1') {value=''}" size="4" maxlength="5"  />
<a class="btn-up" onclick="goods_add(<?php echo $this->_var['goods']['goods_id']; ?>);">+</a>-->
<span class="bug_car" onClick="addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)">
<i class="icon-shop_cart"></i>
</span>
</li>
<?php endif; ?>    
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
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
<?php echo $this->fetch('library/pages.lbi'); ?>
<?php else: ?>
<div class="new_prom2">
<strong>抱歉暂时没有相关结果，换个词试试吧!</strong>
</div>
<?php endif; ?>