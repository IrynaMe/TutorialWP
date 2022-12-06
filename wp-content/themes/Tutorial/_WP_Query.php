  <!-- inizio loop: WP_Query -->
  <?php
            // La Query
$the_query = new WP_Query( 'category_name=servizi' );

    // Il Loop
    while ($the_query->have_posts()) :
        $the_query->the_post();
        ?>


                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                        <!-- per fa-graduation-cap usero' un campo personalizzato  dell'articolo: get_post_meta -->
                        <i  class="fa fa-3x <?php echo get_post_meta(get_the_ID(),'icona',true);?>  text-primary mb-4" style="font-size:30px; !important"></i>
                        
                            <!-- sostituisco Skilled Instructors con una istruzione che chiama il titolo dell'articolo: the_title -->
                            <h5 class="mb-3"><a href="<?php the_permalink() ?>" rel="bookmark" title="Link permanente a <?php the_title_attribute(); ?>" style="color:black;"><?php the_title(); ?></a></h5>
                              <!-- sostituisco contenuto con una istruzione che lo richiama: the_content -->
                                  <p>
                                    <!-- <?php echo get_post_meta(get_the_id(), 'servizi', true) ?> -->
                                     <?php echo the_excerpt(); ?>
                                </p>
                                   
                              <!-- <div class="entry "> -->
                                
                              <!-- </div> -->
                            </div>
                    </div>
                </div>
                <?php
    endwhile;

    // Ripristina Query & Post Data originali
    wp_reset_query();
    wp_reset_postdata();

    ?>
                <!-- fine loop Wp_Query -->