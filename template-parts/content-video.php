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
            <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

            <?php echo jeweltheme_polmo_post_meta_social();?>

            <?php echo jeweltheme_polmo_post_meta();?>

        </div>
    </div><!-- /.post-head -->

    <div class="post-content">
        <?php                     
        $video_source = jeweltheme_meta( '_jeweltheme_polmo_video_source' ); 
        $video = jeweltheme_meta( '_jeweltheme_polmo_video' );

        if( $video_source ) { ?>
            <div class="post-thumbnail">
                <?php if($video_source == 1): ?>
                    <?php echo esc_attr( $video ); ?>
                <?php elseif ($video_source == 2): ?>
                    <?php echo '<iframe width="720" height="450" src="http://www.youtube.com/embed/'.$video.'?rel=0&showinfo=0&modestbranding=1&hd=1&autohide=1&color=white" frameborder="0" allowfullscreen></iframe>'; ?>
                <?php elseif ($video_source == 3): ?>
                    <?php echo '<iframe width="720" height="450" src="http://player.vimeo.com/video/'.$video.'?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>'; ?>
                <?php endif; ?>
            </div>
        <?php } ?>   

        <p class="entry-content">
            <?php echo wp_trim_words( get_the_content(), 75, ' '  ); ?>
            <a class="read-more" href="<?php the_permalink();?>"><?php echo esc_attr('Read More...','jeweltheme_polmo');?></a>
        </p><!-- /.entry-content -->

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
