<?php get_header(); ?>

    <div class="container p-5">
    <h1 class="text-center pb-5">Latest Posts</h1>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-2 mx-2">
        <!-- Cards -->
        <?php
          if (have_posts()) {
              while (have_posts()) {
                  the_post();
                  get_template_part("components/cards/cards");
              }
          }
        ?>
        <!-- !Cards -->
      </div>
    </div>


<?php get_footer(); ?>
