<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">

	<title><?php echo $this->_var['page_title']; ?></title>
	<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
	<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
    <script src="themesmobile/68ecshopcom_mobile/js/modernizr.js"></script>
<link rel="shortcut icon" href="themesmobile/68ecshopcom_mobile/img/favicon.png">
	<link rel="apple-touch-icon-precomposed" href="themesmobile/68ecshopcom_mobile/img/website_icon.png">
	<link rel="stylesheet" href="themesmobile/68ecshopcom_mobile/css/style.css">
    	<link rel="stylesheet" href="themesmobile/68ecshopcom_mobile/css/index.css">
<link rel="stylesheet" href="themesmobile/68ecshopcom_mobile/css/component.css">
<link rel="stylesheet" href="themesmobile/68ecshopcom_mobile/css/login.css">

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,utils.js')); ?>

	</head>
<body >
<div id="tbh5v0">
  <div class="screen-wrap fullscreen login">
<header id="header">
      <div class="c-inav">
        <section>
          
        </section>
        <section> <span>系统提示
                </span> </section>
        <section></section>
      </div>
    </header>
<div id="main"><div class="wrapper">

    
    <div class="content ptop0" style="margin-top:50px;">
		
		<div class="con-ct radius shadow fo-con">
			<ul class="ct-list">
            <li style="text-align:center"><?php echo $this->_var['message']; ?></li>
			  <?php if ($this->_var['virtual_card']): ?><li>
          
        <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
        <?php $_from = $this->_var['virtual_card']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'vgoods');if (count($_from)):
    foreach ($_from AS $this->_var['vgoods']):
?>
          <?php $_from = $this->_var['vgoods']['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'card');if (count($_from)):
    foreach ($_from AS $this->_var['card']):
?>
            <tr>
            <td bgcolor="#FFFFFF"><?php echo $this->_var['vgoods']['goods_name']; ?></td>
            <td bgcolor="#FFFFFF">
            <?php if ($this->_var['card']['card_sn']): ?><strong><?php echo $this->_var['lang']['card_sn']; ?>:</strong><?php echo $this->_var['card']['card_sn']; ?><?php endif; ?>
            <?php if ($this->_var['card']['card_password']): ?><strong><?php echo $this->_var['lang']['card_password']; ?>:</strong><?php echo $this->_var['card']['card_password']; ?><?php endif; ?>
            <?php if ($this->_var['card']['end_date']): ?><strong><?php echo $this->_var['lang']['end_date']; ?>:</strong><?php echo $this->_var['card']['end_date']; ?><?php endif; ?>
            </td>
            </tr>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </table>
        
        
            </li><?php endif; ?>
            <li style="text-align:center;"><a href="<?php echo $this->_var['shop_url']; ?>"><?php echo $this->_var['lang']['back_home']; ?></a></li>
			</ul>
       
      
		</div>
	</div>
    

	
</div></div>
<!--

<?php echo $this->fetch('library/page_footer.lbi'); ?>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
-->


</div>
</div>
</body>

</html>