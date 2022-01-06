<?php
$url_encode=urlencode(get_permalink());
$title_encode=urlencode(get_the_title()).'｜'.get_bloginfo('name');
?>
 
<div class="share">
<ul>
  <!-- facebook -->
  <li class="facebook">
  <a href="//www.facebook.com/sharer.php?src=bm&u=<?php echo $url_encode;?>&t=<?php echo $title_encode;?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;">
  <i class="fas fa-thumbs-up"></i><span> Like！ 0</span>
  </a>
  </li>
  <!-- facebook-share -->
  <li class="facebook-share">
  <a href="//www.facebook.com/sharer.php?src=bm&u=<?php echo $url_encode;?>&t=<?php echo $title_encode;?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;">
  <span> share</span>
  </a>
  </li>
<!-- tweet -->
<li class="tweet">    
<a href="http://twitter.com/share?text=<?php echo urlencode(the_title_attribute('echo=0')); ?>&url=<?php the_permalink(); ?>&via=【ツイート内に含めるユーザー名】&hashtags=【ハッシュタグ】&related=【ツイート後に表示されるユーザー】" rel="nofollow" data-show-count="false" onclick="javascript:window.open(this.href, '','menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
><i class="fab fa-twitter"></i><span> ツイート</span></a>
</li>     
</ul>
</div>