
<?php if (have_posts()) : ?>
	<!-- Si j'ai des des posts, j'affiche cette partie -->

	<?php while (have_posts()) : the_post();
		// Pour CHAQUE Post, j'affiche ça 

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
				$attachment_adresse = wp_get_attachment_url($attachment_ID); ?>
			<?php } ?>
			<div class='thumb'>
				<a  class="thumb__link vignette-container" href="<?php the_permalink(); ?>" alt="visiter l'article <?php the_title(); ?>">
					<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); }  ?>
					<span class="btn_more">...</span>
				</a>
				<div class="thumb__meta">
					<svg class="brush-background">
            <use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/sprite_margotnadot.svg#320-brush-top"></use>
          </svg>
					<h2 class="thumb__title"><a href="<?php the_permalink(); ?>" alt="visiter l'article <?php the_title(); ?>" class="post_title"><?php the_title(); ?></a></h2>
					<?php
						$tag_list = get_the_tags();
						foreach ($tag_list as $tagname) {
							$the_tag_name = $tagname->name;
							echo ' <span class="thumb__tag tag">'.$the_tag_name.'</span>';
						}
					?>
				</div>
			</div>

	<?php endwhile; ?>

<?php else : 
	// Si il n'y a pas de Post, j'affiche cette partie
	echo('Milles excuses, il apparaîtrait que mes images aient disparu !');
endif; ?>