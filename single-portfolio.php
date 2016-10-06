<?php
/**
 * This template is used for displaying page content for the custom post type 'Portfolio'.
 * It follows naming conventions, so the hierarchy will automatically do the work if
 * the post type is 'portfolio'
 */
?>

<!-- the header -->
<?php get_header(); ?>

    <div class="container">

        <!-- title and pagination -->
        <div class="page-header">
            <div class="row">

                <div class="col-sm-8">
                    <h2>Portfolio</h2>
                </div>

                <div class="col-xs-12 col-sm-4 prev-next h4 text-center">
                    <?php previous_post_link( '%link', '<span class="glyphicon glyphicon-menu-left"></span>Prev' ); ?>
                    <a href="<?php bloginfo('url'); ?>/?p=65" class="glyphicon glyphicon-th"></a>
                    <?php next_post_link( '%link', 'Next <span class="glyphicon glyphicon-menu-right"></span>' ); ?>
                </div>

            </div>
        </div>

        <div class="row">

            <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

                <!-- featured image -->
                <div class="col-sm-8 portfolio-piece">
                    <?php

                    $thumbnail_id = get_post_thumbnail_id(); // get the featured image id
                    $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true ); // get the featured image src url

                    ?>
                    <p><a href="<?php the_permalink(); ?>"><img src="<?php echo $thumbnail_url[0] ?>" alt="<?php the_title(); ?>" class="img-responsive featured-img" /></a></p>

                </div>

                <!-- metadata and content -->
                <div class="col-sm-4">
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                    <div class="text-right">
                        <hr/>
                        <a href="<?php the_field('link'); ?>" rel="nofollow" class="btn btn-default btn-md"><span>View final piece</span></a>
                    </div>
                </div>

            <?php endwhile; else: ?>
                <div class="page-header">
                    <h1>Oops!</h1>
                </div>

                <p>No content for these page!</p>
            <?php endif; ?>

        </div>

<!-- the footer -->
<?php get_footer(); ?>
