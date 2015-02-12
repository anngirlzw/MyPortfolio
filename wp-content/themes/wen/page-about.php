<?php
/*
 Template Name: About
*/
?>

<section id="wz_about" style="margin-top: 1000px">

	<?php										

		$intro = get_field('self_intro');

	?>

	<p><?php echo $intro; ?></p>

</section>
