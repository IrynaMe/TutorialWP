<?php get_header()?>
<br>
<?php get_template_part( 'includes/menu' ); ?>
    <?php get_template_part( 'includes/slider' ); ?>

        <!-- start loop -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>
   

     <!-- end loop -->
<?php endwhile; else: ?>
<p><?php _e('Nessun articolo corrisponde ai criteri di ricerca.'); ?></p>
<?php endif; ?>


<?php get_footer()?>