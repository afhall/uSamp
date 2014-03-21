<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package usamp
 */
?>
            
	</div><!-- #content -->

    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="container-fluid site-info">
            <div class="collapse navbar-collapse visible-sm visible-md visible-lg">
                <ul class="nav navbar-nav">
                    <?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => '', 'items_wrap' => '%3$s' ) ); ?>
                </ul>
            </div>
        </div>
    </footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
