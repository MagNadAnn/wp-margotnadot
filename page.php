<?php get_header();
get_sidebar();
?>

<div class="l-page-wrap">

		<?php
			$attachments = get_children(
				array(
					'post_parent' => get_the_ID(),
					'post_type' => 'attachment',
					'post_mime_type' => 'image',
					'orderby' => 'menu_order'
					)
				);

		// var_dump($attachments);
		foreach ($attachments as $image) {
			$attachment_ID = $image->ID;
			$attachment_alt = $image->post_title;
			$attachment_adresse = wp_get_attachment_url($attachment_ID);
		} ?>
		<img class="bandeau" src="<?php echo $attachment_adresse; ?>" title="<?php echo $attachment_alt; ?>" />

		<article class="post__texte">
			<h1 class="post__title"><span><?php the_title(); ?></span></h1>

			<section>
				<?php the_content(); ?>
			</section>
		</article>

	</div>

<?php get_footer(); ?>