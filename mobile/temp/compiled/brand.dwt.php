<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta charset="utf-8">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="minimal-ui=yes,width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title><?php echo $this->_var['page_title']; ?></title>
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<link rel="stylesheet" type="text/css" href="themesmobile/68ecshopcom_mobile/css/public.css"/>
<link rel="stylesheet" type="text/css" href="themesmobile/68ecshopcom_mobile/css/category_list.css"/>
<script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/jquery.js"></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.json.js,transport.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
<script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/jquery.more.js"></script>

</head>
<body >
<section class="_pre" >
<header>   
<section class="header" >
     <div class="h-left"><a class="sb-back" href="javascript:history.back(-1)" title="返回"></a></div>
    <div class="h-mid">
<?php echo $this->_var['brand']['brand_name']; ?>
          </div>
    <div class="h-right">
            <aside class="top_bar">
              <div onClick="show_menu();$('#close_btn').addClass('hid');" id="show_more"><a href="javascript:;"></a> </div>
            </aside>
          </div>

<?php echo $this->fetch('library/up_menu.lbi'); ?> 

<section class="filtrate_term" id="product_sort" style="width: 100%;">
<ul>
        <li class="<?php if ($this->_var['pager']['sort'] == 'goods_id'): ?>on<?php endif; ?>"><a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&id=<?php echo $this->_var['brand_id']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=goods_id&order=<?php if ($this->_var['pager']['sort'] == 'goods_id' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list">最新</a></li><li class="<?php if ($this->_var['pager']['sort'] == 'salenum'): ?>on<?php endif; ?>"><a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&id=<?php echo $this->_var['brand_id']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=salenum&order=<?php if ($this->_var['pager']['sort'] == 'salenum' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list" >销量</a></li><li class="<?php if ($this->_var['pager']['sort'] == 'last_update'): ?>on<?php endif; ?>"><a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&id=<?php echo $this->_var['brand_id']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=last_update&order=<?php if ($this->_var['pager']['sort'] == 'last_update' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list" >更新</a></li><li class="<?php if ($this->_var['pager']['sort'] == 'shop_price'): ?>on<?php endif; ?>"><a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&id=<?php echo $this->_var['brand_id']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=shop_price&order=<?php if ($this->_var['pager']['sort'] == 'shop_price' && $this->_var['pager']['order'] == 'ASC'): ?>DESC<?php else: ?>ASC<?php endif; ?>#goods_list">价格<span class="arrow_up <?php if ($this->_var['pager']['sort'] == 'shop_price' && $this->_var['pager']['order'] == 'ASC'): ?>active_up<?php endif; ?>"></span><span class="arrow_down <?php if ($this->_var['pager']['sort'] == 'shop_price' && $this->_var['pager']['order'] == 'DESC'): ?>active_down<?php endif; ?>"></span></a></li><li class=""><a  href="javascript:void(0);" class="show_type show_list" >&nbsp;</a></li>
        </ul>
</section>

</section>

     
</header>

  <div style="height:51px;"></div>
   <script type="text/javascript">
var url = 'brand.php?act=ajax&brand=<?php echo $_REQUEST['id']; ?>&cat=<?php echo $_REQUEST['cat']; ?>&page=1&sort=<?php echo $_REQUEST['sort']; ?>&order=<?php echo $_REQUEST['order']; ?>';
$(function(){
	$('#J_ItemList').more({'address': url});
});
</script>

<div class="touchweb-com_searchListBox <?php if ($this->_var['pager']['display'] == 'grid'): ?>openList<?php endif; ?>" id="goods_list">

  <?php echo $this->fetch('library/goods_list.lbi'); ?>
   
</div>

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
<script type="Text/Javascript" language="JavaScript">
<!--

function selectPage(sel)
{
  sel.form.submit();
}

//-->
</script>
<script type="text/javascript">
window.onload = function()
{
  Compare.init();
  fixpng();
}
<?php $_from = $this->_var['lang']['compare_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
<?php if ($this->_var['key'] != 'button_compare'): ?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php else: ?>
var button_compare = '';
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>
<footer>
<?php echo $this->fetch('library/footer_nav.lbi'); ?>
</footer>
</body>
</html>