<time class="published" style="" datetime="<?php echo get_the_time('c'); ?>"><?php echo
    get_the_date(); ?>&nbsp;|&nbsp;</time>
<p class="byline author vcard" style="padding: 0; margin: 0; display: inline;"><?php echo __('By', 'sage'); ?> <a
        href="<?php echo
        get_author_posts_url
        (get_the_author_meta('ID')); ?>" rel="author" class="fn"><?php echo get_the_author(); ?></a></p>
