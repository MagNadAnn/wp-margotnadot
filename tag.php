<?php

/*
Template Name: Les pages tag
*/

	// y a-t-il une page liée ?

get_header();
get_sidebar();
?>

	<div class="l-page-wrap taxonomy" >
	<?php

		// récupérer la page liéee si elle existe
		$queried_object = get_queried_object(); 
		$taxonomy = $queried_object->taxonomy;
		$term_id = $queried_object->term_id;

		if( get_field('page_liee', $queried_object) ) {

			$page_liee_id = url_to_postid(get_field('page_liee', $queried_object));
			$page_liee_object = get_post( $page_liee_id );

			echo '<article class="post__text">
				<section class="post__content"><div>
					<h1 class="post__title"><span>' . get_the_title($page_liee_id) . '</h1>' . $page_liee_object->post_content . '</section></article>';

		// sinon, afficher le nom du tag
		} else {
			echo '<article class="post__text">
				<section class="post__quicky">
					<h1 class="post__title"><span>';
					single_tag_title();
					echo '</h1></section></article>';
		}
	?>

	<?php get_template_part('loop'); ?>

	</div>

<?php get_footer(); ?>