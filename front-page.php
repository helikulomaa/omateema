<?php get_header(); ?>

<header id="site-header">
        <h1><?php bloginfo('name'); ?></h1>
</header>

<div id="content">
    <main>

    <div id="newest">

<?php

$the_query = new wp_Query(array(
    'category_name' => 'reseptit',
    'orderby' => 'date',
    'order' => 'desc',
    'posts_per_page' => '4'
));

if ($the_query->have_posts()) :

    while($the_query->have_posts()) : $the_query->the_post();?>
    <div class="post">    
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p class="date"><?php echo get_the_date(); ?></p> 
    <?php if(has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('thumbnail'); ?>
        <?php endif; ?>
    <?php the_excerpt(); ?>
    </div>

<?php
    endwhile;
    wp_reset_postdata();
else: ?>
<p>Ei kirjoituksia.</p>
<?php
endif;?>
</div>
</main>

<?php 
get_footer(); 
?>

