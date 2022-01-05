<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package isupb
 */

get_header(); ?>

    <div class="kama_breadcrumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">
        <div class="container">
            <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <a href="/" itemprop="item"><span itemprop="name">Главная</span></a></span>
            <span class="kb_sep"><img
                        src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/headcrumbsarrow.svg)"></span>
            <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <a href="/moduli-sistemi/" itemprop="item"><span itemprop="name">Модули системы</span></a></span>
            <span class="kb_sep"><img
                        src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/headcrumbsarrow.svg)"></span>
            <span class="kb_title"><?php the_field( 'modul_-_zagolovok_h1' ); ?></span></div>
    </div>

    <section class="about-modules">
        <div class="about-modules__wrapper">
            <div class="about-modules__text">
                <h1 class="about-modules__title"><?php the_field( 'modul_-_zagolovok_h1' ); ?></h1>

                <div class="about-modules__description"><?php the_content(); ?></div>

				<?php echo do_shortcode( '[contact-form-7 id="666" title="Форма модуля"]' ) ?>
            </div>

            <div class="about-modules__img">
				<?php

				$image = get_field( 'modul_-_izobrazhenie' );

				if ( ! empty( $image ) ): ?>

                    <img width="1122" height="705" src="<?php echo $image['url']; ?>"
                         alt="<?php echo $image['alt']; ?>"/>

				<?php endif; ?>


                <div class="about-modules__img-hexagon">     <?php the_post_thumbnail( array(
						140,
						140
					) ); ?>            </div>
            </div>
        </div>
    </section>

    <div class="about about-modules__about">

        <div class="about-text"><?php the_field( 'modul_-_tekst_o_module' ); ?></div>

        <div class="about__content">
            <div class="video">
                <a class="video__link" href="https://youtu.be/<?php the_field( 'modul_-_id_video_s_youtube' ); ?>"
                   style="background-image: url('<?php the_field( 'modul_-_prevyu_dlya_video' ) ?>')">
                    <picture>
                        <source srcset="https://i.ytimg.com/vi_webp/<?php the_field( 'modul_-_id_video_s_youtube' ); ?>/hqdefault.webp"
                                type="image/webp">
                        <img class="video__media"
                             src="https://i.ytimg.com/vi/<?php the_field( 'modul_-_id_video_s_youtube' ); ?>/hqdefault.jpg"
                             alt="Исупб">
                    </picture>
                </a>
                <button class="video__button" aria-label="Запустить видео">
                    <svg width="68" height="48" viewBox="0 0 68 48">
                        <path class="video__button-shape"
                              d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"></path>
                        <path class="video__button-icon" d="M 45,24 27,14 27,34"></path>
                    </svg>
                </button>
            </div>
        </div>

    </div><!-- !about -->


    <div class="about about-modules__about">
        <div class="about-text about-text--full-width"><?php the_field( 'modul_-_shirokij_tekst_o_module' ); ?></div>
    </div>


<?php if ( have_rows( 'modul_-_taby' ) ): ?>


    <section class="text2column js-about-tabs">


        <div class="text2column__block">
            <div class="text2column__left text-paragraph">
                <div class="pravki-tab">

					<?php while ( have_rows( 'modul_-_taby' ) ): the_row();
						$nazvanie_taba = get_sub_field( 'nazvanie_taba' );
						?>

                        <a href="#" class="characteristic"><?php echo $nazvanie_taba; ?></a>

					<?php endwhile; ?>

                </div>
            </div>


			<?php while ( have_rows( 'modul_-_taby' ) ): the_row();

				// переменные
				$tekst_taba         = get_sub_field( 'tekst_taba' );
				$izobrazhenie_taba  = get_sub_field( 'izobrazhenie_taba' );
				$izobrazhenie2_taba = get_sub_field( 'izobrazhenie-2_taba' );

				?>
                <div class="text2column__right">
                    <div class="text-paragraph"><?php echo $tekst_taba; ?></div>
                    <div class="text2column__img">

						<?php if ( $izobrazhenie_taba ) { ?>
                            <div class="">
                                <a href="<?php echo $izobrazhenie_taba['url']; ?>" class="fresco">
                                    <img src="<?php echo $izobrazhenie_taba['url']; ?>"
                                         alt="<?php echo $izobrazhenie_taba['alt'] ?>"/></a>
                            </div>
						<?php } ?>


						<?php if ( $izobrazhenie2_taba ) { ?>
                            <div class="">
                                <a href="<?php echo $izobrazhenie2_taba['url']; ?>" class="fresco">
                                    <img src="<?php echo $izobrazhenie2_taba['url']; ?>"
                                         alt="<?php echo $izobrazhenie2_taba['alt'] ?>"/></a>
                            </div>
						<?php } ?>

                    </div>
                </div>

			<?php endwhile; ?>
        </div>
    </section>


<?php endif; ?>

<?php

$post_objects = get_field( 'modul_-_faq_-_spisok' );

if ( $post_objects ): ?>

    <section class="stages faq">
        <h2 class="stages__title title"><?php the_field( 'modul_-_faq_-_zagolovok' ); ?></h2>
        <div class="stages-content">
            <ol class="stages-list stages-list__faq">

				<?php foreach ( $post_objects as $post ): // Переменная должна быть названа обязательно $post (IMPORTANT) ?>
					<?php setup_postdata( $post ); ?>

                    <li class="stages-list__item">
                        <a href="#" class="stages-list__link js-faq__list"><?php the_title(); ?></a>
                        <div class="stages-tabs__wrapper js-faq__tab">
                            <div class="stages-tabs">
                                <div class="stages-tabs__tab">
                                    <div class="faq__text">
										<?php the_content(); ?>
                                        <a href="/faq/" class="btn stages-tabs__btn">ЗАДАТЬ ВОПРОС</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

				<?php endforeach; ?>

            </ol>
        </div>
    </section><!-- !stages -->

	<?php wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?>
<?php endif;

?>


<?php get_template_part( 'template-parts/sections/stages' ); ?>

<?php get_template_part( 'template-parts/sections/query' ); ?>


<?php

$post_objects = get_field( 'modul_-_drugie_moduli' );

if ( $post_objects ): ?>
    <section class="awards module-more">
        <h2 class="module-more__title title"><?php the_field( 'modul_-_drugie_moduli_-_zagolovok' ); ?></h2>
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


<?php get_template_part( 'template-parts/sections/find-cost' ); ?>


<?php if ( have_rows( 'modul_-_tegi' ) && get_field( 'modul_-_tegi_-_zagolovok' ) ): ?>

    <section class="popular-requries">
        <h2 class="popular-requries__subtitle"><?php the_field( 'modul_-_tegi_-_zagolovok' ); ?></h2>

        <div class="characteristics__content popular-requries__content">
            <div class="characteristics__slider popular-requries__slider">
                <div class="swiper-container-tags">
                    <div class="swiper-wrapper">

						<?php while ( have_rows( 'modul_-_tegi' ) ): the_row();

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
