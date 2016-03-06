<?php if ($this->_var['action'] == 'message_list'): ?>
<div class="liuyan">
	<div id="tbh5v0">
    	<div class="liuyan_list">
            <?php if ($this->_var['message_list']): ?>
            <?php $_from = $this->_var['message_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'message');$this->_foreach['message_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['message_list']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['message']):
        $this->_foreach['message_list']['iteration']++;
?>
            <dl>
                <dt class="liuyan_tit"><span class="title"><?php echo $this->_var['message']['msg_type']; ?></span><?php echo $this->_var['message']['msg_title']; ?> <font><?php echo $this->_var['message']['msg_time']; ?></font></dt>
                <dd><?php echo $this->_var['item']['total_fee']; ?></dd>
                <dd><span><?php echo $this->_var['message']['msg_content']; ?><?php if ($this->_var['message']['message_img']): ?><a href="data/feedbackimg/<?php echo $this->_var['message']['message_img']; ?>" target="_bank"><?php echo $this->_var['lang']['view_upload_file']; ?></a><?php endif; ?></span> <font><?php echo $this->_var['item']['handler']; ?></font></dd>
                <?php if ($this->_var['message']['re_msg_content']): ?>
                <dt style=" margin-top:5px;"><span class="price"><?php echo $this->_var['lang']['shopman_reply']; ?></span> <font><?php echo $this->_var['message']['re_msg_time']; ?></font></dt>
                <dd><span style="color:#F60"><?php echo $this->_var['message']['re_msg_content']; ?></span></dd>
                <?php endif; ?>
                <div class="blank5"></div>
            </dl>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <?php echo $this->fetch('library/pages.lbi'); ?>
            <?php else: ?>
            <div id="list_0_0" class="font12"><?php echo $this->_var['lang']['message_empty']; ?></div>
            <?php endif; ?>
        </div>
        <div class="liuyandom">
            <section class="innercontent">
            	<form action="user.php" method="post" enctype="multipart/form-data" name="formMsg" onSubmit="return submitMsg()">
               		<?php if ($this->_var['order_info']): ?>
                    <div class="form_search"> <?php echo $this->_var['lang']['message_type']; ?>：<a href ="<?php echo $this->_var['order_info']['url']; ?>"><?php echo $this->_var['order_info']['order_sn']; ?></a>
                        <input type="hidden" name="msg_type" value="5">
                        <input type="hidden" name="order_id" value="<?php echo $this->_var['order_info']['order_id']; ?>">
                    </div>
                    <?php else: ?>
                    <div>
                    	<h3 class="message_type_title"><?php echo $this->_var['lang']['message_type']; ?><span class="message_type_btn"><?php echo $this->_var['lang']['type']['0']; ?></span></h3>
                        <div class="form_search_box">
                        	<div class="form_search form_message_type">
                              <h4 class="form_search_title"><?php echo $this->_var['lang']['message_type']; ?> <a href='javascript:;' class="message_type_close"></a></h4>
                              <label for="msg_type0">
                                <input type="radio" name="msg_type" value="0" checked="checked" class="radio" id="msg_type0">
                                <span><?php echo $this->_var['lang']['type']['0']; ?></span></label>
                              <label for="msg_type1">
                                <input type="radio" name="msg_type" value="1" class="radio" id="msg_type1">
                                <span><?php echo $this->_var['lang']['type']['1']; ?></span></label>
                              <label for="msg_type2">
                                <input type="radio" name="msg_type" value="2" class="radio" id="msg_type2">
                                <span><?php echo $this->_var['lang']['type']['2']; ?></span></label>
                              <label for="msg_type3">
                                <input type="radio" name="msg_type" value="3" class="radio" id="msg_type3">
                                <span><?php echo $this->_var['lang']['type']['3']; ?></span></label>
                              <label for="msg_type4" style="border:0;">
                                <input type="radio" name="msg_type" value="4" class="radio" id="msg_type4">
                                <span><?php echo $this->_var['lang']['type']['4']; ?></span></label>
                            </div>
                        </div>
                        
                    </div>
                    <?php endif; ?>
                      <div class="field_else">
                      	<label for="msg_title">
                        <span>*</span>
                        <input type="text" name="msg_title" id="msg_title" placeholder="<?php echo $this->_var['lang']['message_title']; ?>"/>
                    	</label>
                      </div>
                    <div class="field_else">
                        <label for="msg_content"> <span>*</span>
                          <textarea name="msg_content" id="msg_content" style="height:100px;margin:0;" placeholder="<?php echo $this->_var['lang']['message_content']; ?>"></textarea>
                        </label>
                    </div>
                    <div style=" padding-bottom:10px;">
                        <input type="submit" value="<?php echo $this->_var['lang']['submit_message']; ?>" class="c_btn_oran"/>
                    </div>
                    <input type="hidden" name="act" value="act_add_message">
                </form>
            </section>
        </div>
    </div>
</div>
<script>
$(function(){
	$('.form_search_box').css({'width':$(window).width(),'height':$(window).height()+50});
	$('.liuyandom .form_message_type').css({'left':($(window).width()-$(window).width()*($('.liuyandom .form_message_type').width()/100))/2,'top':($(window).height()-$('.liuyandom .form_message_type').height())/2});
	$('.form_search label').click(function(){
		$(this).parents('div').find('.message_type_btn').html($(this).find('span').html());
		$('.form_search_box').hide();
	})	
	$('.message_type_title').click(function(){
		$('.form_search_box').show();
		$('.form_message_type').show();
	})
	$('.message_type_close').click(function(){
		$('.form_search_box').hide();
		$('.form_message_type').hide();		
	})
	$(document).on("click",function(e){ 
		var target = $(e.target); 
		if(target.closest(".message_type_title").length == 0 && target.closest(".form_search_title").length == 0){ 
			$(".form_message_type").hide(); 
			$('.form_search_box').hide();
		} 
	}) 
})
</script>
<?php endif; ?> 