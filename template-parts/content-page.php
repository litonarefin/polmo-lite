<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Polmo
 */

?>
    <article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="post-content">
            <div class="entry">
                <?php the_content(); ?>
                
                <?php
                    wp_link_pages( array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jeweltheme_memorials' ),
                        'after'  => '</div>',
                    ) );
                ?>
            </div><!-- .entry-content -->

            <footer class="entry-footer">
                <?php jeweltheme_memorials_entry_footer(); ?>
            </footer><!-- .entry-footer -->
        </div>
    </article><!-- #post-## -->


