<?php

$post_objects = get_field( 'realizovannye_proekty', 'option' );

if ( $post_objects ): ?>

	<section class="projects">
		<h2 class="projects__title title"><?php the_field( 'realizovannye_proekty_zagolovok_sekczii', 'option' ); ?></h2>

		<div class="projects-content">
			<div class="projects-text">
				<h2 class="projects-text__title"><?php the_field( 'realizovannye_proekty_czifra', 'option' ); ?></h2>
				<h3 class="projects-text__subtitle"><?php the_field( 'realizovannye_proekty_podzagolovok', 'option' ); ?></h3>
				<div class="projects-text__description"><?php the_field( 'realizovannye_proekty_opisanie', 'option' ); ?></div>
				<div class="projects-text__text"><?php the_field( 'realizovannye_proekty_-_tekst','option' ); ?>
					<span><?php the_field( 'realizovannye_proekty_-_tekst_bolshoj', 'option' ); ?></span></div>
			</div>

			<div class="projects-slider">
				<div class="swiper-container-project">
					<div class="swiper-wrapper">

						<?php foreach ( $post_objects as $post ): // Переменная должна быть названа обязательно $post (IMPORTANT) ?>
							<?php setup_postdata( $post ); ?>

							<div class="swiper-slide">
								<div class="project">
									<div class="project__img"><?php the_post_thumbnail(); ?></div>
									<h4 class="project__name"><?php the_field( 'nazvanie_proekta' ); ?></h4>
<!--									<h4 class="project__name">--><?php //the_title(); ?><!--</h4>-->
								</div>
							</div>

						<?php endforeach; ?>

					</div>

					<div class="project__next">
						<div class="awards-nav__hexagon nav-hexagon nav-hexagon-2">
							<svg width="38" height="24" viewBox="0 0 38 24" fill="none"
							     xmlns="http://www.w3.org/2000/svg">
								<path d="M37.9261 12.2002L17.9261 0.65319V23.7472L37.9261 12.2002ZM0 14.2002L19.9261 14.2002V10.2002L0 10.2002L0 14.2002Z"
								      fill="black"/>
							</svg>
						</div>
					</div>
					<div class="project__prev">
						<div class="awards-nav__hexagon nav-hexagon">
							<svg width="39" height="24" viewBox="0 0 39 24" fill="none"
							     xmlns="http://www.w3.org/2000/svg">
								<path d="M0.174015 11.7998L20.174 23.3468L20.174 0.252797L0.174015 11.7998ZM38.1002 9.7998L18.174 9.7998L18.174 13.7998L38.1002 13.7998L38.1002 9.7998Z"
								      fill="black"/>
							</svg>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- !project -->

	<?php wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?>
<?php endif;

?>
