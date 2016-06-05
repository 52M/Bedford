<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
    <link rel="alternate" type="application/rss+xml" title="rss 2.0" href="<?php echo home_url(); ?>/feed/">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"/>
    <meta content="yes" name="apple-mobile-web-app-capable"/>
    <meta content="black" name="apple-mobile-web-app-status-bar-style"/>
    <meta content="telephone=no" name="format-detection"/>
    <meta name="renderer" content="webkit">
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <title><?php wp_title("-", true, 'right'); bloginfo('name'); ?></title>

    <link href="<?php echo esc_url(get_template_directory_uri());?>/static/style.scss" type="text/css" rel="stylesheet"/>
    <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri());?>/static/jquery.min.js"></script>
    <!-- WordPress Native Head Output -->
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="side-click-mask"></div>
    <div class="move-block">
      <header id="header" class="clearfix">
        <div class="in-mark">
          <div class="container">
            <div class="site-name"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri();?>/static/avatar.jpg?width=80&fixed=true&height=80"  class="site-avatar"/>
                <div id="logo"><?php bloginfo('name'); ?></div></a>
              <h1 class="title"><?php bloginfo('name'); ?></h1>
            </div>
          </div>
        </div>
      </header>