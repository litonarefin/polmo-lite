<?php
/**
 * Template part for displaying single Gallery posts.
 *
 * @package Polmo
 */

?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
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

        <div class="post-content">
            <header class="entry-header">
                <?php the_title( sprintf( '<h2 class="entry-title">', esc_url( get_permalink() ) ), '</h2>' ); ?>

                <div class="entry-meta">
                    <?php //jeweltheme_memorials_posted_on(); ?>
                </div><!-- .entry-meta -->
            </header><!-- .entry-header -->

            <div class="entry-content">
                <?php the_content(); ?>
                
                <?php
                    wp_link_pages( array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jeweltheme_memorials' ),
                        'after'  => '</div>',
                    ) );
                ?>
            </div><!-- .entry-content -->

            <footer class="entry-footer">
                <?php //jeweltheme_memorials_entry_footer(); ?>
            </footer><!-- .entry-footer -->
        </div>
    </article><!-- #post-## -->