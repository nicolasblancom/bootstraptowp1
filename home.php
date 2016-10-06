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

                <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

                    <article class="post">
                        <h2><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p>
                            By <?php the_author(); ?>
                            on <?php the_time( get_option('date_format') ); ?>
                            at <?php the_time( get_option('time_format') ); ?>
                            in <?php the_category( ', ' ); ?>.
                            <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
                        </p>

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
