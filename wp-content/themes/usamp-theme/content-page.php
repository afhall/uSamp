<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package usamp
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header><!-- .entry-header -->
            </div>
        </div>
    </div>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'usamp' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'usamp' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
