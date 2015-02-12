<?php
/*
 Template Name: Home
*/
?>

<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="cf">

		<div id="main" class="m-all cf" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<section id="wz_home" class="cf">

					<?php

						the_content();

					?>

				</section>

		<?php endwhile; endif; 

		// ABOUT PAGE
		$the_query = new WP_Query('page_id=6');
		while ( $the_query->have_posts() ) :
			$the_query->the_post();
			include('page-about.php'); 
		endwhile;
		wp_reset_postdata();

		// WORK
		$the_query = new WP_Query('page_id=15');
		while ( $the_query->have_posts() ) :
			$the_query->the_post();
			include('page-work.php'); 
		endwhile;
		wp_reset_postdata();		


		// CONTACT
		$the_query = new WP_Query('page_id=18');
		while ( $the_query->have_posts() ) :
			$the_query->the_post();
			include('page-contact.php'); 
		endwhile;
		wp_reset_postdata();

		?>

		</div>

	</div>

</div>

<?php get_footer(); ?>