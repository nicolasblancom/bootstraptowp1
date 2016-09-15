<!-- the header -->
<?php get_header(); ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile;endif; ?>
        </div>
    </div>

    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-4">
                <?php if( ! dynamic_sidebar( 'front-left' ) ): ?>
                    <p>Please configure this widget in the admin area under Appearence > Widgets > Front Page Left</p>
                <?php endif; ?>
            </div>
            <div class="col-md-4">
                <?php if( ! dynamic_sidebar( 'front-center' ) ): ?>
                    <p>Please configure this widget in the admin area under Appearence > Widgets > Front Page Center</p>
                <?php endif; ?>
            </div>
            <div class="col-md-4">
                <?php if( ! dynamic_sidebar( 'front-right' ) ): ?>
                    <p>Please configure this widget in the admin area under Appearence > Widgets > Front Page Right</p>
                <?php endif; ?>
            </div>
        </div>

<!-- the footer -->
<?php get_footer(); ?>
