<?php get_header(); ?>
<?php if(have_posts()): while(have_posts()): the_post();?>
<div class="page-container">
    <p class="title"><?php the_title(); ?></p>
    <?php the_content(); ?>
</div>
<?php endwhile; endif; ?>
<?php get_footer("other"); ?>