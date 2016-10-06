<?php
/*
    Template Name: Full Width Template
*/
?>

<?php
/**
 * This template is used for displaying page content without any sidebars.
 * Choose this option from admin area in edit page screen,
 * under Page Attributes > Template
 */
?>

<!-- the header -->
<?php get_header(); ?>

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

<!-- the footer -->
<?php get_footer(); ?>
