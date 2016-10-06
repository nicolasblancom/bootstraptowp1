<?php
/**
 * This file gets called by get_sidebar( 'blog' ) function call. It's a sidebar
 * that uses a widget area called 'blog' and should be used for the blog posts
 * listing page.
 */
?>
<div class="col-md-3 sidebar">
    <?php if( ! dynamic_sidebar( 'blog' ) ) : ?>
        <h3 class="title">Sidebar Setup</h3>
        <p>Please add any widgets to this sidebar ('Blog Posts Page Sidebar' widget)</p>
    <?php endif; ?>
</div>
