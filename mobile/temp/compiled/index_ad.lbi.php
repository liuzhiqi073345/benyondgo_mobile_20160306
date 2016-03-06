<div id="scrollimg" class="scrollimg">
  <div class="bd">
    <ul>
      <?php $_from = $this->_var['wap_index_ad']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['wap_index_ad'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['wap_index_ad']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['wap_index_ad']['iteration']++;
?>
      <li><a href="<?php echo $this->_var['ad']['url']; ?>"><img src="<?php echo $this->_var['ad']['image']; ?>" width="100%" /></a></li>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
  </div>
  <div class="hd"><ul></ul></div>
</div>
<script type="text/javascript">
	TouchSlide({ 
		slideCell:"#scrollimg",
		titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
		mainCell:".bd ul", 
		effect:"leftLoop", 
		autoPage:true,//自动分页
		autoPlay:true //自动播放
	});
</script> 
