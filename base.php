<?php

use Roots\Sage\Config;
use Roots\Sage\Wrapper;

global $sidebar;
$ts_funcs = new TS_Funcs;
$layout = $ts_funcs->opt_layout();
$sidebar = $ts_funcs->opt_sidebar();

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(array('ts-sticky-simple-container')); ?>>
    <!--[if lt IE 9]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <div id="wrap" class="container-fluid" role="document">
      <div class="content row inner ts-sticky-adv-parent vertical">

        <?php if (Config\display_sidebar()) : ?>
          <?php if ( $layout==='sandwitch' || $layout==='sidebar-right' ) : ?>
            <aside id="sidebar-right" class="sidebar ts-sticky-adv-right" role="complementary" data-top="140"><!-- Sticky Child -->
              <?php if(!empty($sidebar['right'])): ?>
                <div class="inner">
                  <?php include Wrapper\sidebar_path('sidebar-right'); ?>
                </div>
              <?php endif; ?>
            </aside><!-- /.sidebar -->
          <?php endif; ?>
        <?php endif; ?>

        <?php if (Config\display_sidebar()) : ?>
          <?php if ( $layout ==='sandwitch' || $layout==='sidebar-left' ) : ?>
            <aside id="sidebar-left" class="sidebar ts-sticky-adv-left" role="complementary" data-top="140"><!-- Sticky Child -->
              <?php if(!empty($sidebar['left'])): ?>
                <div class="inner">
                  <?php include Wrapper\sidebar_path('sidebar-left'); ?>
                </div>
              <?php endif; ?>
            </aside><!-- /.sidebar -->
          <?php endif; ?>
        <?php endif; ?>

        <main id="main" class="" role="main">
          <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->

      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
