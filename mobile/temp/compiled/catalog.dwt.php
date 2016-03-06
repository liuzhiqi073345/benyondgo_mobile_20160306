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
<link rel="stylesheet" type="text/css" href="themesmobile/68ecshopcom_mobile/css/catalog.css"/>
<script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/jquery.js"></script>

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>

<script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/mobile.js" ></script>
</head>
<body>
<div class="tab_nav">
    <header class="header">
      <div class="h-left">
        <a class="sb-back" href="javascript:history.back(-1)" title="返回"></a>
      </div>
      <div class="h-mid">商品分类</div>
      <div class="h-right">
        <aside class="top_bar">
          <div onClick="show_menu();$('#close_btn').addClass('hid');" id="show_more">
            <a href="javascript:;"></a>
          </div>
        </aside>
      </div>
    </header>
</div>
<?php echo $this->fetch('library/up_menu.lbi'); ?>
<div class="container">
  <div class="category-box">
    <div class="category1" style="outline: none;" tabindex="5000">
      <ul class="clearfix">
        <?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['name']['iteration']++;
?>
        <li <?php if (($this->_foreach['name']['iteration'] <= 1)): ?>class="cur"<?php endif; ?>><?php echo htmlspecialchars($this->_var['cat']['name']); ?></li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
    </div>
    <div class="category2" style=" outline: none;" tabindex="5001"> 
      <?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['name']['iteration']++;
?>
      <dl style="display: none; <?php if (($this->_foreach['name']['iteration'] <= 1)): ?>display: block;<?php endif; ?>">
        <?php
		 $GLOBALS['smarty']->assign('index_image',get_advlist('分类-'.$GLOBALS['smarty']->_var['cat']['id'].'-促销广告', 1));
	  ?>
        <?php if ($this->_var['index_image']): ?> 
        <span> <?php $_from = $this->_var['index_image']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['index_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_image']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['index_image']['iteration']++;
?> <a target="_blank" title="" href="<?php echo $this->_var['ad']['url']; ?>"><img  src="<?php echo $this->_var['ad']['image']; ?>" width="209" height="155" alt=""></a> <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> </span> 
        <?php endif; ?> 
        <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['child'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['child']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['child']['iteration']++;
?>
        <dt><a href="<?php echo $this->_var['child']['url']; ?>" ><?php echo htmlspecialchars($this->_var['child']['name']); ?></a></dt>
        <dd class="clearfix">
          <div class="fenimg"> 
            <?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');$this->_foreach['cat22'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat22']['total'] > 0):
    foreach ($_from AS $this->_var['childer']):
        $this->_foreach['cat22']['iteration']++;
?> 
            <?php if ($this->_var['childer']['img']): ?>
            <div class="fen_img"> <a href="<?php echo $this->_var['childer']['url']; ?>"><img alt="" src="data/catthumb/<?php echo $this->_var['childer']['img']; ?>"><em><?php echo $this->_var['childer']['name']; ?></em></a> </div>
            <?php else: ?>
            <div class="fen"> <a href="<?php echo $this->_var['childer']['url']; ?>"><?php echo $this->_var['childer']['name']; ?></a> </div>
            <?php endif; ?> 
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
          </div>
        </dd>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </dl>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    </div>
  </div>
</div>
<script src="themesmobile/68ecshopcom_mobile/js/category.js"></script> 
<script src="themesmobile/68ecshopcom_mobile/js/jquery.nicescroll.min.js"></script>
</body>
</html>