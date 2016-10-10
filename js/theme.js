/**
 * Customized javascript bootstrap components call
 */

jQuery(document).ready(function ( $ ) {

    /* Off canvas bootstrap content */
    $('[data-toggle="offcanvas"]').click(function () {
        $('.row-offcanvas').toggleClass('active');
    });

});
