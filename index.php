<?php get_header(); ?>
      <section id="body">
        <div class="container">
          <div id="main">
            <div class="res-cons">
			<?php if (is_search()) : ?>
			<h1 class="label-title in-mark">搜索包含 <b><?php the_search_query(); ?></b>  的结果</h1>
			<?php endif; ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <article <?php post_class(); ?>>
                <header class="post-meta">
                  <time datetime="<?php the_time('M d, Y'); ?>"  pubdate="pubdate" class="post-date"><?php the_time('M d, Y'); ?></time>
                  <h2 class="post-title"><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a>
                  </h2>
                </header>
                  <div class="post-content"><?php the_content(('')); ?></div>
              </article>
			<?php endwhile; ?>
    		<?php endif; ?>
              <div class="page-navigator clearfix">
                <div class="in-mark">
				  <?php global $wp_query, $paged; $max_page = $wp_query -> max_num_pages; if (!$paged) $paged = 1; ?>
				  <?php if ($paged != 1) :?>
				  <a href="<?php echo get_pagenum_link($paged - 1); ?>"  class="pre">&laquo; 上一页</a>
				  <?php endif; ?>
				  <?php if ($paged < $max_page) :?>
				  <a href="<?php echo get_pagenum_link($paged + 1); ?>"  class="next">下一页 &raquo;</a>
				  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>