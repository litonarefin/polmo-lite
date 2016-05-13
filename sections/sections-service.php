<?php 
    $jeweltheme_polmo_service_heading_title = get_theme_mod('jeweltheme_polmo_service_heading_title',__('<span>Polmo</span> Core Services','polmo-lite'));
    $jeweltheme_polmo_service_desc = get_theme_mod('jeweltheme_polmo_service_desc',__('Matter is made up of atoms having dimensions approximately determined to be in the neighbourhood of the one fifty-millionth of an inch in diameter.','polmo-lite'));


    $hide_services = get_theme_mod('hide_services', '1');
    
    if( $hide_services == ''){ ?>

  <!-- Service Section-->

  <section id="services" class="services text-center">
    <div class="section-padding">
      <div class="container">
        <div class="row">
          <div class="section-top wow animated fadeInUp" data-wow-delay=".5s">
            <?php if ( !empty($jeweltheme_polmo_service_heading_title) && !empty($jeweltheme_polmo_service_desc) ){ ?>
              <h2 class="section-title">
                <?php echo  $jeweltheme_polmo_service_heading_title; ?>
              </h2>
              <p class="section-description">
                <?php echo  $jeweltheme_polmo_service_desc; ?>
              </p><!-- /.section-description -->
            <?php } ?>

          </div><!-- /.section-top -->

          <div class="section-details">
            <div class="service-details">

              <?php for($is=1; $is<5; $is++) { 
                if( get_theme_mod('page-column'.$is,false) ) {
                  $queryvar = new wp_query('page_id='.get_theme_mod('page-column'.$is,true));       
                  while( $queryvar->have_posts() ) : $queryvar->the_post(); ?> 

                    <div class="col-md-3 col-sm-6">
                      <div class="item wow animated fadeInRight" data-wow-delay=".35s">
                          <div class="item-icon">
                            <?php if ( has_post_thumbnail() ) {
                              the_post_thumbnail( array(65,65,true));
                              } else { ?>
                                <img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/images/img_404.png" width="65" alt=""/>
                            <?php } ?>
                          </div><!-- /.item-icon -->
                          <div class="item-details">
                            <h4 class="item-title"><?php the_title(); ?></h4><!-- /.item-title -->
                            <p class="item-description">
                              <?php the_excerpt(); ?>
                            </p><!-- /.item-description -->
                          </div><!-- /.item-details -->
                      </div><!-- /.item -->
                    </div>


              <?php endwhile;
              wp_reset_postdata();
              ?>
              <?php } else { 


                    $icons = array( "", "fa-android", "fa-html5", "fa-maxcdn", "fa-umbrella");
                    $title = array( "", "Android Apps Developement", "HTML5 Modern Technology", "Latest Max CDN Service", "Latest Umbrella Server" );
                    $desc  = array( "", 
                                    "Atoms dimensions approximately determined with one fifty-millionth an inch in diameter.",
                                    "Continuity as distinguished from may be considering what would be visible by magnification.",
                                    "Definite amount of matter in visible universe, a number of molecules and atoms in huge number.",
                                    "Phenomena of light and waves of all lengths are found in velocity of 186,000 miles in a second."
                                    );
                ?>
              
                <div class="col-md-3 col-sm-6">
                  <div class="item wow animated fadeInLeft" data-wow-delay=".5s">
                      <div class="item-icon">
                        <i class="fa <?php  echo $icons[$is]; ?>"></i>
                      </div><!-- /.item-icon -->
                      <div class="item-details">
                        <h4 class="item-title"><?php  echo $title[$is]; ?></h4><!-- /.item-title -->
                        <p class="item-description"><?php  echo $desc[$is]; ?></p><!-- /.item-description -->
                      </div><!-- /.item-details -->
                  </div><!-- /.item -->
                </div>
             <?php 
            }
           } // End for loop ?>


            </div><!-- /.service-details -->
          </div><!-- /.section-details -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.section-padding -->
  </section><!-- /#services -->

  <!-- Service Section-->


  <?php } ?>