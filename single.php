<?php
	get_header();
	get_sidebar();
?>
	
	<?php if (have_posts()) : ?>
	  <?php while (have_posts()) : the_post(); ?>
			<div class="l-page-wrap single" >
					<article class="post__text">
						<section class="post__quicky">
						<h1 class="post__title"><span><?php the_title(); ?></span></h1>
						<h2 class="post__baseline">
							<?php the_field('description') ?>
						</h2>
						<p class="post__techniques"><?php the_field('techniques') ?></p>
						<?php

							if (get_the_category() || get_tags()) {
								echo '<p class="post__tag-list">' . get_the_tag_list('#', ' #' , '');

								$categories = get_the_category();
								$separator = ', ';
								$output = '';

								if ( ! empty( $categories ) ) {
									echo '<br>Client : ';
								    foreach( $categories as $category ) {
								       $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
								    }
								   echo trim( $output, $separator );
								}

								echo '</p>';
							}
						?>
						<?php if( get_field('details_techniques') ): ?>
						<p class="post__prix"><span><?php the_field('details_techniques') ?></span></p>
						<?php endif; ?>
						</section>
						<section class="post__content">
							<?php the_content(); ?>
						</section>
					</article>
					<?php
						$attachments = get_children(
							array(
								'post_parent' => get_the_ID(),
								'post_type' => 'attachment',
								'post_mime_type' => 'image',
								'orderby' => 'menu_order'
								)
							);

					//var_dump($attachments);
					foreach ($attachments as $image) {
						$attachment_ID = $image->ID;
						$attachment_alt = $image->post_title;
						$attachment_adresse = wp_get_attachment_url($attachment_ID);
						$attachment_lien = $image->post_content;
					?>
						<div class="thumb vignette-container">
							<?php
							if ($attachment_lien) {
								echo '<a href="';
								echo $attachment_lien;
								echo '" >';
							} ?>
							<img src="<?php echo $attachment_adresse; ?>" title="<?php echo $attachment_alt; ?>" />
							<?php
							if ($attachment_lien) {
								echo '</a>';
							}
							?>
						</div>
					<?php } ?>
			</div>
	    <?php endwhile; ?>
	  <?php endif; ?>

	<?php get_footer();
?>