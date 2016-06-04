<?php
function bedford_comments($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;
?>
                  <ul id="comments">
                  <li class="comment" id="comment-<?php comment_ID(); ?>">
                    <div class="c_content comment_body">
                      <div class="author">
                        <div class="avatar"><?php echo get_avatar($comment, 80); ?>
                        </div>
                        <div class="author-name"><a href="<?php comment_author_url(); ?>" rel="external nofollow"><b><?php comment_author(); ?></b></a>
                        </div>
                        <div class="author-date"><small><?php comment_date('m-d-Y'); ?> <?php comment_time('H:i'); ?></small>
                        </div>
                      </div>
					  <?php if ($comment -> comment_approved == '0') : ?>
					  <p><small><strong>你的评论正在等待审核，审核完成前仅自己可见。</strong></small></p>
      	              <?php endif; ?>
                      <div class="comment_content"><?php comment_text(); ?></div>
                    </div>
                  </li>
                  </ul>
<?php
}

add_filter('show_admin_bar', '__return_false');
