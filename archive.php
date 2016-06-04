<?php
/*
Template Name: 归档页面
*/
?>
<?php get_header(); ?>
      <section id="body">
        <div class="container">
          <div id="main" class="post-page">
            <div class="res-cons">
              <div class="post">
                <div class="post-content-pages in-mark">
                  <h1 class="post-title"><?php the_title(); ?></h1>
                  <div id="archives">
<?php 
  $the_query = new WP_Query('posts_per_page=-1&ignore_sticky_posts=1');
  $current_year = 0;
  while ($the_query -> have_posts()) {
      $the_query -> the_post();
      if (get_the_time('Y') != $current_year) {
          if ($current_year != 0) echo "</ul>";
          $current_year = get_the_time('Y');
          echo "<div class=\"al_year\">" . get_the_time('Y') . "</div>\n";
          echo "<ul class=\"al_mon_list\">\n";
      }
      echo "<li><span class=\"date\">" . get_the_time('m/d') . "</span><a href=\"" . get_permalink() . "\"  title=\"" . get_the_title() . "\" >" . get_the_title() . "</a></li>\n";
  }
  wp_reset_postdata();
  echo "</ul>\n";
?>
            </div>
          </div>
        </div>
      </section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>