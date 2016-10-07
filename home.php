<?php
/**
 * This template is used as a default for Posts Listing Page.
 * Be sure to select what page you want to use as Post Listing Page in Admin Area
 * if you are displaying in 'front page shows' option, a ' Static Page'
 */
?>

<!-- the header -->
<?php get_header(); ?>

    <div class="container">

        <div class="row">
            <div class="col-md-9">

                <div class="page-header">
                    <h1><?php wp_title( '' ); ?></h1>
                </div>

                <?php

                // create new WP_Query for slider
                $args = array(
                    'post_type' => 'post',
                    'category_name' => 'featured'
                );
                $the_query = new WP_Query( $args );

                ?>

                <!-- bootstrap slider -->
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <?php if( $the_query->have_posts() ) : while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            <li
                                data-target="#carousel-example-generic"
                                data-slide-to="<?php echo $the_query->current_post; ?>"
                                class="<?php if( $the_query->current_post == 0 ) : ?>active<?php endif; ?>">
                            </li>
                        <?php endwhile; endif; ?>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <?php if( $the_query->have_posts() ) : while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            <div class="item<?php if( $the_query->current_post == 0 ) : ?> active<?php endif; ?>">

                                <?php

                                // Fetch image data
                                $thumbnail_id = get_post_thumbnail_id(); // get the featured image id
                                $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true ); // get the featured image src url
                                $thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true ); // get meta data

                                ?>

                                <a href="<?php the_permalink(); ?>"><img src="<?php echo $thumbnail_url[0] ?>" alt="<?php echo $thumbnail_meta; ?>" class="img-responsive featured-img" /></a>
                                <div class="carousel-caption"><?php the_title(); ?></div>
                            </div>
                        <?php endwhile; endif; ?>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

                    <article class="post">
                        <h2><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><em>
                            By <?php the_author(); ?>
                            on <?php the_time( get_option('date_format') ); ?>
                            at <?php the_time( get_option('time_format') ); ?>
                            in <?php the_category( ', ' ); ?>.
                            <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
                        </em></p>

                        <?php the_excerpt(); ?>
                    </article>

                <?php endwhile; else: ?>
                    <div class="page-header">
                        <h1>Oops!</h1>
                    </div>

                    <p>No content for these blog post!</p>
                <?php endif; ?>
            </div>

            <?php get_sidebar( 'blog' ); ?>

        </div>

<!-- the footer -->
<?php get_footer(); ?>
