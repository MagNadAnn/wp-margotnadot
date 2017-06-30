<?php

/*
Template Name: Les pages categories
*/

get_header();
get_sidebar();
?>

	<div class="l-page-wrap taxonomy" >

	<?php
		echo '<article class="post__text">
			<section class="post__quicky">
				<h1 class="post__title"><span>';
				single_cat_title();
				echo '</h1></section></article>';
	?>

	<?php get_template_part('loop'); ?>

	</div>

<?php get_footer(); ?>