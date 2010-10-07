<?php dbg(__FILE__); ?>

<div id="comments"> <a name="the_comments_anchor" id="the_comments_anchor"></a> 
  <!--<a href="<?php print site_url('main/rss_comments/post:').$post['id']; ?>" target="_blank" class="get-rss right">Subscribe for comments RSS</a>-->
  <div class="c" style="padding-bottom: 20px"></div>
  <?php $comments = array();
$comments ['to_table'] = 'table_content';
$comments ['to_table_id'] = $post['id'];
//commentsGet($data, $limit = false, $count_only = false, $orderby = false)
$comments = $this->content_model->commentsGet($comments, $limit = false, $count_only = false, $orderby = array('updated_on', 'asc'));
?>
  <?php if(!empty($comments)) : ?>
  <h2 class="in-content-title" style="background-image: none">Comments</h2>
  <?php foreach($comments as $item): ?>
  <?php $author = $this->users_model->getUserById( $item['created_by']); ?>
  <?php $thumb = $this->users_model->getUserThumbnail( $author['id'], 50); ?>
  <?php //  print $thumb; ?>
  <div class="comment"> <a style="background-image: url(<?php print $thumb; ?>)" href="<?php print site_url('userbase/action:profile/username:'); ?><?php print $author['username']; ?>" class="img">
    <?php if($thumb != ''): ?>
    <?php else: ?>
    <!-- <span style="background-image: url('<?php echo gravatar( $item['comment_email'], $rating = 'X', $size = '30', $default =  TEMPLATE_URL .'img/gravatar.jpg' ); ?>)'"></span> -->
    <?php endif; ?>
    </a>
    <h3 class="post-title"><a href="<?php /* $item['comment_website'] ? print prep_url($item['comment_website']) :  print '#'; */ print site_url('userbase/action:profile/username:'); ?><?php print $author['username'];   ?>">
      <?php $item['comment_name'] ? print $item['comment_name']:  print $author['first_name'] . ' '. $author['last_name']  ; ?>
      </a></h3>
    <span class="date"><?php print date(DATETIME_FORMAT, strtotime($item['created_on'])) ?> | <a class="title-tip" title="Report for spam. <?php print $this->content_model->reportsGetCount('table_comments', $item['id'], '1 year'); ?> reports so far"  id="content-reports-<?php print $item['id'] ?>"   href="javascript:mw.content.report('<?php print $this->core_model->securityEncryptString('table_comments') ?>', '<?php print $this->core_model->securityEncryptString($item['id']) ?>', '.content-reports-count-<?php print $item['id'] ?>');"> <span class="content-reports-count-<?php print $item['id'] ?>">Report for spam</span> </a></span>
    <p><?php print ($item['comment_body']); ?></p>
    
    <!-- <span class="voteDown right">&nbsp;</span> <span class="voteUp right">&nbsp;</span>--> </div>
  <?php endforeach ; ?>
  <!--   <ul class="paging right">
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
      </ul>-->
  
  <?php endif; ?>
</div>
<?php dbg(__FILE__, 1); ?>
