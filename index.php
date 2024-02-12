<?php get_header(); ?>





<div id="content" >
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
            
            <?php the_content(); ?>
        </article>
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
