<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Polmo
 */
?>

<article <?php post_class();?>>

    <?php if ( has_post_thumbnail() ) { ?>
        <div class="post-thumbnail">
            <?php the_post_thumbnail('blog-thumb'); ?>
        </div>
    <?php } ?>

    <div class="post-content">
        
        <a href="<?php the_permalink();?>">
            <?php the_title( sprintf( '<h2 class="post-title">', esc_url( get_permalink() ) ), '</h2>' ); ?>
        </a>

        <?php echo jeweltheme_ateam_entry_post_meta();?>


        <div class="entry-content">
            <p>
                <?php echo wp_trim_words( get_the_content(), 55, ' '  ); ?>
            </p>
            
            <?php
            wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jwtheme' ),
                'after'  => '</div>',
                ) );
                ?>
        </div><!-- /.entry -->

        <?php // echo jwtheme_post_meta_social();?>

    </div><!-- /.post-content --> 
</article><!-- /.post -->

<?php // echo jwtheme_author_bio();?>

<?php
    // If comments are open or we have at least one comment, load up the comment template
    if ( comments_open() || '0' != get_comments_number() ) :
        comments_template();
    endif;