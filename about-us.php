<?php
/**
 * Template Name: О нас
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

    <section class="about-modules">
        <div class="about-modules__wrapper">
            <div class="about-modules__text">
                <h1 class="about-modules__title"><?php the_field('o_nas_-_zagolovok_h1'); ?></h1>
                <div class="about-modules__description"><?php the_content(); ?></div>
            </div>

            <div class="about-modules__img">

                <?php the_post_thumbnail('about-us'); ?>

                <svg class="aboutPoligon" width="791" height="644" viewBox="0 0 791 644" fill="none"
                     xmlns="http://www.w3.org/2000/svg"
                     style="position: absolute; top: 0;">
                    <g style="mix-blend-mode:hard-light">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M608.373 445.765L608.396 374.304L670.409 338.554L732.399 374.265L732.376 445.725L670.363 481.475L608.373 445.765ZM670.342 548.273L550.406 479.182L550.451 340.924L670.431 271.757L790.366 340.847L790.322 479.105L670.342 548.273Z"
                              fill="#EA5800"></path>
                    </g>
                    <g style="mix-blend-mode:hard-light">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M702.63 148.965L758.402 181.15L758.497 245.358L702.819 277.381L647.047 245.195L646.953 180.987L702.63 148.965Z"
                              fill="#EA5800"></path>
                    </g>
                    <g style="mix-blend-mode:hard-light">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M495.072 403.922L538.19 429.023L538.221 479.171L495.134 504.218L452.016 479.117L451.985 428.969L495.072 403.922Z"
                              fill="#EA5800"></path>
                    </g>
                    <g style="mix-blend-mode:hard-light">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M111.758 253.01L71.4525 229.786L71.4238 183.387L111.701 160.213L152.007 183.437L152.035 229.835L111.758 253.01Z"
                              fill="#EA5800"></path>
                    </g>
                    <g style="mix-blend-mode:hard-light">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M134.711 53.3558L111.746 40.2191L111.729 13.9735L134.678 0.86463L157.643 14.0014L157.659 40.247L134.711 53.3558Z"
                              fill="#EA5800"></path>
                    </g>
                    <g style="mix-blend-mode:hard-light">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M543.721 643.882L476.356 605.323L476.48 527.992L543.968 489.22L611.333 527.779L611.21 605.11L543.721 643.882Z"
                              fill="#EA5800"></path>
                    </g>
                    <g style="mix-blend-mode:hard-light">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M64.981 28.0476L129.539 64.5034L129.421 137.616L64.7444 174.273L0.186032 137.817L0.304324 64.7045L64.981 28.0476Z"
                              fill="#EA5800"></path>
                    </g>
                </svg>

            </div>
        </div>
    </section>

    <section class="about about-modules__about">
        <div class="about__content d-flex justify-content-center">
            <div class="video">
                <a class="video__link" href="https://youtu.be/<?php the_field('o_nas_-_id_video_s_youtube'); ?>"
                   style="background-image: url('<?php the_field('o_nas_-_prevyu_dlya_video'); ?>')">
                    <picture>
                        <source srcset="https://i.ytimg.com/vi_webp/<?php the_field('o_nas_-_id_video_s_youtube'); ?>/hqdefault.webp"
                                type="image/webp">
                        <img class="video__media"
                             src="https://i.ytimg.com/vi/<?php the_field('o_nas_-_id_video_s_youtube'); ?>/hqdefault.jpg"
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
    </section><!-- !about -->

<?php

get_template_part('template-parts/sections/project-numbers');
get_template_part('template-parts/sections/awards');
get_template_part('template-parts/sections/projects');
get_template_part('template-parts/sections/questions-remain');

?>


<?php
get_footer();
