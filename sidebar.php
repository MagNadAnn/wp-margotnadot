	<section>

		<section class="menu__tag-list">

		<?php
			$tg_menu = [
				'conception' => [
					'label' => 'Conception',
					'link' => get_tag_link(get_tg_id('conception'))
					],
				'graphisme' => [
					'label' => 'Graphisme',
					'link' => get_tag_link(get_tg_id('graphisme'))
					],
				'illustration' => [
					'label' => 'Illustration',
					'link' => get_tag_link(get_tg_id('illustration'))
					],
				'HTML/CSS' => [
					'label' => 'Elegant HTML/CSS',
					'link' => get_tag_link(get_tg_id('HTML-CSS'))
					]
				];

				foreach ($tg_menu as $value) {
					echo '<a href="' . $value['link'] . '" class="menu__tag">' . $value['label'] . '</a>';
				}

			?>

		</section>

		<section class="menu__puce-list">
			<a class="menu__puce" aria-label="Me contacter" href="mailto:yo@margotnadot.com" alt="me contacter" title="me contacter">
				<svg class="brush-background">
					<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/sprite_margotnadot.svg#hand-drawn-circle"></use>
				</svg>
				<svg class="pict pict25">
					<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/sprite_margotnadot.svg#25-envelop"></use>
				</svg>
			</a>
			<a class="menu__puce" aria-label="Mon CV" href="http://margotnadot.com/wp-content/uploads/2013/08/2013aoutCV-fr_print.pdf" alt="consulter mon CV" title="mon CV">
				<svg class="brush-background">
					<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/sprite_margotnadot.svg#hand-drawn-circle"></use>
				</svg>
				<svg class="pict pict25">
					<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/sprite_margotnadot.svg#25-cv"></use>
				</svg>
			</a>
			<a class="menu__puce" aria-label="Mon twitter" href="https://twitter.com/MagNadAnn" alt="me suivre sur Twitter" title="me suivre sur Twitter">
				<svg class="brush-background">
					<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/sprite_margotnadot.svg#hand-drawn-circle"></use>
				</svg>
				<svg class="pict pict25">
					<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/sprite_margotnadot.svg#25-twitter"></use>
				</svg>
			</a>
			<a class="menu__puce" aria-label="Mon Linkendin" href="http://fr.linkedin.com/pub/margot-nadot/37/207/b93">
				<svg class="brush-background">
					<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/sprite_margotnadot.svg#hand-drawn-circle"></use>
				</svg>
				<svg class="pict pict25">
					<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/sprite_margotnadot.svg#25-linkedin"></use>
				</svg>
			</a>
		</section>

		<!-- <section class="menu__tag-list">
			<a class="menu__tag" href="<?php echo get_page_link(218); ?>">À propos</a>
		</section> -->

	</nav>
</nav>