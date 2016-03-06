<div class="banner">
  <div id="slider" class="slider">
    <ul id="sliderlist" class="sliderlist">
       <?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'picture');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['picture']):
        $this->_foreach['name']['iteration']++;
?>
      <li style="float: left; display: block; width:100%;"><span><a  href="javacript:void(0)"><img title="" width="100%" src="<?php if ($this->_var['picture']['thumb_url']): ?><?php echo $this->_var['picture']['img_url']; ?><?php else: ?><?php echo $this->_var['picture']['img_url']; ?><?php endif; ?>"></a></span></li>
       <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
    <div id="pagenavi" class="pagenavi">
 <?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'picture');$this->_foreach['indexname'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['indexname']['total'] > 0):
    foreach ($_from AS $this->_var['picture']):
        $this->_foreach['indexname']['iteration']++;
?>
    <a href="javascript:void(0);" <?php if (($this->_foreach['indexname']['iteration'] <= 1)): ?> class="active"<?php endif; ?>></a>
     <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
  </div>
</div>
<script type="text/javascript">$(function(){
	$("div.module_special .wrap .major ul.list li:last-child").addClass("remove_bottom_line");
});
var active=0,
	as=document.getElementById('pagenavi').getElementsByTagName('a');
	
for(var i=0;i<as.length;i++){
	(function(){
		var j=i;
		as[i].onclick=function(){
			t2.slide(j);
			return false;
		}
	})();
}
var t2=new TouchSlider({id:'sliderlist', speed:600, timeout:6000, before:function(index){
		as[active].className='';
		active=index;
		as[active].className='active';
	}});
</script>