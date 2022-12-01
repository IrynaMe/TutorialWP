<?php get_header()?>
<br>
<?php get_template_part( 'includes/menu' ); ?>
 
    <br>
    <br>

<div class="container">
    <div class="row">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- put tags the title, the content, icona according to layout that i want -->
        <div class="col-md-3">
            <i class="fa fa-3x <?php echo get_post_meta(get_the_ID(),'icona',true);?>  text-primary mb-4" style="font-size:120px;"></i>
        </div>
        <div class="col-md-9">
            <h5 class="mb-3"><a href="<?php the_permalink() ?>" rel="bookmark" title="Link permanente a <?php the_title_attribute(); ?>" style="color:black;"><?php the_title(); ?></a></h5>

            <p><?php echo get_post_meta(get_the_id(), 'servizi', true) ?> </p>
            <div class="entry">
                <?php the_content(); ?>
    </div>

</div>

<?php endwhile; else: ?>
<p><?php _e('Nessun articolo corrisponde ai criteri di ricerca.'); ?></p>
<?php endif; ?>
    </div>
</div>

<?php get_footer()?>