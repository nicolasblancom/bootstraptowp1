<?php
/**
 * This file gets called by get_sidebar() function. It's a sidebar that uses a
 * widget area called 'page'
 */
?>
<div class="col-md-3 sidebar sidebar-offcanvas">
    <?php if( ! dynamic_sidebar( 'page' ) ) : ?>
        <h3 class="title">Sidebar Setup</h3>
        <p>Please add any widgets to this sidebar ('Page Sidebar' widget)</p>
    <?php endif; ?>
</div>
