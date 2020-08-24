<?php get_header(); ?>

	<div class="py-5 mx-5">
		<div  id="post-<?php the_ID(); ?>" class="single-post row row-cols-1 row-cols-sm-1 row-cols-md-1 g-1 mx-1">
			<?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post(); ?>
					<div class="single-post-header text-center">
						<h1 class="mb-0 single-post-header-title"> <?php the_title(); ?></h1>
						<p class="text-primary single-post-header-category"><?php the_category(' '); ?></p>
					</div>

                    <div class="single-post-content">
					<?php
                    the_content(); ?>
                    </div>
                    <?php
                }
            }
            ?>
		</div>
	</div>


<?php get_footer(); ?>
