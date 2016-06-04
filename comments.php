<?php if (comments_open()) : ?>
              <div id="comments_container">
                <div class="in-mark"><link href="<?php echo esc_url(get_template_directory_uri());?>/static/comment-style.scss" type="text/css" rel="stylesheet"/>
                <div class="comment-title">发表评论</div>
                  <form id="new_comment" method="post" action="<?php echo home_url(); ?>/wp-comments-post.php">
                    <input type="hidden" name="comment_post_ID" value="<?php echo $post->ID; ?>" />
                    <input type="hidden" name="comment_parent" value="0" />
                    <div class="comment-traggle">
                      <div class="avatar"><img src="<?php echo esc_url(get_template_directory_uri());?>/static/uface.png"/></div>
                      <div class="traggle-title">撰写评论</div>
                    </div>
                    <div class="new_comment"><textarea name="comment" rows="2" class="textarea_box"></textarea></div>
                    <div class="comment-traggled">
                      <div class="input_body clearfix">
                        <?php if (!is_user_logged_in()) : ?>
                        <ul class="ident">
                          <li>
                            <lable>昵称</lable>
                            <input type="text" name="author" value="<?php echo $comment_author; ?>" />
                          </li>
                          <li>
                            <lable>邮箱</lable>
                            <input type="text" name="email" value="<?php echo $comment_author_email; ?>" />
                          </li>
                          <li>
                            <lable>网址</lable>
                            <input type="text" name="url" value="<?php echo $comment_author_url; ?>" />
                          </li>
                        </ul>
                        <?php endif; ?>
                        <input id="c_submit" type="submit" value="提交评论"  class="c_button"/>
                      </div>
                    </div>
                  </form>
                  <?php wp_list_comments("type=comment&callback=bedford_comments"); ?>
                  <?php if (get_option('page_comments') && paginate_comments_links('echo=0')) : ?>
                  <div class="page-navigator clearfix">
                    <div class="in-mark">
                      <?php echo str_replace(">&laquo;", "class=\"pre\">&laquo;", get_previous_comments_link(__('&laquo; 上一页'))); ?>
                      <?php echo str_replace(">下一页", "class=\"next\">下一页", get_next_comments_link(__('下一页 &raquo;'))); ?>
                    </div>
                  </div>
                  <?php endif; ?>
                  <script>
                    $(document).ready(function(){
                      $(".new_comment").click(function(){
                        $(".comment-traggle").hide();
                        $(".new_comment textarea").css("height","auto");
                        $(".comment-traggled").fadeIn("slow");
                      });
                    });
                    $('textarea').keyup(function () {
                      $(this).height(this.scrollHeight);
                    });
                  </script>
                </div>
              </div>
<?php endif; ?>