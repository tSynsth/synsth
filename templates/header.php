<?php
use Roots\Sage\Titles;
use Roots\Sage\Wrapper;
?>
<header id="banner" role="banner">
  <div class="inner container-fluid ts-sticky-simple" data-top=0 style="" data-fade=true>
    <div id="banner-in">
      <div class="inner">
        <a id="site-logo" class="brand" href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>">
          <?php
          $logo = get_option( 'ts_logo' );
          $logo_x2 = get_option( 'ts_logo_x2' );

          if ( $logo == '' ) {
            $logo = get_template_directory_uri() . '/assets/images/logo_synsth-s.png';
          }
          if ( $logo_x2 == '' ) {
            $logo_x2 = get_template_directory_uri() . '/assets/images/logo_synsth-s.svg';
          }
          ?>
          <img class="default" src="<?php echo $logo; ?>" alt="<?php bloginfo( 'name' ); ?>" />
          <img class="retina" src="<?php echo $logo_x2; ?>" alt="<?php bloginfo('name'); ?>" />
        </a>
        <nav id="menu" role="navigation">
          <?php
            $menu = wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav', 'echo' =>
                false, 'fallback_cb' => '__return_false'));//
            if (!$menu)
              $menu =
                '<div class="alert alert-info skiny-centered">'
                . '<h6>' . __('Menu is empty!', 'root') . '</h6>'
                . __('Create a menu and assign it to "Primary Navigation" on dashboard "Appearance/Menus"',
                    'root') . '</div>';
            echo do_shortcode('
                              [ts_modal id="menu" type="fullscreen"]
                              [ts_modal_button]
                              <button class="btn btn btn-menu var-line"><i class="glyphicon glyphicon-menu-hamburger"></i></button>
                              [/ts_modal_button]
                              [ts_modal_header]'
                . '<h1 style="height:100px; margin-top: 4.24rem;">' . '<img class="default aligncenter" src="' . $logo . '" />' . '</h1>'
                . '[/ts_modal_header]
                              [ts_modal_content]'
                . $menu
                . '[/ts_modal_content]
                              [/ts_modal]');
          ?>
        </nav>
      </div>
      <div class="in">
        <h1 id="page-header">
          <?= Titles\title(); ?>
        </h1>
        <?php include Wrapper\sidebar_path('sidebar-top');//include roots_sidebar_path('sidebar-top'); ?>
      </div>
    </div>
  </div>
</header>
