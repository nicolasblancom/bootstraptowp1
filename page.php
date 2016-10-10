<!-- the header -->
<?php get_header(); ?>

    <div class="container">

        <div class="row row-offcanvas row-offcanvas-right">
            <div class="col-md-9">

                <!-- off canvas content toggle button -->
                <p class="pull-right visible-xs">
                    <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle sidebar</button>
                </p>

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

            <?php get_sidebar(); ?>

        </div>

<!-- the footer -->
<?php get_footer(); ?>
