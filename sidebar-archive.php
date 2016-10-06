<?php
/**
 * This file gets called by get_sidebar( 'archive' ) function call. It's a sidebar
 * that uses a widget area called 'archive' and should be used for the archive
 * listing page.
 * It gets called only if you assigned widgets to it. If not, widgets added to
 * the 'Blog Posts Listing Page' widget area will be shown as default.
 */
?>
<div class="col-md-3 sidebar">
<?php if( is_active_sidebar( 'archive' )) : ?>

    <?php if( ! dynamic_sidebar( 'archive' ) ) : ?>
        <h3 class="title">Sidebar Setup</h3>
        <p>Please add any widgets to this sidebar ('Archive Listing Page' widget)</p>
    <?php endif; ?>

<?php else : ?>

    <?php if( ! dynamic_sidebar( 'blog' ) ) : ?>
        <h3 class="title">Sidebar Setup</h3>
        <p>Please add any widgets to this sidebar ('Blog Posts Page Sidebar' widget)</p>
    <?php endif; ?>

<?php endif; ?>

</div>
