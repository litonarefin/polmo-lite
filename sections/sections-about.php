<?php

$jeweltheme_polmo_about_us_title = get_theme_mod('jeweltheme_polmo_about_us_title', __('<span>We</span> are Polmo Limited Creative Web Agency','polmo-lite'));
$jeweltheme_polmo_about_us_desc = get_theme_mod('jeweltheme_polmo_about_us_desc', __('There is so considerable a body of knowledge bearing upon the similarities and dissimilarities of these two entities that it will be well to compare them. After such comparison one will be better able to judge of the propriety of assuming them to be subject to identical laws','polmo-lite'));

// Work With Us
$jeweltheme_polmo_about_us_work_with_us_image = get_theme_mod('jeweltheme_polmo_about_us_work_with_us_image', get_template_directory_uri() . '/images/tab.jpg');
$jeweltheme_polmo_about_us_work_with_us_title = get_theme_mod('jeweltheme_polmo_about_us_work_with_us_title', __('<span>Why</span> Work With Us','polmo-lite'));
$jeweltheme_polmo_about_us_work_with_us_desc = get_theme_mod('jeweltheme_polmo_about_us_work_with_us_desc', __('One part of the ether is precisely like any other part everywhere and always, and there are no such distinctions in it as correspond with the elemental forms of matter.           
              There is an ultimate particle of each one of the elements which is practically absolute and known as an atom. The atom retains its identity through all combinations and processes. It may be here or there, move fast or slow, but its atomic form persists              <br> <br>
              One might infer already that if the ether were structureless, physical laws operative upon such material substances as atoms could not be applicable to it, and so indeed all the evidence we have shows that gravitation is not one of its properties.','polmo-lite'));


?>


<?php 

  $hide_aboutus = get_theme_mod('hide_aboutus', '1');
  
  if( $hide_aboutus == ''){ ?> 

<section id="about" class="about">

  <?php if( get_theme_mod('aboutus-page1',false) ) { ?>
    <div class="about-top">
      <div class="section-padding">
        <div class="container">
          <div class="row">

            <div class="col-md-12">
              <div class="know-about-us wow animated fadeInLeft" data-wow-delay=".5s">
                <?php 
                  $aboutusquery1 = new wp_query('page_id='.get_theme_mod('aboutus-page1',true)); 
                  if( $aboutusquery1->have_posts() ) {   while( $aboutusquery1->have_posts() ) { $aboutusquery1->the_post(); ?>
                  <h2 class="section-title">
                    <?php the_title(); ?>
                  </h2><!-- /.section-title -->
                  <p class="description">
                    <?php the_excerpt(); ?>
                  </p>
                  <div class="btn-container">
                    <a href="<?php the_permalink(); ?>" class="btn read-more">
                      <?php echo esc_html__('Learn More','polmo-lite'); ?>
                    </a>
                  </div><!-- /.btn-container -->
                  <?php } } wp_reset_postdata(); ?>
              </div><!-- /.know-about-us -->
            </div>

            
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.section-padding -->
    </div><!-- /.about-top -->
  <?php } ?>
  
<?php if( get_theme_mod('aboutus-page2',false) ) { ?>
    <div class="about-bottom">
      <div class="section-padding">
        <?php 
        $aboutusquery2 = new wp_query('page_id='.get_theme_mod('aboutus-page2',true)); 
        if( $aboutusquery2->have_posts() ) {   while( $aboutusquery2->have_posts() ) { $aboutusquery2->the_post(); 
          $aboutus_bg_image2 = wp_get_attachment_url( get_post_thumbnail_id($aboutusquery2->ID, 'full'));
          ?>
          <div class="col-sm-6">
            <div class="tab-image wow animated fadeInLeft" data-wow-delay=".5s">
              <?php if( !empty($aboutus_bg_image2) ){ ?>
                <img src="<?php echo esc_url( $aboutus_bg_image2 ); ?>" alt="<?php the_title();?>">
              <?php } else {?>
                <img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/images/slider/default.jpg" title="<?php the_title(); ?>" />
              <?php } ?>
            </div><!-- /.tab-image -->
          </div>
          <div class="col-sm-6">
            <div class="about-work wow animated fadeInRight" data-wow-delay=".5s">
              <h2 class="section-title">
                <?php the_title(); ?>
              </h2><!-- /.section-title -->
              <p class="description">
                <?php the_content(); ?>
              </p><!-- /.description -->
            </div><!-- /.about-work -->
          </div>
        <?php } } wp_reset_postdata();?>

      </div><!-- /.section-padding -->
    </div><!-- /.about-bottom -->
<?php } ?>

  </section><!-- /#about -->


<?php } else { ?>

  <section id="about" class="about">
    <div class="about-top">
      <div class="section-padding">
        <div class="container">
          <div class="row">

            <div class="col-md-12">
              <div class="know-about-us wow animated fadeInLeft" data-wow-delay=".5s">
                <?php if ( !empty($jeweltheme_polmo_about_us_title) && !empty($jeweltheme_polmo_about_us_desc) ){ ?>
                  <h2 class="section-title">
                    <?php echo  $jeweltheme_polmo_about_us_title; ?>
                  </h2><!-- /.section-title -->
                  <p class="description">
                    <?php echo  $jeweltheme_polmo_about_us_desc; ?>
                  </p><!-- /.description -->
                  <div class="btn-container">
                    <a href="#" class="btn read-more">
                      <?php echo esc_html__('Learn More','polmo-lite'); ?>
                    </a>
                  </div><!-- /.btn-container -->
                <?php } ?>
              </div><!-- /.know-about-us -->
            </div>

            
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.section-padding -->
    </div><!-- /.about-top -->

  

    <div class="about-bottom">
      <div class="section-padding">
        <div class="col-sm-6">
          <div class="tab-image wow animated fadeInLeft" data-wow-delay=".5s">
            <img src="<?php echo esc_url( $jeweltheme_polmo_about_us_work_with_us_image ); ?>" alt="Tab Image">
          </div><!-- /.tab-image -->
        </div>
        <div class="col-sm-6">
          <div class="about-work wow animated fadeInRight" data-wow-delay=".5s">
            <h2 class="section-title">
              <?php echo  $jeweltheme_polmo_about_us_work_with_us_title; ?>
            </h2><!-- /.section-title -->
            <p class="description">
              <?php echo  $jeweltheme_polmo_about_us_work_with_us_desc; ?>
            </p><!-- /.description -->
          </div><!-- /.about-work -->
        </div>
      </div><!-- /.section-padding -->
    </div><!-- /.about-bottom -->

  </section><!-- /#about -->


<?php 
  }
?>