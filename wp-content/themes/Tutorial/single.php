<?php get_header()?>
<br>
 <!-- Navbar Start -->
 <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>eLEARNING</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="courses.html" class="nav-item nav-link">Courses</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Join Now<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->
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