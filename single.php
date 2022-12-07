<?php get_header(); ?>

<div id="content">
    <main>

<?php
if (have_posts()) :

    while(have_posts()) : the_post();?>
    <article>
    <h2><?php the_title(); ?></a></h2>
    <p class="date-category"><?php echo get_the_date(); ?> | <?php echo get_the_category_list(', '); ?></p> 
    <?php the_content();?>
    </article>

<?php
    endwhile;
endif;?>

</main>
</div> 

<?php get_footer(); ?>