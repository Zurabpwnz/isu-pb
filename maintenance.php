<?php
/**
 * Template Name: Сопровождение системы
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


<?php if ( have_rows( 'soprovozhdenie_-_spisok' ) ): ?>

    <section class="introduction">
        <h1 class="title introduction__title"><?php the_title(); ?></h1>
        <div class="board">

            <?php $i = 0;
            while ( have_rows( 'soprovozhdenie_-_spisok' ) ): the_row();
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

                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
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



<?php
get_template_part('template-parts/sections/find-cost');
?>



<?php

$post_objects = get_field('soprovozhdenie_-_drugie_moduli');

if ($post_objects): ?>
    <section class="awards module-more">
        <h2 class="module-more__title title"><?php the_field('soprovozhdenie_-_drugie_moduli_-_zagolovok'); ?></h2>
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



<?php get_template_part('template-parts/sections/projects'); ?>


<?php get_template_part('template-parts/sections/questions-remain'); ?>


<?php
get_footer();
