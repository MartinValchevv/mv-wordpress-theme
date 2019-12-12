<?php /* Template Name: Calculator */ ?>

<?php get_header(); ?>
<div class="container pt-5 pb-5">

<!-- <?php echo do_shortcode('[salary-calculator-plugin]'); ?> -->

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>