<?php
/**
 * Template Name: Отзывы
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ontu
 */

get_header();
?>


<?php if ( function_exists( 'kama_breadcrumbs' ) ) {
	kama_breadcrumbs( '' );
} ?>


<?php $q = new WP_Query( array(
	'post_type'      => 'otzivi',
	'posts_per_page' => - 1,
) ); ?>
<?php if ( $q->have_posts() ) : ?>

    <section class="reviews-recommendation wrapper">
        <h1 class="title reviews-recommendation__title"><?php the_field( 'otzyvy_-_zagolovok_h1`' ); ?></h1>
        <div class="board">

			<?php while ( $q->have_posts() ) : $q->the_post();
				if ( has_post_thumbnail() ) { ?>

                    <div class="board-reviews">
                        <a href="<?php the_post_thumbnail_url( 'full' ); ?>"
                           class="awards-slider__img board-reviews__img fresco"
                           data-fresco-group="reviews"><?php the_post_thumbnail( 'review' ); ?></a>
                    </div>

				<?php }
			endwhile;
			wp_reset_postdata();
			?>

        </div>
    </section>

<?php endif; ?>


<?php $q = new WP_Query( array(
	'post_type'      => 'video_otzivi',
	'posts_per_page' => - 1,
) ); ?>
<?php if ( $q->have_posts() ) : ?>

    <section class="wrapper video-reviews">
        <h2 class="title video-reviews__title"><?php the_field( 'video_otzyvy_-_zagolovok' ); ?></h2>

        <div class="board board-video__board">
			<?php while ( $q->have_posts() ) : $q->the_post(); { ?>

                    <div class="board-video ">
                        <div class="board-video__content">
                            <div class="video">
                                <a class="video__link" href="https://youtu.be/<?php the_field( 'id_video_s_youtube' ); ?>">
                                    <picture>
                                        <source srcset="https://i.ytimg.com/vi_webp/<?php the_field( 'id_video_s_youtube' ); ?>/hqdefault.webp"
                                                type="image/webp">
                                        <img class="video__media"
                                             src="https://i.ytimg.com/vi/<?php the_field( 'id_video_s_youtube' ); ?>/hqdefault.jpg"
                                             alt="<?php the_title(); ?>">
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
                    </div>

				<?php }
			endwhile;
			wp_reset_postdata();
			?>

        </div>
    </section>

<?php endif; ?>


    <section class="reviews-social wrapper">
        <div class="reviews-social__item">
            <div class="reviews-social__img">
                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip50)">
                        <path d="M0 23C0 12.1577 0 6.73654 3.36827 3.36827C6.73654 0 12.1577 0 23 0H25C35.8423 0 41.2635 0 44.6317 3.36827C48 6.73654 48 12.1577 48 23V25C48 35.8423 48 41.2635 44.6317 44.6317C41.2635 48 35.8423 48 25 48H23C12.1577 48 6.73654 48 3.36827 44.6317C0 41.2635 0 35.8423 0 25L0 23Z"
                              fill="#2787F5"/>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M12.9999 15H9.49913C8.49889 15 8.29883 15.4708 8.29883 15.9898C8.29883 16.9169 9.48569 21.5148 13.825 27.5959C16.7179 31.7488 20.7937 34 24.5026 34C26.7279 34 27.0032 33.5 27.0032 32.6388V29.5C27.0032 28.5 27.214 28.3004 27.9186 28.3004C28.4379 28.3004 29.328 28.56 31.405 30.5623C33.7787 32.9354 34.17 34 35.5051 34H39.0059C40.0062 34 40.5063 33.5 40.2178 32.5133C39.9021 31.5299 38.7688 30.103 37.265 28.4117C36.449 27.4476 35.2251 26.4094 34.8542 25.8902C34.335 25.2228 34.4833 24.9261 34.8542 24.3329C34.8542 24.3329 39.1194 18.3259 39.5645 16.2866C39.787 15.5449 39.5645 15 38.5058 15H35.005C34.1149 15 33.7045 15.4708 33.4819 15.9898C33.4819 15.9898 31.7017 20.3282 29.1797 23.1463C28.3637 23.962 27.9928 24.2216 27.5477 24.2216C27.3252 24.2216 27.0031 23.962 27.0031 23.2205V16.2866C27.0031 15.3966 26.7448 15 26.0029 15H20.5016C19.9454 15 19.6108 15.413 19.6108 15.8045C19.6108 16.6481 20.8718 16.8427 21.0018 19.2158V24.37C21.0018 25.5 20.7976 25.7049 20.3526 25.7049C19.1658 25.7049 16.2789 21.3471 14.5667 16.3607C14.2312 15.3915 13.8946 15 12.9999 15Z"
                              fill="white"/>
                    </g>
                    <defs>
                        <clipPath id="clip50">
                            <rect width="48" height="48" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
            </div>
            <a href="<?php the_field( 'ssylka_-_otzyvy_vkontakte' ); ?>"
               class="reviews-social__name"><span>Отзывы</span> ВКОНТАКТЕ</a>
        </div>
        <div class="reviews-social__item">
            <div class="reviews-social__img">
                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M24.1931 0C13.5921 0.00573957 5 8.60361 5 19.2046C5 24.2898 7.02033 29.1742 10.6133 32.7729C14.0915 36.2511 22.2732 41.2818 22.7582 46.5651C22.83 47.3543 23.4039 48 24.1931 48C24.9823 48 25.5591 47.3543 25.628 46.5651C26.113 41.2818 34.289 36.2597 37.7643 32.7844C41.363 29.1857 43.3891 24.2985 43.3891 19.2046C43.392 8.60361 34.7941 0.00286978 24.1931 0Z"
                          fill="#FF4433"/>
                    <path opacity="0.251" fill-rule="evenodd" clip-rule="evenodd"
                          d="M24.1836 25.9394C27.9028 25.9394 30.9218 22.9233 30.9218 19.2012C30.9218 15.4819 27.9057 12.4629 24.1836 12.4629C20.4643 12.4629 17.4453 15.479 17.4453 19.2012C17.4482 22.9233 20.4643 25.9394 24.1836 25.9394Z"
                          fill="black"/>
                </svg>
            </div>
            <a href="<?php the_field( 'ssylka_-_otzyvy_yandekskarty' ); ?>"
               class="reviews-social__name"><span>Отзывы</span> Яндекс.Карты</a>
        </div>
    </section>


<?php $q = new WP_Query( array(
	'post_type'      => 'partners',
	'posts_per_page' => - 1,
) ); ?>
<?php if ( $q->have_posts() ) : ?>

    <section class="projects partners">
        <div class="projects-content partners__content">
            <div class="projects-text partners__text">
                <h2 class="partners__title"><?php the_field( 'otzyvy_-_partnery_zagolovok' ); ?></h2>
                <h3 class="partners__subtitle"><?php the_field( 'otzyvy_-_partnery_podzagolovok' ); ?></h3>
            </div>

            <div class="projects-slider">
                <div class="swiper-container-project">
                    <div class="swiper-wrapper">

						<?php while ( $q->have_posts() ) : $q->the_post();
							if ( has_post_thumbnail() ) { ?>

                                <div class="swiper-slide">
                                    <div class="project">
                                        <div class="project__img"><?php the_post_thumbnail(); ?></div>
                                        <h4 class="project__name"><?php the_title(); ?></h4>
                                    </div>
                                </div>

							<?php }
						endwhile;
						wp_reset_postdata();
						?>

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

<?php endif; ?>


<?php
get_template_part( 'template-parts/sections/partners' );
get_footer();
