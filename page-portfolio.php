<?php
/*
    Template Name: Portfolio Index Page Template
*/
?>

<?php
/**
 * This template is used for displaying the 'portfolio' custom post type index page.
 * Choose this option from admin area in edit page screen,
 * under Page Attributes > Template
 */
?>

<!-- the header -->
<?php get_header(); ?>

    <!-- main content of page -->
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

                    <div class="page-header">
                        <h1><?php the_title(); ?></h1>
                    </div>

                <?php the_content(); ?>

                <?php endwhile; else: ?>
                    <div class="page-header">
                        <h1>Oops!</h1>
                    </div>

                    <p>No content for these page!</p>
                <?php endif; ?>
            </div>

        </div>

        <?php

        /* Create a new WP_Query object that contains the custom post
        type 'portfolio' information */
        // arguments for the WP_Query object
        $args = array(
            'post_type' => 'portfolio' // custom post type
        );

        $the_query = new WP_Query( $args );

        ?>

        <!-- listing of portfolio pieces -->
        <div class="row">
            <?php if( $the_query->have_posts() ) : while( $the_query->have_posts() ) : $the_query->the_post()?>

                <?php $portfolio_cols = 4; ?>
                <div class="col-sm-<?php echo $portfolio_cols; ?> portfolio-piece">

                    <?php

                    $thumbnail_id = get_post_thumbnail_id(); // get the featured image id
                    $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true ); // get the featured image src url

                    ?>
                    <p><a href="<?php the_permalink(); ?>"><img src="<?php echo $thumbnail_url[0] ?>" alt="<?php the_title(); ?>" class="img-responsive featured-img" /></a></p>

                    <h4 class="text-center"><a href="<?php echo the_permalink(); ?>"><?php echo the_title() ?></a></h4>
                </div>

                <?php

                // close actual .row div, and open another one
                $portfolio_count = $the_query->current_post + 1; // current post number count inside the query loop
                $portfolio_cols_num = 12 / $portfolio_cols; // number of columns being displayed by bootstrap framework

                if( ( $portfolio_count % $portfolio_cols_num ) == 0 ){
                    echo '</div><div class="row">';
                }

                ?>

            <?php endwhile; endif; ?>
        </div>

<!-- the footer -->
<?php get_footer(); ?>
