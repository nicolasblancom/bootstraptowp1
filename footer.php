        <hr>

        <footer>
            <p>&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?></p>
        </footer>
    </div> <!-- /container -->

    <!-- contact form modal window -->
    <div class="modal fade" id="contactForm" tabindex="-1" role="dialog" aria-labelledby="contactForm">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="contacFormTitle">Contact Me</h4>
                </div>
                <div class="modal-body">
                    <?php
                    if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); }
                    ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <?php

    // wp_footer action hook
    wp_footer();

    ?>

</body>
</html>
