  <!-- Spinner Start -->
  <!-- <div id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
          <span class="sr-only">Loading...</span>
      </div>
  </div> -->
  <!-- Spinner End -->

  <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
      <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
          <!-- <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>eLEARNING</h2> -->
          <!-- personalizzazione marchio e logo -->
          <h2 class="m-0 text-primary">
              <!-- <i class="fa fa-book me-3"></i> -->
              <!-- prende quanto definito nella persoanlizzazione del tema --->
              <img id="logo" src="<?php echo get_theme_mod('logo_brand_settaggio') ?>"
                  style="height:50px;opacity:0.3;border-radius:50%;height:40px;margin-top: -10px;">
              <!-- prende quanto definito nella persoanlizzazione del tema  -->
              <?php echo get_theme_mod('nome_brand_settaggio') ?>
          </h2>
      </a>
      <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
          <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'container' => false,
                'menu_class' => 'nav-item nav-link',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<div id="%1$s" class="navbar-nav ms-auto p-4 p-lg-0">%3$s</div>',
                'depth' => 3,
                'walker' => new bootstrap_5_wp_nav_menu_walker()
            ));
              ?>
      </div>
      </div>
  </nav>
  </nav>