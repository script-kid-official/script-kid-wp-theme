<div class="col-md-6">
      <div class="block mx-2 row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <h3 class="mb-0 text-center"> <?php the_title(); ?></h3>
          <strong class="d-inline-block m-2 text-primary text-center"><?php the_category(' '); ?></strong>
          <p class="card-text mb-auto"><?php the_excerpt(); ?></p>
          <a  class="btn btn-dark" href="<?php the_permalink(); ?>" class="more-link">Read More</a>
        </div>
      </div>
    </div>