<div class="entry-list clearfix">
	<nav>
		<ul>
			<?php $_from = $this->_var['mobile_menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'm_menu');if (count($_from)):
    foreach ($_from AS $this->_var['m_menu']):
?>
			<li>
				<a href="<?php echo $this->_var['m_menu']['menu_url']; ?>">
					<img alt="<?php echo $this->_var['m_menu']['menu_name']; ?>" src="<?php echo $this->_var['m_menu']['menu_img']; ?>"/><br>
					<span><?php echo $this->_var['m_menu']['menu_name']; ?></span>
				</a>
			</li>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</ul>
	</nav>
</div>
