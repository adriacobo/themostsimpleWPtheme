<?php
get_header();
?>
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
        the_title();
				the_content();
			endwhile;
		endif;
		?>
		</main>

<?php
get_footer();
