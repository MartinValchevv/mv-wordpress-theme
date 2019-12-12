<?php /* Template Name: Product-template */ ?>

<?php get_header(); ?>
<div class="container pt-5 pb-5">
    <div class="row">

        <?php 

$pro_all_query = new WP_Query(array('post_type'=>'products', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>

        <?php if ( $pro_all_query->have_posts() ) : ?>




        <?php while ( $pro_all_query->have_posts() ) : $pro_all_query->the_post(); ?>
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url($post_id, 'custom-size'); ?>" alt="">
                <div class="card-body">
                    <h4 class="card-title"><?php the_title() ?></h4>
                    <p class="card-text"> <?php the_content(); ?></p>
                </div>
                <div class="card-footer">
                    <a href="<?php get_permalink() ?>" class="btn btn-primary">Find Out More!</a>
                </div>
            </div>
        </div>
        <?php endwhile; ?>



        <?php wp_reset_postdata(); ?>

        <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>