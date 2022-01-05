<?php
/**
 * Template Name: Внедрение
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package isupb
 */

get_header();
?>

<?php if ( function_exists( 'kama_breadcrumbs' ) ) {
	kama_breadcrumbs( '' );
} ?>


<?php if ( have_rows( 'vnedrenie_-_spisok' ) ): ?>

    <section class="introduction">
        <h1 class="title introduction__title"><?php the_field( 'vnedrenie_-_zagolovok' ); ?></h1>
        <div class="board">

			<?php $i = 0;
			while ( have_rows( 'vnedrenie_-_spisok' ) ): the_row();
				$i ++;

				// переменные
				$image            = get_sub_field( 'ikonka' );
				$title            = get_sub_field( 'nazvanie' );
				$spisok_elementov = get_sub_field( 'spisok_elementov' );

				?>
                <div class="board-item">
                    <div class="board-item__header">
                        <div class="board-item__img">
                            <div class="board-item__num"><?php echo $i; ?></div>
                            <svg width="60" height="60" viewBox="0 0 60 60" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.2119 42.3047H31.7588V45.8203H21.2119V42.3047Z" fill="black"/>
                                <path d="M37.6533 40.4082L49.8982 18.0612L56.0207 20.2041L43.4696 43.7755L37.6533 40.4082Z"
                                      fill="#FEB104"/>
                                <path d="M21.2119 35.2734H31.7588V38.7891H21.2119V35.2734Z" fill="black"/>
                                <path d="M21.2119 28.2422H38.79V31.7578H21.2119V28.2422Z" fill="black"/>
                                <path d="M21.2119 21.2109H38.79V24.7266H21.2119V21.2109Z" fill="black"/>
                                <path d="M17.1812 18.9382L14.6953 16.4524L10.6649 20.4829L8.39215 18.2102L5.90625 20.696L10.6649 25.4546L17.1812 18.9382Z"
                                      fill="#FEB104"/>
                                <path d="M7.14941 38.7891H17.6963V28.2422H7.14941V38.7891ZM10.665 31.7578H14.1807V35.2734H10.665V31.7578Z"
                                      fill="black"/>
                                <path d="M7.14941 52.8516H17.6963V42.3047H7.14941V52.8516ZM10.665 45.8203H14.1807V49.3359H10.665V45.8203Z"
                                      fill="black"/>
                                <path d="M57.1301 11.2443C54.5418 9.9191 51.358 10.9466 50.0343 13.5319L45.8213 21.7227V11.5766L34.2446 0H0.000976562V60H45.8213V44.781L59.4208 18.3415C60.7459 15.7533 59.7183 12.5695 57.1301 11.2443ZM55.5279 14.3735C56.3907 14.8153 56.7332 15.8766 56.2929 16.7364L55.4874 18.3025L52.358 16.7002L53.162 15.137C53.6038 14.2744 54.665 13.9318 55.5279 14.3735ZM43.4124 41.7782L40.2829 40.1761L50.7501 19.8266L53.8795 21.4288L43.4124 41.7782ZM38.6748 43.3024L41.8042 44.9046L41.2443 45.9932L38.4764 47.5399L38.1135 44.3936L38.6748 43.3024ZM35.2744 6.00152L39.8196 10.5469H35.2743V6.00152H35.2744ZM3.5166 56.4844V3.51562H31.7588V14.0625H42.3057V28.5577L34.4989 43.7353L35.1446 49.3359H21.2119V52.8516H36.178L42.3057 49.4273V56.4844H3.5166Z"
                                      fill="black"/>
                            </svg>
                        </div>
                        <div class="board-item__title"><?php echo $title; ?></div>
                    </div>

					<?php if ( have_rows( 'spisok_elementov' ) ): ?>

                        <ul class="stages-tabs__list board-item__list">

							<?php while ( have_rows( 'spisok_elementov' ) ): the_row();

								// переменные
								$image   = get_sub_field( 'image' );
								$content = get_sub_field( 'tekst' );
								$link    = get_sub_field( 'link' );

								?>

                                <li class="stages-tabs__item board-item__item"><?php echo $content; ?></li>

							<?php endwhile; ?>

                        </ul>

					<?php endif; ?>

                </div>

			<?php endwhile; ?>

        </div>
    </section><!-- !introduction -->

<?php endif; ?>


<?php get_template_part( 'template-parts/sections/find-cost' ); ?>


    <section class="text2column">
        <h2 class="title text2column__title"><?php the_field( 'vnedrenie_-_pochemu_my_-_zagolovok' ); ?></h2>
        <div class="text2column__block active">
            <div class="text2column__left text-paragraph"><?php the_field('vnedrenie_-_pochemu_my_-_opisanie'); ?></div>
            <div class="text2column__right">
                <div class="text2column__img">
	                <?php

	                $image = get_field( 'vnedrenie_-_pochemu_my_-_izobrazhenie' );

	                if ( ! empty( $image ) ): ?>

                        <img width="351" height="351" src="<?php echo $image['url']; ?>"
                             alt="<?php echo $image['alt']; ?>"/>

	                <?php endif; ?>

                </div>
            </div>
        </div>
    </section>


<?php

$post_objects = get_field( 'vnedrenie_-_drugie_moduli' );

if ( $post_objects ): ?>
    <section class="awards module-more">
        <h2 class="module-more__title title"><?php the_field( 'vnedrenie_-_drugie_moduli_-_zagolovok' ); ?></h2>
        <div class="swiper-container-module">
            <div class="swiper-wrapper">

	            <?php foreach ( $post_objects as $post ): // Переменная должна быть названа обязательно $post (IMPORTANT) ?>
		            <?php setup_postdata( $post ); ?>

                    <div class="swiper-slide">
                        <div class="award module-more__item module module-big">
                            <div class="module__img module__img-big">
                                <a href="<?php the_permalink(); ?>" class="award__img module-more__img">
						            <?php the_post_thumbnail( array( 238, 208 ) ); ?></a>
                            </div>
                            <h3 class="award__subtitle module-more__subtitle">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                        </div>
                    </div>

	            <?php endforeach; ?>

            </div>
            <div class="module-more__next">
                <div class="awards-nav__hexagon nav-hexagon nav-hexagon-2">
                    <svg width="38" height="24" viewBox="0 0 38 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M37.9261 12.2002L17.9261 0.65319V23.7472L37.9261 12.2002ZM0 14.2002L19.9261 14.2002V10.2002L0 10.2002L0 14.2002Z"
                              fill="black"/>
                    </svg>
                </div>
            </div>
            <div class="module-more__prev">
                <div class="awards-nav__hexagon nav-hexagon">
                    <svg width="39" height="24" viewBox="0 0 39 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.174015 11.7998L20.174 23.3468L20.174 0.252797L0.174015 11.7998ZM38.1002 9.7998L18.174 9.7998L18.174 13.7998L38.1002 13.7998L38.1002 9.7998Z"
                              fill="black"/>
                    </svg>
                </div>
            </div>
        </div>
    </section><!-- !module-more awards -->
	<?php wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?>
<?php endif;

?>


<?php get_template_part( 'template-parts/sections/projects' ); ?>


<?php get_template_part( 'template-parts/sections/questions-remain' ); ?>


<?php if ( have_rows( 'vnedrenie_-_tegi' ) && get_field('vnedrenie_-_zagolovok_tegov')) : ?>

    <section class="popular-requries">
        <h2 class="popular-requries__subtitle"><?php the_field('vnedrenie_-_zagolovok_tegov');?></h2>

        <div class="characteristics__content popular-requries__content">
            <div class="characteristics__slider popular-requries__slider">
                <div class="swiper-container-tags">
                    <div class="swiper-wrapper">

						<?php while ( have_rows( 'vnedrenie_-_tegi' ) ): the_row();

							$title = get_sub_field( 'nazvanie_tega' );
							$link  = get_sub_field( 'ssylka_tega' );

							?>

                            <div class="swiper-slide swiper-slide__wauto">
                                <a href="#" class="characteristic"><?php echo $title; ?></a></div>

						<?php endwhile; ?>

                    </div>
                </div>
                <div class="tags__next">
                    <div class="awards-nav__hexagon nav-hexagon nav-hexagon-2">
                        <svg width="38" height="24" viewBox="0 0 38 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M37.9261 12.2002L17.9261 0.65319V23.7472L37.9261 12.2002ZM0 14.2002L19.9261 14.2002V10.2002L0 10.2002L0 14.2002Z"
                                  fill="black"/>
                        </svg>
                    </div>
                </div>
                <div class="tags__prev">
                    <div class="awards-nav__hexagon nav-hexagon">
                        <svg width="39" height="24" viewBox="0 0 39 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.174015 11.7998L20.174 23.3468L20.174 0.252797L0.174015 11.7998ZM38.1002 9.7998L18.174 9.7998L18.174 13.7998L38.1002 13.7998L38.1002 9.7998Z"
                                  fill="black"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>


<?php
get_footer();
