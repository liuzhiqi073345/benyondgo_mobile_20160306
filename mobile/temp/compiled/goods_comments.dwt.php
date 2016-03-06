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
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="themesmobile/68ecshopcom_mobile/css/public.css"/>
<link rel="stylesheet" type="text/css" href="themesmobile/68ecshopcom_mobile/css/comments.css"/>
<script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/jquery.js"></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.json.js,transport.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
<script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/iscroll.js"></script>
<script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/idangerous.swiper-2.1.min.js"></script>
<link href="themesmobile/68ecshopcom_mobile/css/photoswipe.css" rel="stylesheet" type="text/css">
<script src="themesmobile/68ecshopcom_mobile/js/klass.min.js"></script> 
<script src="themesmobile/68ecshopcom_mobile/js/photoswipe.js"></script> 
<script src="themesmobile/68ecshopcom_mobile/js/custom.js"></script>
</head>
<body>
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
</script> 
<script language="javascript"> 
<!--
/*屏蔽所有的js错误*/
function killerrors() { 
return true; 
} 
window.onerror = killerrors; 
//-->
function tiaozhuan()
{ 
var thisurl = window.location.href;
location.href='share_goods.php?content=<?php echo $this->_var['goods']['goods_style_name']; ?>&pics=<?php echo $this->_var['goods']['goods_img']; ?>&gid=<?php echo $this->_var['goods']['goods_id']; ?>&url='+thisurl;
}
</script> 
<script type="text/javascript">
/*第一种形式 第二种形式 更换显示样式*/
function setGoodsTab(name,cursel,n){
$('html,body').animate({'scrollTop':0},600);
for(i=1;i<=n;i++){
var menu=document.getElementById(name+i);
var con=document.getElementById("user_"+name+"_"+i);
menu.className=i==cursel?"on":"";
con.style.display=i==cursel?"block":"none";
}
}
</script>
<div class="main"> 
  
  <div class="tab_nav">
    <div class="header">
      <div class="h-left"><a class="sb-back" href="javascript:history.back(-1)" title="返回"></a></div>
      <div class="h-mid">商品评价</div>
      <div class="h-right">
        <aside class="top_bar">
          <div onClick="show_menu();$('#close_btn').addClass('hid');" id="show_more"><a href="javascript:;"></a> </div>
        </aside>
      </div>
    </div>
  </div>
   
  <?php echo $this->fetch('library/up_menu.lbi'); ?> 
   
</div>
<?php if ($this->_var['comments_all_list']): ?>
<div class="comm_box">
  <ul class="comm_nav">
    <li class="curr"><span>全部评价</span><em>(<?php echo $this->_var['comments_count']['all']; ?>)</em></li>
    <li><span>好评</span><em>(<?php echo $this->_var['comments_count']['h']; ?>)</em></li>
    <li><span>中评</span><em>(<?php echo $this->_var['comments_count']['m']; ?>)</em></li>
    <li><span>差评</span><em>(<?php echo $this->_var['comments_count']['l']; ?>)</em></li>
    <li><span>晒单</span><em>(<?php echo $this->_var['comments_count']['shaidan']; ?>)</em></li>
  </ul>
  <div class="comm_list swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
      	<?php if ($this->_var['comments_all_list']): ?>
	    <?php $_from = $this->_var['comments_all_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comments_all');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['comments_all']):
        $this->_foreach['name']['iteration']++;
?>
        <div class="comm_info">
          <div class="comm_info_top">
			<em class="user_icon"><?php if ($this->_var['comments_all']['headimg'] != ''): ?><img src='../<?php echo $this->_var['comments_all']['headimg']; ?>' width='26' height='26' /><?php endif; ?></em>
			<span class="user_name"><?php echo $this->_var['comments_all']['user_name']; ?><em>(<?php echo $this->_var['comments_all']['user_rank_name']; ?>)</em></span> 
			<span class="comm_time"><?php echo $this->_var['comments_all']['comment_time']; ?></span> 
		  </div>
          <div class="comm_txt"><?php echo $this->_var['comments_all']['content']; ?></div>
          <div class="comm_txt"><?php echo $this->_var['comments_all']['shaidan_message']; ?></div>
          <?php if ($this->_var['comments_all']['imgs']): ?>
          <div class="comm_img" id="gallery1<?php echo $this->_foreach['name']['iteration']; ?>">
              <?php $_from = $this->_var['comments_all']['imgs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comment_all_img');if (count($_from)):
    foreach ($_from AS $this->_var['comment_all_img']):
?>
			  <div class="slide_img"><a href="../<?php echo $this->_var['comment_all_img']['image']; ?>"><img src="<?php echo $this->_var['comment_all_img']['thumb']; ?>"></a></div>
			  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              <script>
			$(function() {
				var myPhotoSwipe = $("#gallery1<?php echo $this->_foreach['name']['iteration']; ?> a").photoSwipe({ 
					enableMouseWheel: false, 
					enableKeyboard: false, 
					allowUserZoom: false, 
					loop:false
				});
			
			});
			</script>
          </div>
          <?php endif; ?>
		  <?php if ($this->_var['comments_all']['review'] > 0): ?>
          <div class="comm_txt">    
          	<p class="comm_reply"><span>管理员<?php echo $this->_var['comments_all']['admin']['user_name']; ?>回复：<br></span><?php echo $this->_var['comments_all']['admin']['content']; ?></p> 
          </div>
		  <?php endif; ?>
          <div class="comm_bottom">
            <div class="service_rating">
              <div class="rating"><span style="width:<?php echo $this->_var['comments_all']['comment_rank_per']; ?>%;"></span></div>
            </div>
            <a href="javascript:;" onClick="show_good(<?php echo $this->_var['comments_all']['comment_id']; ?>)" class="useful">有用(<span id="good_num_all_<?php echo $this->_var['comments_all']['comment_id']; ?>"><?php echo $this->_var['comments_all']['good_num']; ?></span>)</a>
		  </div>
        </div>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php else: ?>
        <div class="tips_a"><img src="themesmobile/68ecshopcom_mobile/images/icogantanhao.png"></div>
    	<div class="tips">暂无此类评价</div>
		<?php endif; ?>
      </div>
      <div class="swiper-slide">
      	<?php if ($this->_var['comments_h_list']): ?>
	    <?php $_from = $this->_var['comments_h_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comments_h');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['comments_h']):
        $this->_foreach['name']['iteration']++;
?>
        <div class="comm_info">
          <div class="comm_info_top">
			<em class="user_icon"><?php if ($this->_var['comments_h']['headimg'] != ''): ?><img src='../<?php echo $this->_var['comments_h']['headimg']; ?>' width='26' height='26' /><?php endif; ?></em>
			<span class="user_name"><?php echo $this->_var['comments_h']['user_name']; ?><em>(<?php echo $this->_var['comments_h']['user_rank_name']; ?>)</em></span> 
			<span class="comm_time"><?php echo $this->_var['comments_h']['comment_time']; ?></span> 
		  </div>
          <div class="comm_txt"><?php echo $this->_var['comments_h']['content']; ?></div>
          <div class="comm_txt"><?php echo $this->_var['comments_h']['shaidan_message']; ?></div>
          <?php if ($this->_var['comments_h']['imgs']): ?>
          <div class="comm_img" id="gallery2<?php echo $this->_foreach['name']['iteration']; ?>">
          	<?php $_from = $this->_var['comments_h']['imgs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comment_h_img');if (count($_from)):
    foreach ($_from AS $this->_var['comment_h_img']):
?>
			<div class="slide_img">
				<a href="../<?php echo $this->_var['comment_h_img']['image']; ?>"><img src="<?php echo $this->_var['comment_h_img']['thumb']; ?>"></a>
			</div>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <script>
			$(function() {
				var myPhotoSwipe = $("#gallery2<?php echo $this->_foreach['name']['iteration']; ?> a").photoSwipe({ 
					enableMouseWheel: false, 
					enableKeyboard: false, 
					allowUserZoom: false, 
					loop:false
				});
			
			});
			</script>
          </div>
          <?php endif; ?>
		  <?php if ($this->_var['comments_h']['review'] > 0): ?>
          <div class="comm_txt">    
          	<p class="comm_reply"><span>管理员<?php echo $this->_var['comments_h']['admin']['user_name']; ?>回复：<br></span><?php echo $this->_var['comments_h']['admin']['content']; ?></p> 
          </div>
		  <?php endif; ?>
          <div class="comm_bottom">
            <div class="service_rating">
              <div class="rating"><span style="width:<?php echo $this->_var['comments_h']['comment_rank_per']; ?>%;"></span></div>
            </div>
            <a href="javascript:;" onClick="show_good(<?php echo $this->_var['comments_h']['comment_id']; ?>)" class="useful">有用(<span id="good_num_h_<?php echo $this->_var['comments_h']['comment_id']; ?>"><?php echo $this->_var['comments_h']['good_num']; ?></span>)</a>
		  </div>
        </div>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php else: ?>
		<div class="tips_a"><img src="themesmobile/68ecshopcom_mobile/images/icogantanhao.png"></div>
    	<div class="tips">暂无此类评价</div>
        <?php endif; ?>
      </div>
      <div class="swiper-slide">
      	<?php if ($this->_var['comments_m_list']): ?>
	    <?php $_from = $this->_var['comments_m_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comments_m');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['comments_m']):
        $this->_foreach['name']['iteration']++;
?>
        <div class="comm_info">
          <div class="comm_info_top">
			<em class="user_icon"><?php if ($this->_var['comments_m']['headimg'] != ''): ?><img src='../<?php echo $this->_var['comments_m']['headimg']; ?>' width='26' height='26' /><?php endif; ?></em>
			<span class="user_name"><?php echo $this->_var['comments_m']['user_name']; ?><em>(<?php echo $this->_var['comments_m']['user_rank_name']; ?>)</em></span> 
			<span class="comm_time"><?php echo $this->_var['comments_m']['comment_time']; ?></span> 
		  </div>
          <div class="comm_txt"><?php echo $this->_var['comments_m']['content']; ?></div>
          <div class="comm_txt"><?php echo $this->_var['comments_m']['shaidan_message']; ?></div>
          <?php if ($this->_var['comments_m']['imgs']): ?>
          <div class="comm_img" id="gallery3<?php echo $this->_foreach['name']['iteration']; ?>">
              <?php $_from = $this->_var['comments_m']['imgs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comment_m_img');if (count($_from)):
    foreach ($_from AS $this->_var['comment_m_img']):
?>
			  <div class="slide_img"><a href="../<?php echo $this->_var['comment_m_img']['image']; ?>"><img src="<?php echo $this->_var['comment_m_img']['thumb']; ?>"></a></div>
			  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              <script>
			$(function() {
				var myPhotoSwipe = $("#gallery3<?php echo $this->_foreach['name']['iteration']; ?> a").photoSwipe({ 
					enableMouseWheel: false, 
					enableKeyboard: false, 
					allowUserZoom: false, 
					loop:false
				});
			
			});
			</script>
          </div>
          <?php endif; ?>
		  <?php if ($this->_var['comments_m']['review'] > 0): ?>
          <div class="comm_txt">    
          	<p class="comm_reply"><span>管理员<?php echo $this->_var['comments_m']['admin']['user_name']; ?>回复：<br></span><?php echo $this->_var['comments_m']['admin']['content']; ?></p> 
          </div>
		  <?php endif; ?>
          <div class="comm_bottom">
            <div class="service_rating">
              <div class="rating"><span style="width:<?php echo $this->_var['comments_m']['comment_rank_per']; ?>%;"></span></div>
            </div>
            <a href="javascript:;" onClick="show_good(<?php echo $this->_var['comments_m']['comment_id']; ?>)" class="useful">有用(<span id="good_num_m_<?php echo $this->_var['comments_m']['comment_id']; ?>"><?php echo $this->_var['comments_m']['good_num']; ?></span>)</a>
		  </div>
        </div>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php else: ?>
		<div class="tips_a"><img src="themesmobile/68ecshopcom_mobile/images/icogantanhao.png"></div>
    	<div class="tips">暂无此类评价</div>
        <?php endif; ?>
      </div>
      <div class="swiper-slide">
      	<?php if ($this->_var['comments_l_list']): ?>
	    <?php $_from = $this->_var['comments_l_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comments_l');if (count($_from)):
    foreach ($_from AS $this->_var['comments_l']):
?>
        <div class="comm_info">
          <div class="comm_info_top">
			<em class="user_icon"><?php if ($this->_var['comments_l']['headimg'] != ''): ?><img src='../<?php echo $this->_var['comments_l']['headimg']; ?>' width='26' height='26' /><?php endif; ?></em>
			<span class="user_name"><?php echo $this->_var['comments_l']['user_name']; ?><em>(<?php echo $this->_var['comments_l']['user_rank_name']; ?>)</em></span> 
			<span class="comm_time"><?php echo $this->_var['comments_l']['comment_time']; ?></span> 
		  </div>
          <div class="comm_txt"><?php echo $this->_var['comments_l']['content']; ?></div>
          <div class="comm_txt"><?php echo $this->_var['comments_l']['shaidan_message']; ?></div>
          <?php if ($this->_var['comments_l']['imgs']): ?>
          <div class="comm_img" id="gallery4<?php echo $this->_foreach['name']['iteration']; ?>">
              <?php $_from = $this->_var['comments_l']['imgs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comment_l_img');if (count($_from)):
    foreach ($_from AS $this->_var['comment_l_img']):
?>
			  <div class="slide_img"><a href="../<?php echo $this->_var['comment_l_img']['image']; ?>"><img src="<?php echo $this->_var['comment_l_img']['thumb']; ?>"></a></div>
			  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              <script>
			$(function() {
				var myPhotoSwipe = $("#gallery4<?php echo $this->_foreach['name']['iteration']; ?> a").photoSwipe({ 
					enableMouseWheel: false, 
					enableKeyboard: false, 
					allowUserZoom: false, 
					loop:false
				});
			
			});
			</script>
          </div>
          <?php endif; ?>
		  <?php if ($this->_var['comments_l']['review'] > 0): ?>
          <div class="comm_txt">    
          	<p class="comm_reply"><span>管理员<?php echo $this->_var['comments_l']['admin']['user_name']; ?>回复：<br></span><?php echo $this->_var['comments_l']['admin']['content']; ?></p> 
          </div>
		  <?php endif; ?>
          <div class="comm_bottom">
            <div class="service_rating">
              <div class="rating"><span style="width:<?php echo $this->_var['comments_l']['comment_rank_per']; ?>%;"></span></div>
            </div>
            <a href="javascript:;" onClick="show_good(<?php echo $this->_var['comments_l']['comment_id']; ?>)" class="useful">有用(<span id="good_num_l_<?php echo $this->_var['comments_l']['comment_id']; ?>"><?php echo $this->_var['comments_l']['good_num']; ?></span>)</a>
		  </div>
        </div>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php else: ?>
		<div class="tips_a"><img src="themesmobile/68ecshopcom_mobile/images/icogantanhao.png"></div>
    	<div class="tips">暂无此类评价</div>
        <?php endif; ?>
      </div>
      <div class="swiper-slide">
      	<?php if ($this->_var['shaidan_list']): ?>
	    <?php $_from = $this->_var['shaidan_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'shaidan');if (count($_from)):
    foreach ($_from AS $this->_var['shaidan']):
?>
		<?php if ($this->_var['shaidan']['imgs'] != ''): ?>
        <div class="comm_info">
          <div class="comm_info_top">
			<em class="user_icon"><?php if ($this->_var['shaidan']['headimg'] != ''): ?><img src='../<?php echo $this->_var['shaidan']['headimg']; ?>' width='26' height='26' /><?php endif; ?></em>
			<span class="user_name"><?php echo $this->_var['shaidan']['user_name']; ?><em>(<?php echo $this->_var['shaidan']['user_rank_name']; ?>)</em></span> 
			<span class="comm_time"><?php echo $this->_var['shaidan']['comment_time']; ?></span> 
		  </div>
          <div class="comm_txt"><?php echo $this->_var['comments_l']['content']; ?></div>
          <div class="comm_txt"><?php echo $this->_var['comments_l']['shaidan_message']; ?></div>
          <?php if ($this->_var['shaidan']['imgs']): ?>
          <div class="comm_img" id="gallery5<?php echo $this->_foreach['name']['iteration']; ?>">
              <?php $_from = $this->_var['shaidan']['imgs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'shaidan_img');if (count($_from)):
    foreach ($_from AS $this->_var['shaidan_img']):
?>
			  <div class="slide_img"><a href="../<?php echo $this->_var['shaidan_img']['image']; ?>"><img src="<?php echo $this->_var['shaidan_img']['thumb']; ?>"></a></div>
			  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </div>
          <script>
			$(function() {
				var myPhotoSwipe = $("#gallery5<?php echo $this->_foreach['name']['iteration']; ?> a").photoSwipe({ 
					enableMouseWheel: false, 
					enableKeyboard: false, 
					allowUserZoom: false, 
					loop:false
				});
			
			});
			</script>
          <?php endif; ?>
		  <?php if ($this->_var['shaidan']['review'] > 0): ?>
          <div class="comm_txt">    
          	<p class="comm_reply"><span>管理员<?php echo $this->_var['shaidan']['admin']['user_name']; ?>回复：<br></span><?php echo $this->_var['shaidan']['admin']['content']; ?></p> 
          </div>
		  <?php endif; ?>
          <div class="comm_bottom">
            <div class="service_rating">
              <div class="rating"><span style="width:<?php echo $this->_var['shaidan']['comment_rank_per']; ?>%;"></span></div>
            </div>
            <a href="javascript:;" onClick="show_good(<?php echo $this->_var['shaidan']['comment_id']; ?>)" class="useful">有用(<span id="good_num_s_<?php echo $this->_var['shaidan']['comment_id']; ?>"><?php echo $this->_var['shaidan']['good_num']; ?></span>)</a>
		  </div>
        </div>
		<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php else: ?>
		<div class="tips_a"><img src="themesmobile/68ecshopcom_mobile/images/icogantanhao.png"></div>
    	<div class="tips">暂无此类评价</div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<script>
  var tabsSwiper = new Swiper('.swiper-container',{
    speed:500,
	noSwiping : true,
    onSlideChangeStart: function(){
      $(".comm_nav .curr").removeClass('curr')
      $(".comm_nav li").eq(tabsSwiper.activeIndex).addClass('curr');
	  $('html,body').animate({'scrollTop':0},0);
    }
  })
  $(".comm_nav li").on('touchstart mousedown',function(e){
    e.preventDefault()
    $(".comm_nav .curr").removeClass('curr')
    $(this).addClass('curr')
    tabsSwiper.swipeTo( $(this).index() )
  })
  $(".comm_nav li").click(function(e){
    e.preventDefault()
  })
  </script> 
<script>
function show_good(comment_id)
{
	Ajax.call('goods_comment.php?act=good_json', 'comment_id=' + comment_id, show_goodResponse, 'GET', 'JSON');
}
function show_goodResponse(result)
{
	if (result.error == 1)
	{
		alert("您已经评过分了哦！");
	}
	else
	{
		document.getElementById("good_num_all_"+result.comment_id).innerHTML = result.good_num;
		document.getElementById("good_num_h_"+result.comment_id).innerHTML = result.good_num;
		document.getElementById("good_num_m_"+result.comment_id).innerHTML = result.good_num;
		document.getElementById("good_num_l_"+result.comment_id).innerHTML = result.good_num;
		document.getElementById("good_num_s_"+result.comment_id).innerHTML = result.good_num;
	}
}
</script>
<?php else: ?>
<div class="comm_box">
	<div style="height:60px; overflow:hidden;"></div>
    <div class="tips_a"><img src="themesmobile/68ecshopcom_mobile/images/icogantanhao.png"></div>
    <div class="tips">此商品暂无评价</div>
</div>
<?php endif; ?>

</body>
</html>