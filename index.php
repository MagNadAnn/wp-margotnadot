<?php get_header();
get_sidebar();
?>

<div class="l-page-wrap home">

	<article class="post__text">
		<section class="post__content">
			<?php 
				$pg_accueil = get_page_by_title('accueil');
				echo $pg_accueil->post_content;
			?>
		</section>
		<section class="post__quicky specialites-wrap">
			<?php 

				$specialites = [
					'conception' => [
						'pict' => 'hand-drawn-cog',
						'label' => 'Conception',
						'link' => get_tag_link(get_tg_id('conception'))
						],
					'graphisme' => [
						'pict' => 'hand-drawn-UI',
						'label' => 'Graphisme',
						'link' => get_tag_link(get_tg_id('graphisme'))
						],
					'illustration' => [
						'pict' => 'hand-drawn-pen',
						'label' => 'Illustration',
						'link' => get_tag_link(get_tg_id('illustration'))
						],
					'HTML/CSS' => [
						'pict' => 'hand-drawn-markup',
						'label' => 'HTML/CSS',
						'link' => get_tag_link(get_tg_id('HTML-CSS'))
						],
					'ergonomie' => [
						'pict' => 'hand-drawn-touch',
						'label' => 'Ergonomie',
						'link' => get_tag_link(get_tg_id('ergonomie'))
						],
					'UX' => [
						'pict' => 'hand-drawn-smiley',
						'label' => 'UX',
						'link' => get_tag_link(get_tg_id('UX'))
						],
					'motion design' => [
						'pict' => 'hand-drawn-motion',
						'label' => 'Motion design',
						'link' => get_tag_link(get_tg_id('motion design'))
						]
				];

				foreach ($specialites as $value) {
					echo '<a href="' . $value['link'] . '" class="specialites">
						<svg class="pict">
							<use xlink:href="' . get_stylesheet_directory_uri() . '/images/sprite_margotnadot.svg#' . $value['pict'] . '"></use>
						</svg>
						<label>' . $value['label'] . '</label>
					</a>';
				}

			?>
			
		</section>
	</article>

  <?php get_template_part('loop'); ?>

  </div>
</div>

<?php get_footer(); ?>