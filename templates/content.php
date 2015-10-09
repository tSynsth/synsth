<?php
/*
 * content.php
 * loop
 */
//echo 'content.php';
?>
<article <?php post_class(); ?> style="margin-bottom: 20px; overflow: hidden;">

  <?php if(has_post_thumbnail()): ?>
    <div class="entry-media col-sm-3" style="padding: 0;"><?php the_post_thumbnail();?></div>
  <?php endif; ?>
  <div class="entry-data <?php echo (has_post_thumbnail())? 'col-sm-9': ''; ?>">
    <header>
      <h2 class="entry-title">
        <a href="<?php the_permalink(); ?>"><?php the_title();
          ?></a>
      </h2>
      <div class="entry-meta">
        <?php get_template_part('templates/entry-meta'); ?>
      </div>
    </header>
    <div class="entry-summary" style="clear: both; margin: 10px 0;">
      <?php the_excerpt(); ?>
    </div>
  </div>

</article>
