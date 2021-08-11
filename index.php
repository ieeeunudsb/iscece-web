<?php get_header(); ?>

<div class="container mx-auto">
    <?php
    $path = get_page_uri();
    if ($path == "") get_template_part('template-parts/content', get_post_format());
    else get_template_part("template-parts/{$path}", get_post_format());
    ?>
</div>

<?php get_footer(); ?>


