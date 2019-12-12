<?php get_header(); ?>
<div class="container pt-5 pb-5">
    <p>Index.php</p> // Just to know where is loaded

    1231231
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <div class="content"><?php the_content(); ?></div>
    <?php endwhile;
    endif; ?>
</div>
<?php get_footer(); ?>