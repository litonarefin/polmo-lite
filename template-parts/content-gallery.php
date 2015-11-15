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
        <div class="post-thumbnail">
                
            <?php $slides = rwmb_meta('_jeweltheme_polmo_gallery_images','type=image_advanced'); 
                $count = count($slides);
                if($count > 0){ ?>
                    <div id="blog-gallery" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <?php
                            $slide_indicator = 0;
                            ?>
                            <?php foreach( $slides as $slide_ind ): ?>
                                <li data-target="#blog-gallery" data-slide-to="<?php echo  $slide_indicator; ?>" class="<?php if($slide_indicator == 0){ echo 'active'; }; ?>"></li>
                                <?php $slide_indicator++ ?>
                            <?php endforeach; ?>
                        </ol>

                        <div class="carousel-inner">
                            <?php $slide_no = 0; ?>
                            <?php foreach( $slides as $slide ): ?>
                                <div class="item <?php if($slide_no == 0){ echo 'active'; }; ?>">
                                    <?php $images = wp_get_attachment_image_src( $slide['ID'], 'blog-thumb' ); ?>
                                    <img src="<?php echo  esc_url( $images[0] ); ?>" alt="">
                                </div>
                                <?php $slide_no++ ?>
                            <?php endforeach; ?>
                        </div>

                        <a class="left carousel-control" href="#blog-gallery" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                        <a class="right carousel-control" href="#blog-gallery" data-slide="next"><i class="fa fa-angle-right"></i></a>
                    </div>
            <?php } ?>
        </div><!-- /.post-thumbnail -->
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
