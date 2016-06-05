      <asid id="secondary">
        <div class="sidebar">
          <section class="widget">
            <div id="nav-menu">
                <a id="nav_blog" href="<?php echo home_url(); ?>"<?php if (is_home() || is_front_page()) echo " class=\"selected active current\""; ?>>博客</a>
                <a href="<?php echo home_url(); ?>/archive/"<?php if (is_page('archive')) echo " class=\"selected active current\""; ?>>归档</a>
                <a href="<?php echo home_url(); ?>/about/"<?php if (is_page('about')) echo " class=\"selected active current\""; ?>>关于</a>
            </div>
          </section>
          <section class="widget">
            <div class="widget-title">最新文章</div>
            <?php $posts = get_posts('numberposts=8&orderby=post_date'); ?>
            <ul class="widget-list widget-list2">
              <?php foreach ($posts as $post) : ?>
              <?php setup_postdata($post); ?>
              <li>
                <h3><a href="<?php echo get_permalink(); ?>" ><span class="date-day"><?php the_time('d'); ?></span><span class="date-month">/<?php strtoupper(the_time('M')); ?></span><?php echo get_the_title(); ?></a>
                </h3>
              </li>
              <?php endforeach; ?>
            </ul>
          </section>
          <section class="widget">
            <div class="widget-title">搜索文章</div>
            <form id="search" method="get" action="<?php echo home_url(); ?>">
              <input id="search_value" placeholder="Search" name="s" type="text" value="" class="text"/>
            </form>
          </section>
        </div>
      </asid>