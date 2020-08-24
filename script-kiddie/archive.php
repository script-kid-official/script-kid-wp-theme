<?php get_header(); ?>

	<div class="py-5 mx-5">
		<div  id="post-<?php the_ID(); ?>" class="single-post row row-cols-1 row-cols-sm-1 row-cols-md-1 g-1 mx-1">
			<?php
            if (have_posts()) {
                the_archive_title('<h1 class="page-title text-center mb-5">', '</h1>');

                while (have_posts()) {
                    the_post();
                    get_template_part("components/cards/cards");
                }
            }
            ?>
		</div>
	</div>


<?php get_footer(); ?>
