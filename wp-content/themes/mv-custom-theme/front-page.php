<?php get_header(); ?>


<header class="bg-primary py-5 mb-5">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-lg-12">
                <h1 class="display-4 text-white mt-5 mb-2"><?php echo get_field( 'main_title' ); ?></h1>
                <p class="lead mb-5 text-white-50"><?php echo get_field( 'main_description' ); ?></p>
            </div>
        </div>
    </div>
</header>

<!-- Page Content -->
<div class="container">
    <div class="row">

        <?php 
			
            // the query
            $the_query = new WP_Query( array(
               'posts_per_page' => 1,
            )); 
         ?>


        <?php if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

        <div class="col-md-8 mb-5 get-only-first-p">
            <h2><?php the_title() ?></h2>
            <hr>
            <?php the_content(); ?>
            <a class="btn btn-primary btn-lg" href="<?php get_permalink() ?>">Read More &raquo;</a>
        </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>

        <?php else : ?>

        <?php endif; ?>

        <div class="col-md-4 mb-5">
            <h2>Contact Us</h2>
            <hr>
            <address>
                <strong>Adress:</strong>
                <br><?php echo get_field( 'adress' ); ?>
                <br>
            </address>
            <address>
                <abbr title="Phone">Phone:</abbr>
                <?php echo get_field( 'phone' ); ?>
                <br>
                <abbr title="Email">Email:</abbr>
                <a href="mailto:<?php echo get_field( 'email' ); ?>"><?php echo get_field( 'email' ); ?></a>
            </address>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">

    <?php 

$pro_last_query = new WP_Query(array('post_type'=>'products', 'post_status'=>'publish', 'posts_per_page'=> 3)); ?>

        <?php if ( $pro_last_query->have_posts() ) : ?>




        <?php while ( $pro_last_query->have_posts() ) : $pro_last_query->the_post(); ?>
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url($post_id, 'custom-size'); ?>" alt="">
                <div class="card-body">
                    <h4 class="card-title"><?php the_title() ?></h4>
                    <p class="card-text"><?php the_content(); ?></p>
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
    <!-- /.row -->

</div>
<!-- /.container -->

<?php get_footer(); ?>