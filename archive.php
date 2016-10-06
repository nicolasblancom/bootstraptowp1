<?php
/**
 * This template is used as a default fallback for all archive types.
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

            <?php get_sidebar( 'archive' ); ?>

        </div>

<!-- the footer -->
<?php get_footer(); ?>
