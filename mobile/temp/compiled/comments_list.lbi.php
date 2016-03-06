 <?php if ($this->_var['comments']): ?>
<div class="comment_list" id="commentList">
    <ul>
      <?php $_from = $this->_var['comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comment');$this->_foreach['comments'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['comments']['total'] > 0):
    foreach ($_from AS $this->_var['comment']):
        $this->_foreach['comments']['iteration']++;
?>
      <li class="comment_item">
        <div class="content_head">
          <div class="info">
            <div class=" comment_star">
              <div class="name"><?php if ($this->_var['comment']['username']): ?><?php echo htmlspecialchars($this->_var['comment']['username']); ?><?php else: ?><?php echo $this->_var['lang']['anonymous']; ?><?php endif; ?></div>
               <div class="two"><?php echo $this->_var['comment']['add_time']; ?></div>
            </div>
          </div>
          <div class="star_box">
            <span>评分：</span> <em><img src="themesmobile/68ecshopcom_mobile/images/stars<?php echo $this->_var['comment']['rank']; ?>.png" alt="<?php echo $this->_var['comment']['comment_rank']; ?>" /></em>
          </div>
          <p><span>评价：</span><?php echo $this->_var['comment']['content']; ?></p> 
         <?php if ($this->_var['comment']['re_content']): ?>
           <div class="huifu">       
            <h3><?php echo $this->_var['lang']['admin_username']; ?></h3>
           <p><span>回复：</span><?php echo $this->_var['comment']['re_content']; ?></p>
         </div>
         <?php endif; ?>
        </div>
      </li>
       <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
      <form name="selectPageForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
<div class="comment_page"> 
<a href="<?php echo $this->_var['pager']['page_prev']; ?>" class="prev"><?php echo $this->_var['lang']['page_prev']; ?></a> 
<a href="javascript:;" class="prev" >共<?php echo $this->_var['pager']['page_count']; ?>页</a> 
<a href="<?php echo $this->_var['pager']['page_next']; ?>" class="next" ><?php echo $this->_var['lang']['page_next']; ?></a>
     <?php $_from = $this->_var['pager']['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_73388500_1457188095');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_73388500_1457188095']):
?>
            <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo $this->_var['item_0_73388500_1457188095']; ?>" />
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
      </form>
      <script type="Text/Javascript" language="JavaScript">
        <!--
        
        function selectPage(sel)
        {
          sel.form.submit();
        }
        
        //-->
        </script>
  </div>
<?php else: ?>
<div class="comment_list" >
<div class="score"><?php echo $this->_var['lang']['no_comments']; ?></div>
</div>
      <?php endif; ?>
 
      
      <div class="pinglun_k">
      <a href="user.php?act=my_comment">我要评论</a>
      </div>
      
      

<script type="text/javascript">
//<![CDATA[
<?php $_from = $this->_var['lang']['cmt_lang']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_73418400_1457188095');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_73418400_1457188095']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item_0_73418400_1457188095']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

/**
 * 提交评论信息
*/
function submitComment(frm)
{
  var cmt = new Object;

  //cmt.username        = frm.elements['username'].value;
  //cmt.email           = frm.elements['email'].value;去掉填写邮箱
  cmt.content         = frm.elements['content'].value;
  cmt.type            = frm.elements['cmt_type'].value;
  cmt.id              = frm.elements['id'].value;
  cmt.enabled_captcha = frm.elements['enabled_captcha'] ? frm.elements['enabled_captcha'].value : '0';
  cmt.captcha         = frm.elements['captcha'] ? frm.elements['captcha'].value : '';
  cmt.rank            = 0;

  for (i = 0; i < frm.elements['comment_rank'].length; i++)
  {
    if (frm.elements['comment_rank'][i].checked)
    {
       cmt.rank = frm.elements['comment_rank'][i].value;
     }
  }

//  if (cmt.username.length == 0)
//  {
//     alert(cmt_empty_username);
//     return false;
//  }
/*去掉填写邮箱
  if (cmt.email.length > 0)
  {
     if (!(Utils.isEmail(cmt.email)))
     {
        alert(cmt_error_email);
        return false;
      }
   }
   else
   {
        alert(cmt_empty_email);
        return false;
   }
*/
   if (cmt.content.length == 0)
   {
      alert(cmt_empty_content);
      return false;
   }

   if (cmt.enabled_captcha > 0 && cmt.captcha.length == 0 )
   {
      alert(captcha_not_null);
      return false;
   }

   Ajax.call('comment.php', 'cmt=' + $.toJSON(cmt), commentResponse, 'POST', 'JSON');
   return false;
}

/**
 * 处理提交评论的反馈信息
*/
  function commentResponse(result)
  {
    if (result.message)
    {
      alert(result.message);
    }

    if (result.error == 0)
    {
      var layer = document.getElementById('ECS_COMMENT');

      if (layer)
      {
        layer.innerHTML = result.content;
      }
    }
  }

//]]>
</script>
