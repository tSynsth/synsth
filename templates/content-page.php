<?php
/*
 * Not in Use instead Use 'content-single.php'
 * content-page.php
 * posttype: page
 * single
 */
//echo 'content-page.php';
?>
<?php the_content(); ?>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
