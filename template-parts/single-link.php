<?php
/**
 * Template part for displaying posts.
 *
 * @package Polmo
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post-head media">
        <div class="entry-date media-left text-center">
            <time datetime="<?php echo get_the_time('Y-m-j'); ?>">
                <?php echo get_the_time('M'); ?> <span> <?php echo get_the_time('d'); ?> </span>
            </time>
        </div><!-- /.entry-date -->
        <div class="media-body">
            <?php the_title( sprintf( '<h2 class="entry-title">', esc_url( get_permalink() ) ), '</h2>' ); ?>

            <?php echo jeweltheme_polmo_post_meta_social();?>

            <?php echo jeweltheme_polmo_post_meta();?>

        </div>
    </div><!-- /.post-head -->

    <div class="post-content">
        <?php $link_text = jeweltheme_meta( '_jeweltheme_polmo_link_text' );
        if( $link_text ) { ?>
            <div class="attachmentlink">
                <?php echo  $link_text; ?>
                <a class="attach-link" href="<?php echo jeweltheme_meta( '_jeweltheme_polmo_link' ); ?>" > - <?php echo jeweltheme_meta( '_jeweltheme_polmo_link' ); ?></a>
            </div><!-- /.link-content -->
        <?php } ?>

        <div class="entry-content">
            <?php the_content(); ?>
            
            <?php
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jeweltheme_memorials' ),
                    'after'  => '</div>',
                ) );
            ?>
        </div><!-- .entry-content -->
        
        <?php 
        $tags_list = get_the_tag_list( '', esc_html__( ', ', 'jeweltheme_polmo' ) );
        if( $tags_list ){ ?>
            <div class="post-tag">
                <ul class="tag-list">
                    <li><?php echo jeweltheme_polmo_entry_footer();?></li>
                </ul><!-- /.tag-list -->
            </div><!-- /.post-tag -->
        <?php } ?>  

    </div><!-- /.post-content -->
</article><!-- /.type-post -->

<?php echo jeweltheme_author_bio(); ?>