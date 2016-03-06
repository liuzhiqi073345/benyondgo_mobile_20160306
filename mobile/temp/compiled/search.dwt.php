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
<link rel="stylesheet" type="text/css" href="themesmobile/68ecshopcom_mobile/css/category_list.css"/>
<script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/jquery.js"></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.json.js,transport.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
</head>
<body>

<section class="_pre" >
<header>
<section class="header" >
     <div class="h-left"><a class="sb-back" href="javascript:history.back(-1)" title="返回"></a></div>
    <div class="h-mid">
    <?php if ($this->_var['intromode'] == 'best'): ?>
   <?php echo $this->_var['lang']['best_goods']; ?>
    <?php elseif ($this->_var['intromode'] == 'new'): ?>
   <?php echo $this->_var['lang']['new_goods']; ?>
   <?php elseif ($this->_var['intromode'] == 'hot'): ?>
   <?php echo $this->_var['lang']['hot_goods']; ?>
   <?php elseif ($this->_var['intromode'] == 'promotion'): ?>
   <?php echo $this->_var['lang']['promotion_goods']; ?>
   <?php else: ?>
   <?php echo $this->_var['lang']['search_result']; ?>
         <?php endif; ?>
          </div>
<div class="h-right">
            <aside class="top_bar">
              <div onClick="show_menu();$('#close_btn').addClass('hid');" id="show_more"><a href="javascript:;"></a> </div>
            </aside>
          </div>

<?php echo $this->fetch('library/up_menu.lbi'); ?> 

<section class="filtrate_term" id="product_sort" style="width: 100%;">
<ul>
        <li class="<?php if ($this->_var['pager']['search']['sort'] == 'goods_id'): ?>on<?php endif; ?>"><a href="search.php?<?php $_from = $this->_var['pager']['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?><?php if ($this->_var['key'] != "sort" && $this->_var['key'] != "order"): ?><?php echo $this->_var['key']; ?>=<?php echo $this->_var['item']; ?>&<?php endif; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>page=<?php echo $this->_var['pager']['page']; ?>&sort=goods_id&order=<?php if ($this->_var['pager']['search']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#list">最新</a></li><li class="<?php if ($this->_var['pager']['search']['sort'] == 'salenum'): ?>on<?php endif; ?>"><a href="search.php?<?php $_from = $this->_var['pager']['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?><?php if ($this->_var['key'] != "sort" && $this->_var['key'] != "order"): ?><?php echo $this->_var['key']; ?>=<?php echo $this->_var['item']; ?>&<?php endif; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>page=<?php echo $this->_var['pager']['page']; ?>&sort=salenum&order=<?php if ($this->_var['pager']['search']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#list" >销量</a></li><li class="<?php if ($this->_var['pager']['search']['sort'] == 'last_update'): ?>on<?php endif; ?>"><a href="search.php?<?php $_from = $this->_var['pager']['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?><?php if ($this->_var['key'] != "sort" && $this->_var['key'] != "order"): ?><?php echo $this->_var['key']; ?>=<?php echo $this->_var['item']; ?>&<?php endif; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>page=<?php echo $this->_var['pager']['page']; ?>&sort=last_update&order=<?php if ($this->_var['pager']['search']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#list" >更新</a></li><li class="<?php if ($this->_var['pager']['search']['sort'] == 'shop_price'): ?>on<?php endif; ?>"><a href="search.php?<?php $_from = $this->_var['pager']['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?><?php if ($this->_var['key'] != "sort" && $this->_var['key'] != "order"): ?><?php echo $this->_var['key']; ?>=<?php echo $this->_var['item']; ?>&<?php endif; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>page=<?php echo $this->_var['pager']['page']; ?>&sort=shop_price&order=<?php if ($this->_var['pager']['search']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#list">价格<span class="arrow_up <?php if ($this->_var['pager']['search']['sort'] == 'shop_price' && $this->_var['pager']['search']['order'] == 'ASC'): ?>active_up<?php endif; ?>"></span><span class="arrow_down <?php if ($this->_var['pager']['search']['sort'] == 'shop_price' && $this->_var['pager']['search']['order'] == 'DESC'): ?>active_down<?php endif; ?>"></span></a></li><li class=""><a  href="javascript:void(0);" class="show_type show_list" >&nbsp;</a></li>    </ul>

</section>

</section></header>


<section>
  <div style="height:45px;"></div>
<div class="touchweb-com_searchListBox <?php if ($this->_var['pager']['display'] == 'grid'): ?>openList<?php endif; ?>" id="goods_list">

<?php echo $this->fetch('library/search_goods_list.lbi'); ?>
   <script type="text/javascript">
     
        var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
        var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
        var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
        </script>
</div>
</ul>
</div>
</section> 


<?php echo $this->fetch('library/page_footer.lbi'); ?>
<?php echo $this->fetch('library/footer_nav.lbi'); ?>
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
</body>
</html>