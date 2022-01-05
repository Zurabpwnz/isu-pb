<?php
/**
 * Template Name: О системе
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


<?php if (function_exists('kama_breadcrumbs')) {
    kama_breadcrumbs('');
} ?>

    <section class="text-img">
        <div class="text-img__text">
            <h1 class="text-img__title"><?php the_field('o_sisteme_-_zagolovok_h1'); ?></h1>
            <div class="text-img__subtitle"><?php the_field('o_sisteme_-_podzagolovok'); ?></div>
            <div class="text-img__description"><?php the_field('o_sisteme_-_kratkoe_opisanie'); ?></div>
        </div>

        <div class="about__content d-flex justify-content-center">
            <div class="video">
                <a class="video__link" href="https://youtu.be/<?php the_field('o_sisteme_-_id_video_s_youtube'); ?>"
                   style="background-image: url('<?php the_field('o_sisteme_-_prevyu_dlya_video'); ?>')">
                    <picture>
                        <source srcset="https://i.ytimg.com/vi_webp/<?php the_field('o_sisteme_-_id_video_s_youtube'); ?>/hqdefault.webp"
                                type="image/webp">
                        <img class="video__media"
                             src="https://i.ytimg.com/vi/<?php the_field('o_sisteme_-_id_video_s_youtube'); ?>/hqdefault.jpg"
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
    </section>


    <!--    Выгоды от внедрения ИСУПБ-->
    <section class="profit-block">
        <div class="profit-block__wrapper">
            <h2 class="profit-block__title"><?php the_field('o_sisteme_-_vygody_-_zagolovok'); ?></h2>
            <div class="profit__content">
                <div class="profit-center">
                    <div class="profit-center__img">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/isubg.jpg" alt="">
                        
                        <?php if (have_rows('o_sisteme_-_vygody_-_czentralnyj')) : ?>
                            <?php while (have_rows('o_sisteme_-_vygody_-_czentralnyj')) : the_row(); ?>
                                <h3><?php the_sub_field('tekst'); ?></h3>
                            <?php endwhile; ?>
                        <?php endif; ?>

	                    <?php if ( have_rows( 'o_sisteme_-_vygody_-_czentralnyj' ) ) : ?>
                            <div class="profit-center__ico">
			                    <?php while ( have_rows( 'o_sisteme_-_vygody_-_czentralnyj' ) ) : the_row(); ?>
				                    <?php $ikonka = get_sub_field( 'ikonka' ); ?>
				                    <?php if ( $ikonka ) : ?>
                                        <img src="<?php echo esc_url( $ikonka['url'] ); ?>" alt="<?php echo esc_attr( $ikonka['alt'] ); ?>" />
				                    <?php endif; ?>
			                    <?php endwhile; ?>
                            </div>
	                    <?php endif; ?>

                        <div class="profit-arr profit-arr-1"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/parr1.svg" alt=""></div>
                        <div class="profit-arr profit-arr-2"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/parr2.svg" alt=""></div>
                        <div class="profit-arr profit-arr-3"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/parr3.svg" alt=""></div>
                        <div class="profit-arr profit-arr-4"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/parr4.svg" alt=""></div>
                        <div class="profit-arr profit-arr-5"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/parr5.svg" alt=""></div>
                        <div class="profit-arr profit-arr-6"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/parr6.svg" alt=""></div>
                    </div>
                </div>


                <?php if (have_rows('o_sisteme_-_vygody_-_pervyj')) : ?>
                    <div class="profit-item profit-item-1">

                        <?php while (have_rows('o_sisteme_-_vygody_-_pervyj')) : the_row(); ?>
                            <?php $ikonka = get_sub_field('ikonka'); ?>
                            <?php if ($ikonka) : ?>
                                <div class="profit-item__img">
                                    <img src="<?php echo esc_url($ikonka['url']); ?>"
                                         alt="<?php echo esc_attr($ikonka['alt']); ?>"/>
                                </div>
                            <?php endif; ?>
                            <div class="profit-item__text">
                                <?php the_sub_field('tekst'); ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>


                <?php if (have_rows('o_sisteme_-_vygody_-_vtoroj')) : ?>

                    <div class="profit-item profit-item-right profit-item-2">

                        <?php while (have_rows('o_sisteme_-_vygody_-_vtoroj')) : the_row(); ?>

                            <div class="profit-item__text profit-item__text-right">
                                <?php the_sub_field('tekst'); ?>
                            </div>

                            <?php $ikonka = get_sub_field('ikonka'); ?>

                            <div class="profit-item__img">
                            <?php if ($ikonka) : ?>
                                <img src="<?php echo esc_url($ikonka['url']); ?>"
                                     alt="<?php echo esc_attr($ikonka['alt']); ?>"/>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>

                    </div>
                <?php endif; ?>


                <?php if (have_rows('o_sisteme_-_vygody_-_tretij')) : ?>
                    <div class="profit-item profit-item-3">
                        <?php while (have_rows('o_sisteme_-_vygody_-_tretij')) : the_row(); ?>
                            <?php $ikonka = get_sub_field('ikonka'); ?>
                            <?php if ($ikonka) : ?>
                                <div class="profit-item__img">
                                    <img src="<?php echo esc_url($ikonka['url']); ?>"
                                         alt="<?php echo esc_attr($ikonka['alt']); ?>"/>
                                </div>
                            <?php endif; ?>

                            <div class="profit-item__text"><?php the_sub_field('tekst'); ?></div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>


                <?php if (have_rows('o_sisteme_-_vygody_-_chetvertyj')) : ?>
                    <div class="profit-item profit-item-right profit-item-4">
                        <?php while (have_rows('o_sisteme_-_vygody_-_chetvertyj')) : the_row(); ?>
                            <div class="profit-item__text profit-item__text-right"><?php the_sub_field('tekst'); ?></div>


                            <?php $ikonka = get_sub_field('ikonka'); ?>
                            <?php if ($ikonka) : ?>
                                <div class="profit-item__img">
                                    <img src="<?php echo esc_url($ikonka['url']); ?>"
                                         alt="<?php echo esc_attr($ikonka['alt']); ?>"/>
                                </div>
                            <?php endif; ?>

                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>


                <?php if (have_rows('o_sisteme_-_vygody_-_pyatyj')) : ?>
                    <div class="profit-item profit-item-5">
                        <?php while (have_rows('o_sisteme_-_vygody_-_pyatyj')) : the_row(); ?>
                            <?php $ikonka = get_sub_field('ikonka'); ?>
                            <?php if ($ikonka) : ?>
                                <div class="profit-item__img">
                                    <img src="<?php echo esc_url($ikonka['url']); ?>"
                                         alt="<?php echo esc_attr($ikonka['alt']); ?>"/>
                                </div>
                            <?php endif; ?>
                            <div class="profit-item__text"><?php the_sub_field('tekst'); ?></div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>


                <?php if (have_rows('o_sisteme_-_vygody_-_shestoj')) : ?>
                    <div class="profit-item profit-item-right profit-item-6">
                        <?php while (have_rows('o_sisteme_-_vygody_-_shestoj')) : the_row(); ?>
                            <div class="profit-item__text profit-item__text-right"><?php the_sub_field('tekst'); ?></div>

                            <?php $ikonka = get_sub_field('ikonka'); ?>
                            <?php if ($ikonka) : ?>
                                <div class="profit-item__img">
                                    <img src="<?php echo esc_url($ikonka['url']); ?>"
                                         alt="<?php echo esc_attr($ikonka['alt']); ?>"/>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </section>


<?php get_template_part('template-parts/sections/stages'); ?>


<?php get_template_part('template-parts/sections/query'); ?>


<?php

$post_objects = get_field('o_sisteme_-_drugie_moduli');

if ($post_objects): ?>
    <section class="awards module-more">
        <h2 class="module-more__title title"><?php the_field('o_sisteme_-_drugie_moduli_-_zagolovok'); ?></h2>
        <div class="swiper-container-module">
            <div class="swiper-wrapper">

                <?php foreach ($post_objects as $post): // Переменная должна быть названа обязательно $post (IMPORTANT) ?>
                    <?php setup_postdata($post); ?>

                    <div class="swiper-slide">
                        <div class="award module-more__item module module-big">
                            <div class="module__img module__img-big">
                                <a href="<?php the_permalink(); ?>" class="award__img module-more__img">
                                    <?php the_post_thumbnail(array(238, 208)); ?></a>
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


<?php get_template_part('template-parts/sections/questions-remain'); ?>


<?php
get_footer();
