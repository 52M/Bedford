<?php get_header(); ?>
      <section id="body">
        <div class="container">
          <div id="main" class="post-page">
            <div class="res-cons">
              <?php while (have_posts()) : the_post(); ?>
              <article class="post">
                <header class="post-meta">
                  <date class="post-date"><?php the_time('M d, Y'); ?></date>
                  <h1 class="post-title"><?php the_title(); ?></h1>
                </header>
                <section class="post-content"><?php the_content(('')); ?></section>
              </article>
              <?php endwhile; ?>
            </div>
          </div>
        </div>
      </section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>