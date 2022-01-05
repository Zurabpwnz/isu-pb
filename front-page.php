<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package isupb
 */

get_header();
?>

    <section class="information">
        <div class="information-wrapper">

            <div class="information-img">

                <div class="swiper-container-information">

					<?php if ( have_rows( 'glavnaya_-_slajder' ) ): ?>

                        <div class="swiper-wrapper">

							<?php while ( have_rows( 'glavnaya_-_slajder' ) ): the_row();

								// переменные
								$izobrazhenie     = get_sub_field( 'izobrazhenie' );
								$zagolovok_slajda = get_sub_field( 'zagolovok_slajda' );
								$opisanie_slajda  = get_sub_field( 'opisanie_slajda' );

								?>

                                <div class="swiper-slide">
                                    <div class="information-img__slide">
                                        <div class="information-img__wrapper">

                                            <img src="<?php echo $izobrazhenie; ?>"
                                                 alt="<?php echo $zagolovok_slajda; ?>"/>

                                            <div class="information-img__top">
                                                <svg style="mix-blend-mode:hard-light" width="361" height="528"
                                                     viewBox="0 0 361 528" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <g style="mix-blend-mode:hard-light">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M194.158 316.64L194.134 240.403L127.976 202.263L61.8417 240.36L61.8662 316.597L128.024 354.737L194.158 316.64ZM128.047 426L256 352.291L255.953 204.791L127.953 131L0 204.709L0.0473475 352.209L128.047 426Z"
                                                              fill="#EA5800"></path>
                                                    </g>
                                                    <g style="mix-blend-mode:hard-light">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M93.6008 0L34.1008 34.337L34 102.837L93.3992 137L152.899 102.663L153 34.163L93.6008 0Z"
                                                              fill="#EA5800"></path>
                                                    </g>
                                                    <g style="mix-blend-mode:hard-light">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M315.033 272L269.033 298.778L269 352.278L314.967 379L360.967 352.222L361 298.722L315.033 272Z"
                                                              fill="#EA5800"></path>
                                                    </g>
                                                    <g style="mix-blend-mode:hard-light">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M263.132 528L335 486.864L334.868 404.363L262.868 363L191 404.137L191.132 486.637L263.132 528Z"
                                                              fill="#EA5800"></path>
                                                    </g>
                                                </svg>

                                            </div>
                                        </div>
                                        <div class="information-form">
                                            <h2 class="information-form__title"><?php echo $zagolovok_slajda; ?></h2>
                                            <h3 class="information-form__subtitle"><?php echo $opisanie_slajda ?></h3>

											<?php echo do_shortcode( '[contact-form-7 id="708" title="Форма рядом со слайдером"]' ) ?>

								


                                        </div>
                                    </div>
                                </div>

							<?php endwhile; ?>

                        </div>

					<?php endif; ?>

                    <nav class="dots information-form__dots">
                        <div class="swiper-pagination-information swiper-pagination-clickable swiper-pagination-bullets">
                            <span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span
                                    class="swiper-pagination-bullet"></span>
                        </div>

                    </nav>


                </div>
            </div>

			<?php if ( have_rows( 'glavnaya_-_spisok_modulej' ) ): ?>

                <div class="information-modules">
                    <div class="modules">

						<?php

						$post_objects = get_field( 'glavnaya_-_spisok_modulej' );

						if ( $post_objects ): ?>
							<?php foreach ( $post_objects as $post ): // Переменная должна быть названа обязательно $post (IMPORTANT) ?>
								<?php setup_postdata( $post ); ?>

                                <div class="module">
                                    <div class="module__img">
                                        <a href="<?php the_permalink(); ?>">
											<?php the_post_thumbnail( array( 60, 60 ) ); ?>
                                        </a>
                                    </div>
                                    <a href="<?php the_permalink(); ?>"
                                       class="module__text"><?php the_title(); ?></a>
                                </div>

							<?php endforeach; ?>
							<?php wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?>
						<?php endif;

						?>

                    </div>
                    <a href="<?php the_field( 'glavnaya_-_spisok_modulej_-_ssylka_-_vse_moduli' ); ?>"
                       class="modules__btn btn">ВСЕ МОДУЛИ СИСТЕМЫ</a>
                </div>

			<?php endif; ?>

        </div>
    </section> <!-- !information -->

    <section class="request">
        <div class="request__img">
            <div class="requisition-img">
                <svg class="requisition-img__hexagon" width="260" height="300" viewBox="0 0 260 300" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <g style="mix-blend-mode:hard-light">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M130.22 0L0.220301 75.1905L0 225.19L129.78 300L259.78 224.81L260 74.8095L130.22 0Z"
                              fill="#7E7E7E"/>
                    </g>
                </svg>
                <svg class="requisition-img__hexagon" width="260" height="300" viewBox="0 0 260 300" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <g style="mix-blend-mode:hard-light">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M130.22 0L0.220301 75.1905L0 225.19L129.78 300L259.78 224.81L260 74.8095L130.22 0Z"
                              fill="#7D7D7D"/>
                    </g>
                </svg>
                <svg class="requisition-img__hexagon" width="260" height="300" viewBox="0 0 260 300" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <g style="mix-blend-mode:hard-light">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M130.22 0L0.220301 75.1905L0 225.19L129.78 300L259.78 224.81L260 74.8095L130.22 0Z"
                              fill="#777777"/>
                    </g>
                </svg>

                <div class="request__hexagon requisition-img__hexagon">
                    <svg width="188" height="116" viewBox="0 0 188 116" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M188 58L88 0.264973V115.735L188 58ZM0 68H98V48H0V68Z" fill="white"/>
                    </svg>
                </div>
            </div>
        </div>
        <div class="request__text">
            <a href="<?php the_field( 'glavnaya_-_poluchit_besplatnyj_dostup_-_ssylka' ); ?>"
               class="btn request__link js-free">
                <svg width="77" height="49" viewBox="0 0 77 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M20.5347 0.500004L0.0347377 12.5305L-6.29977e-06 36.5305L20.4653 48.5L40.9653 36.4695L41 12.4695L20.5347 0.500004Z"
                          fill="#F4F4F4"/>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M39.5347 0.500004L19.0347 12.5305L19 36.5305L39.4653 48.5L59.9653 36.4695L60 12.4695L39.5347 0.500004Z"
                          fill="#E9E9E9"/>
                    <path opacity="0.8" fill-rule="evenodd" clip-rule="evenodd"
                          d="M56.5347 0.500004L36.0347 12.5305L36 36.5305L56.4653 48.5L76.9653 36.4695L77 12.4695L56.5347 0.500004Z"
                          fill="#FFB50F"/>
                    <path d="M64.1372 25L49.1372 16.3397L49.1372 33.6603L64.1372 25ZM36 26.5L50.6372 26.5L50.6372 23.5L36 23.5L36 26.5Z"
                          fill="#E9E9E9"/>
                </svg>
				<?php the_field( 'glavnaya_-_poluchit_besplatnyj_dostup_-_tekst_ssylki' ); ?></a>
        </div>
    </section> <!-- !request -->

<?php get_template_part( 'template-parts/sections/stages' ); ?>

<?php get_template_part( 'template-parts/sections/query' ); ?>


    <section class="profit-block">
        <div class="profit-block__wrapper">
            <h2 class="title profit-block__title advantages__title">
				<?php the_field( 'glavnaya_-_preimushhestva_-_zagolovok' ); ?></h2>

            <div class="profit__content">
                <div class="profit-center">
                    <div class="profit-center__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/isubg.jpg" alt="">
						<?php if ( have_rows( 'glavnaya_-_preimushhestva_-_czentralnyj' ) ) : ?>
							<?php while ( have_rows( 'glavnaya_-_preimushhestva_-_czentralnyj' ) ) : the_row(); ?>

                                <h2><?php the_sub_field( 'zagolovok' ); ?></h2>

                                <h3><?php the_sub_field( 'tekst' ); ?></h3>

                                <div class="profit-center__ico">
									<?php $ikonka = get_sub_field( 'ikonka' ); ?>
									<?php if ( $ikonka ) : ?>
                                        <img src="<?php echo esc_url( $ikonka['url'] ); ?>"
                                             alt="<?php echo esc_attr( $ikonka['alt'] ); ?>"/>
									<?php endif; ?></div>
							<?php endwhile; ?>
						<?php endif; ?>


                        <div class="profit-arr profit-arr-1"><img
                                    src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/parr1.svg"
                                    alt=""></div>
                        <div class="profit-arr profit-arr-2"><img
                                    src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/parr2.svg"
                                    alt=""></div>
                        <div class="profit-arr profit-arr-3"><img
                                    src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/parr3.svg"
                                    alt=""></div>
                        <div class="profit-arr profit-arr-4"><img
                                    src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/parr4.svg"
                                    alt=""></div>
                        <div class="profit-arr profit-arr-5"><img
                                    src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/parr5.svg"
                                    alt=""></div>
                        <div class="profit-arr profit-arr-6"><img
                                    src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/parr6.svg"
                                    alt=""></div>

                    </div>
                </div>


				<?php if ( have_rows( 'glavnaya_-_preimushhestva_-_pervyj' ) ) : ?>
                    <div class="profit-item profit-item-1">
						<?php while ( have_rows( 'glavnaya_-_preimushhestva_-_pervyj' ) ) : the_row(); ?>
							<?php $ikonka = get_sub_field( 'ikonka' ); ?>
							<?php if ( $ikonka ) : ?>
                                <div class="profit-item__img">
                                    <img width="100" height="100" src="<?php echo esc_url( $ikonka['url'] ); ?>"
                                         alt="<?php echo esc_attr( $ikonka['alt'] ); ?>"/>
                                </div>
							<?php endif; ?>


                            <div class="profit-item__text">
                                <h3><?php the_sub_field( 'zagolovok' ); ?></h3>
								<?php the_sub_field( 'tekst' ); ?>
                            </div>
						<?php endwhile; ?>
                    </div>
				<?php endif; ?>


				<?php if ( have_rows( 'glavnaya_-_preimushhestva_-_vtoroj' ) ) : ?>
                    <div class="profit-item profit-item-right profit-item-2">
						<?php while ( have_rows( 'glavnaya_-_preimushhestva_-_vtoroj' ) ) : the_row(); ?>
                            <div class="profit-item__text profit-item__text-right">
                                <h3><?php the_sub_field( 'zagolovok' ); ?></h3>
								<?php the_sub_field( 'tekst' ); ?>
                            </div>
							<?php $ikonka = get_sub_field( 'ikonka' ); ?>
							<?php if ( $ikonka ) : ?>
                                <div class="profit-item__img">
                                    <img width="100" height="100" src="<?php echo esc_url( $ikonka['url'] ); ?>"
                                         alt="<?php echo esc_attr( $ikonka['alt'] ); ?>"/>
                                </div>
							<?php endif; ?>
						<?php endwhile; ?>
                    </div>
				<?php endif; ?>


				<?php if ( have_rows( 'glavnaya_-_preimushhestva_-_tretij' ) ) : ?>
                    <div class="profit-item profit-item-3">
						<?php while ( have_rows( 'glavnaya_-_preimushhestva_-_tretij' ) ) : the_row(); ?>
							<?php $ikonka = get_sub_field( 'ikonka' ); ?>
							<?php if ( $ikonka ) : ?>
                                <div class="profit-item__img">
                                    <img width="100" height="100" src="<?php echo esc_url( $ikonka['url'] ); ?>"
                                         alt="<?php echo esc_attr( $ikonka['alt'] ); ?>"/>
                                </div>
							<?php endif; ?>
                            <div class="profit-item__text">
                                <h3><?php the_sub_field( 'zagolovok' ); ?></h3>
								<?php the_sub_field( 'tekst' ); ?>
                            </div>
						<?php endwhile; ?>
                    </div>
				<?php endif; ?>


				<?php if ( have_rows( 'glavnaya_-_preimushhestva_-_chetvertyj' ) ) : ?>
                    <div class="profit-item profit-item-right profit-item-4">
						<?php while ( have_rows( 'glavnaya_-_preimushhestva_-_chetvertyj' ) ) : the_row(); ?>
                            <div class="profit-item__text profit-item__text-right">
                                <h3><?php the_sub_field( 'zagolovok' ); ?></h3>
								<?php the_sub_field( 'tekst' ); ?>
                            </div>
							<?php $ikonka = get_sub_field( 'ikonka' ); ?>
							<?php if ( $ikonka ) : ?>
                                <div class="profit-item__img">
                                    <img width="100" height="100" src="<?php echo esc_url( $ikonka['url'] ); ?>"
                                         alt="<?php echo esc_attr( $ikonka['alt'] ); ?>"/>
                                </div>
							<?php endif; ?>
						<?php endwhile; ?>
                    </div>
				<?php endif; ?>


				<?php if ( have_rows( 'glavnaya_-_preimushhestva_-_pyatyj' ) ) : ?>
                    <div class="profit-item profit-item-5">
						<?php while ( have_rows( 'glavnaya_-_preimushhestva_-_pyatyj' ) ) : the_row(); ?>
							<?php $ikonka = get_sub_field( 'ikonka' ); ?>
							<?php if ( $ikonka ) : ?>
                                <div class="profit-item__img">
                                    <img width="100" height="100" src="<?php echo esc_url( $ikonka['url'] ); ?>"
                                         alt="<?php echo esc_attr( $ikonka['alt'] ); ?>"/>
                                </div>
							<?php endif; ?>
                            <div class="profit-item__text">
                                <h3><?php the_sub_field( 'zagolovok' ); ?></h3>
								<?php the_sub_field( 'tekst' ); ?>
                            </div>
						<?php endwhile; ?>
                    </div>
				<?php endif; ?>


				<?php if ( have_rows( 'glavnaya_-_preimushhestva_-_shestoj' ) ) : ?>
                    <div class="profit-item profit-item-right profit-item-6">
						<?php while ( have_rows( 'glavnaya_-_preimushhestva_-_shestoj' ) ) : the_row(); ?>
                            <div class="profit-item__text profit-item__text-right">
                                <h3><?php the_sub_field( 'zagolovok' ); ?></h3>
								<?php the_sub_field( 'tekst' ); ?>
                            </div>
							<?php $ikonka = get_sub_field( 'ikonka' ); ?>
							<?php if ( $ikonka ) : ?>
                                <div class="profit-item__img">
                                    <img width="100" height="100" src="<?php echo esc_url( $ikonka['url'] ); ?>"
                                         alt="<?php echo esc_attr( $ikonka['alt'] ); ?>"/>
                                </div>
							<?php endif; ?>
						<?php endwhile; ?>
                    </div>
				<?php endif; ?>

            </div>
        </div>
    </section>


<?php if ( have_rows( 'glavnaya_-_preimushhesva' ) ): ?>

    <section class="advantages">
        <h2 class="title advantages__title">
			<?php the_field( 'preimushhesva_-_zagolovok' ); ?>
        </h2>


		<?php while ( have_rows( 'glavnaya_-_preimushhesva' ) ): the_row();

			// переменные
			$image   = get_sub_field( 'ikonka' );
			$content = get_sub_field( 'opisanie' );
			$title   = get_sub_field( 'nazvanie' );

			?>

            <div class="advantage">
                <div class="advantage__img">
                    <img width="180" height="180" src="<?php echo $image['url']; ?>"
                         alt="<?php echo $image['alt'] ?>"/>
                </div>
                <div class="advantage__subtitle">
					<?php echo $content; ?>
                </div>
                <div class="advantage__title">
					<?php echo $title; ?>
                </div>
            </div>

		<?php endwhile; ?>
        </div>
    </section> <!-- !advantages -->

<?php endif; ?>


    <section class="about">
        <div class="about-text">
            <h2 class="about-text__title"><?php the_field( 'glavnaya_-_o_nas_-_zagolovok' ); ?></h2>
            <h3 class="about-text__subtitle"><?php the_field( 'glavnaya_-_o_nas_-_opisanie' ); ?></h3>
            <a href="<?php the_field( 'glavnaya_-_o_nas_-_uznat_bolshe_-_ssylka' ); ?>" class="about-text__readmore">
                Узнать больше
                <div class="readmore"></div>
            </a>
        </div>
        <div class="about__content">
            <div class="video">
                <a class="video__link" href="https://youtu.be/<?php the_field( 'glavnaya_-_o_nas_-_ssylka_video' ); ?>"
                   style="background-image: url('<?php the_field( 'glavnaya_-_o_nas_-_prevyu_dlya_video' ) ?>')">
                    <picture>
                        <source srcset="https://i.ytimg.com/vi_webp/<?php the_field( 'glavnaya_-_o_nas_-_ssylka_video' ); ?>/hqdefault.webp"
                                type="image/webp">
                        <img class="video__media"
                             src="https://i.ytimg.com/vi/<?php the_field( 'glavnaya_-_o_nas_-_ssylka_video' ); ?>/hqdefault.jpg"
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
    </section> <!-- !about -->


<?php get_template_part( 'template-parts/sections/project-numbers' ); ?>


<?php get_template_part( 'template-parts/sections/find-cost' ); ?>


<?php get_template_part( 'template-parts/sections/awards' ); ?>


<?php get_template_part( 'template-parts/sections/projects' ); ?>


<?php get_template_part( 'template-parts/sections/reviews' ); ?>


<?php get_template_part( 'template-parts/sections/questions-remain' ); ?>

    <section class="news">

        <h2 class="title news__title">
            Статьи и новости
        </h2>

        <div class="news-contents">

            <div class="news-articles">

				<?php if ( have_rows( 'glavnaya_-_stati_i_novosti' ) ): ?>

                    <header class="news-articles__header">

						<?php
						$i = 0;
						while ( have_rows( 'glavnaya_-_stati_i_novosti' ) ): the_row();
							$i ++;

							// переменные
							$title = get_sub_field( 'nazvanie_taba' );

							?>

                            <a href="#" class="news-subtitle <?php if ( $i == 1 ) {
								echo 'news-subtitle-active';
							} ?>">
								<?php echo $title; ?>
                            </a>

						<?php endwhile; ?>

                    </header>


					<?php $j = 0;
					while ( have_rows( 'glavnaya_-_stati_i_novosti' ) ): the_row();
						$j ++;

						$post_objects = get_sub_field( 'soderzhimoe_taba' );
						$title        = get_sub_field( 'nazvanie_taba' );
						$allLink      = get_sub_field( 'ssylka_na_vse_zapisi' );

						?>

						<?php

						if ( $post_objects ): ?>

                            <div class="news-articles__content <?php if ( $j == 1 ) {
								echo 'active';
							} ?>">

								<?php foreach ( $post_objects as $post ): // Переменная должна быть названа обязательно $post (IMPORTANT) ?>
									<?php setup_postdata( $post ); ?>

                                    <div class="news-item">
                                        <header class="news-item__header">
                                            <time datetime="2020-05-01" class="news-item__date">
												<?php the_date(); ?>
                                            </time>
                                            <div class="news-item__author">
												<?php the_author(); ?>
                                            </div>
                                            <div class="news-item__views">
                                                <span><?php echo getPostViews( get_the_ID() ); ?></span>
                                            </div>
                                        </header>
                                        <div class="news-item__content">
                                            <a href="<?php the_permalink(); ?>" class="news-item__title">
												<?php the_title(); ?></a>
                                            <div class="news-item__img">
                                                <a href="<?php the_permalink(); ?>">
													<?php the_post_thumbnail( 'post-home' ); ?>
                                                </a>
                                            </div>
                                            <div class="news-item__description">
												<?php
												$text = strip_tags( get_the_excerpt() );
												echo mb_substr( $text, 0, 141 ) . '...';
												?>
                                            </div>
                                            <a href="<?php the_permalink(); ?>"
                                               class="news-item__readmore about-text__readmore">
                                                Узнать больше
                                                <div class="readmore"></div>
                                            </a>
                                        </div>
                                    </div>

								<?php endforeach; ?>

                                <footer class="news-articles__footer">

									<?php
									$terms = get_field( 'allLink' );
									if ( $terms ): ?>
                                        <ul>
											<?php foreach ( $terms as $term ): ?>
                                                <h2><?php echo esc_html( $term->name ); ?></h2>
                                                <p><?php echo esc_html( $term->description ); ?></p>
                                                <a href="<?php echo esc_url( get_term_link( $term ) ); ?>">View all
                                                    '<?php echo esc_html( $term->name ); ?>' posts</a>
											<?php endforeach; ?>
                                        </ul>
									<?php endif; ?>


                                    <a href="<?php echo $allLink; ?>"
                                       class="news-btn btn">Все <?php echo $title; ?></a>
                                </footer>
                            </div>

							<?php wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?>
						<?php endif;

						?>

					<?php endwhile; ?>
				<?php endif; ?>

            </div>

            <div class="news-mailing__wrapper">
                <div class="news-mailing">
                    <div class="news-mailing__hexagon-top">
                        <svg width="159" height="223" viewBox="0 0 159 223" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <g style="mix-blend-mode:hard-light">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M77.36 115.256L77.3502 84.761L50.9902 69.5052L24.6401 84.7441L24.6498 115.239L51.0098 130.495L77.36 115.256ZM51.0189 159L102 129.516L101.981 70.5164L50.9811 41L0 70.4836L0.018865 129.484L51.0189 159Z"
                                      fill="#FEB104"/>
                            </g>
                            <g style="mix-blend-mode:hard-light">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M69.5314 0L51.0314 10.7773L51 32.2773L69.4686 43L87.9687 32.2227L88 10.7227L69.5314 0Z"
                                      fill="#FEB104"/>
                            </g>
                            <g style="mix-blend-mode:hard-light">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M134.517 87L110.017 101.265L110 129.765L134.483 144L158.983 129.735L159 101.235L134.517 87Z"
                                      fill="#FEB104"/>
                            </g>
                            <g style="mix-blend-mode:hard-light">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M107.07 223L145 201.061L144.93 157.061L106.93 135L69 156.939L69.0695 200.939L107.07 223Z"
                                      fill="#FEB104"/>
                            </g>
                        </svg>
                        <div class="news-mailing__hexagon-bottom">
                            <svg width="85" height="99" viewBox="0 0 85 99" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g style="mix-blend-mode:hard-light">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M42.5302 0L0.0301896 24.7764L0 74.2764L42.4698 99L84.9698 74.2236L85 24.7236L42.5302 0Z"
                                          fill="#FEB104"/>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="news-mailing__title">
						<?php the_field( 'glavnaya_-_stati_i_novosti_-_zagolovok_formy' ); ?>
                    </div>
                    <div class="news-form">
						<?php echo do_shortcode( '[contact-form-7 id="552" title="Подпишись на свежие  статьи и новости"]' ); ?>
                    </div>
                </div>
            </div>

        </div>
    </section> <!-- !news -->


<?php
get_footer();
