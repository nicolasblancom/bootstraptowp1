<?php
/**
 * This template is used for single blog posts.
 */
?>

<!-- the header -->
<?php get_header(); ?>

    <div class="container">

        <div class="row">
            <div class="col-md-9">
                <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

                    <div class="page-header">
                        <h1><?php the_title(); ?></h1>

                        <?php if( has_post_thumbnail() ) : ?>
                            <!-- Featured image -->
                            <?php

                            // Fetch image data
                            $thumbnail_id = get_post_thumbnail_id(); // get the featured image id
                            $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true ); // get the featured image src url
                            $thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true ); // get meta data

                            ?>

                            <img src="<?php echo $thumbnail_url[0] ?>" alt="<?php echo $thumbnail_meta; ?>" class="img-responsive featured-img" />

                        <?php endif; ?>

                        <p><em>
                            By <?php the_author(); ?>
                            on <?php the_time( get_option('date_format') ); ?>
                            at <?php the_time( get_option('time_format') ); ?>
                            in <?php the_category( ', ' ); ?>.
                            <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
                        </em></p>
                    </div>

                <?php the_content(); ?>

                <hr/>

                <?php comments_template( '' ); ?>

                <?php endwhile; else: ?>
                    <div class="page-header">
                        <h1>Oops!</h1>
                    </div>

                    <p>No content for these page!</p>
                <?php endif; ?>
            </div>

            <?php get_sidebar( 'blog' ); ?>

        </div>

<!-- the footer -->
<?php get_footer(); ?>
