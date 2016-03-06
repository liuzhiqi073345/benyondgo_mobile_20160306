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
<script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/TouchSlide.1.1.js"></script>
<link rel="stylesheet" type="text/css" href="themesmobile/68ecshopcom_mobile/css/public.css"/>
<link rel="stylesheet" type="text/css" href="themesmobile/68ecshopcom_mobile/css/index.css"/>
<script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/jquery.js"></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.json.js,transport.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
<script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/touchslider.dev.js"></script>
<script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/jquery.more.js"></script>

</head>
<body>
<div id="page" class="showpage">
  <div> 
    
    <header id="header"><?php echo $this->fetch('library/page_header.lbi'); ?></header>
     
     
    <?php echo $this->fetch('library/index_ad.lbi'); ?> 
     
    
    <div class="index_search" >
      <div class="index_search_mid"> <span><img src="themesmobile/68ecshopcom_mobile/images/icosousuo.png"></span>
	<input class="text" id="search_text" type="text" value="请输入您所搜索的商品"/>
      </div>
    </div>
     
     
    <?php echo $this->fetch('library/index_icon.lbi'); ?> 
     
    
    <div class="floor_images floor_images1">
      <dl>
        <dt>
<?php $this->assign('ads_id','31'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
</dt>
        <dd><span class="Edge"> 
<?php $this->assign('ads_id','32'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
</span><span>
<?php $this->assign('ads_id','33'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
</span></dd>
      </dl>
    </div>
    
    <div class="floor_images floor_images2">
      <dl>
        <dt> 
<?php $this->assign('ads_id','34'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 </dt>
        <dd> <span class="Edge"> 
<?php $this->assign('ads_id','35'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 </span> <span> 
<?php $this->assign('ads_id','36'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 </span> </dd>
      </dl>
    </div>
    
    <div class="floor_img">
      <h2><em></em><?php echo $this->_var['lang']['index_foorl_img']; ?></h2>
      <dl>
        <dt> 
<?php $this->assign('ads_id','37'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 </dt>
        <dd> 
<?php $this->assign('ads_id','38'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 </dd>
      </dl>
      <dl>
        <dt> 
<?php $this->assign('ads_id','39'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 </dt>
        <dd> 
<?php $this->assign('ads_id','40'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 </dd>
      </dl>
    </div>
    
<?php $this->assign('cat_goods',$this->_var['cat_goods_22']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_22']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_527']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_527']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_576']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_576']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_529']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_529']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
 
 
    <script type="text/javascript">
var url = 'index_bestgoods.php?act=ajax';
$(function(){
	$('#J_ItemList').more({'address': url});
});

</script>
    <section class="index_floor_lou">
      <div class="floor_body2" >
        <h2> <em></em> <?php echo $this->_var['lang']['best_goods']; ?> <span class="geng"><a href="search.php?intro=best" >更多<i></i></a></span> </h2>
        <div id="J_ItemList">
          <ul class="product single_item info">
          </ul>
          <a href="javascript:;" class="get_more" style="text-align:center;"> <img src='themesmobile/68ecshopcom_mobile/images/loader.gif' width="12" height="12"> </a> </div>
      </div>
    </section>
    <footer> <?php echo $this->fetch('library/page_footer.lbi'); ?> <?php echo $this->fetch('library/footer_nav.lbi'); ?> </footer>
    <script>
function goTop(){
	$('html,body').animate({'scrollTop':0},600);
}
</script> 
    <a href="javascript:goTop();" class="gotop"><img src="themesmobile/68ecshopcom_mobile/images/topup.png"></a>
</div>
  
  <div id="search_hide" class="search_hide">
    <h2>关键词搜索</h2>
    <div class="search_body">
      <div class="search_box">
        <form action="search.php" method="post" id="searchForm" name="searchForm">
          <div>
            <button type="submit" value="搜 索" ></button>
            <input class="text" type="search" name="keywords" id="keywordBox" autofocus>
          </div>
        </form>
      </div>
      <span class="close"> </span>
</div>
    <section class="mix_recently_search">
      <h3>热门搜索</h3>
      <?php if ($this->_var['searchkeywords']): ?>
      <ul>
        <?php $_from = $this->_var['searchkeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>
	<li> <a href="search.php?keywords=<?php echo urlencode($this->_var['val']); ?>"><?php echo $this->_var['val']; ?></a> </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
      <?php else: ?>
      <div class="recently_search_null">没有搜索记录</div>
      <?php endif; ?>
      </section>
  </div>
   
</div>
<script type="Text/Javascript" language="JavaScript">


function selectPage(sel)
{
   sel.form.submit();
}


</script>
<script type="text/javascript">
<?php $_from = $this->_var['lang']['compare_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
<?php if ($this->_var['key'] != 'button_compare'): ?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php else: ?>
var button_compare = "";
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script> 

<script>
$(document).ready(function(){
	if($('.floor_images1 img').length == 0){
		$('.floor_images1').hide();
	}
	if($('.floor_images2 img').length == 0){
		$('.floor_images2').hide();
	}
	if($('.floor_img img').length == 0){
		$('.floor_img').hide();
	}	
})
</script>
<script type="text/javascript">
$(function() {
	// 弹出搜索层 js
	$('#search_text').click(function(){
		$(".showpage").children('div').hide();
		$("#search_hide").css('position','fixed').css('top','0px').css('width','100%').css('z-index','999').show();
	})
	$('#get_search_box').click(function(){
		$(".showpage").children('div').hide();
		$("#search_hide").css('position','fixed').css('top','0px').css('width','100%').css('z-index','999').show();
	})
	$("#search_hide .close").click(function(){
		$(".showpage").children('div').show();
		$("#search_hide").hide();
	})
	
});
</script>
</body>
</html>