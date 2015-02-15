<?php
/*
 Template Name: Home
*/
?>

<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="cf">

		<div id="main" class="m-all cf" role="main" >

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<div class="home-container" style="position: absolute; width: 100%; height: 100%">

				<section id="wz_home" class="cf">

					<div class="home_content">
						<h1>Ariel Fan</h1>
						<p>Front end developer</p>

					</div>

					<?php

						the_content();

					?>

				</section>

				</div>

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