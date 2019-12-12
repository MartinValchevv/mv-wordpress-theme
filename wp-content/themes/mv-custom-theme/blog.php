<?php /* Template Name: Blog */ ?>

<?php get_header(); ?>
<div class="container pt-5 pb-5">
<?php 

$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
 
<?php if ( $wpb_all_query->have_posts() ) : ?>
 

 
    
    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
        <div class="row">
        <div class="col-md-12 mb-5">
            <h2><?php the_title(); ?></h2>
            <hr>
            <?php the_content(); ?>
            <a class="btn btn-primary btn-lg" href="<?php the_permalink(); ?>">Read more &raquo;</a>
        </div>
    </div>
    <?php endwhile; ?>
    
 
 
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</div>
<?php get_footer(); ?>


