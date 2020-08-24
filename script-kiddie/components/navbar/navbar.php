<div class="navbar d-flex flex-column flex-md-row align-items-center p-3 px-md-4 shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal"><?php bloginfo('name'); ?></h5>
  <nav class="my-2 my-md-0 mr-md-3">
  <?php
    if (has_nav_menu('primary')) {
        wp_nav_menu([
            'theme_location' => 'primary',
            'container' => false,
            'fallback_cb' => false,
            'depth' => 1,
        ]);
    }
  ?>
  </nav> 
</div>