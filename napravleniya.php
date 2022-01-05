<?php
/**
 * Template Name: Наши направления
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


    <div class="security">
        <h1 class="title-left security__title"><?php the_title(); ?></h1>
    </div>

    <section class="direction">
        <div class="text-img__text"><?php the_content(); ?></div>
        <?php if (have_rows('napravleniya_-_spisok_modulej')): ?>

            <div class="information-modules">
                <div class="modules">

                    <?php $post_objects = get_field('napravleniya_-_spisok_modulej');

                    if ($post_objects): ?>
                        <?php foreach ($post_objects as $post): // Переменная должна быть названа обязательно $post (IMPORTANT) ?>
                            <?php setup_postdata($post); ?>

                            <div class="module">
                                <div class="module__img">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail(array(60, 60)); ?>
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

                <?php $napravleniya_spisok_modulej_ssylka_vse_moduli = get_field( 'napravleniya_-_spisok_modulej_-_ssylka_vse_moduli' ); ?>
                <?php if ( $napravleniya_spisok_modulej_ssylka_vse_moduli ) : ?>
                    <a href="<?php echo esc_url( $napravleniya_spisok_modulej_ssylka_vse_moduli); ?>"
                       class="modules__btn btn">ВСЕ МОДУЛИ СИСТЕМЫ</a>
                <?php endif; ?>

            </div>

        <?php endif; ?>
    </section>


<?php get_template_part('template-parts/sections/stages'); ?>

<?php get_template_part('template-parts/sections/find-cost'); ?>


    <!--    Выгоды от внедрения ИСУПБ-->
    <section class="profit-block">
        <div class="profit-block__wrapper">
            <h2 class="profit-block__title"><?php the_field('napravleniya_-_vygody_-_zagolovok'); ?></h2>
            <div class="profit__content">
                <div class="profit-center">
                    <div class="profit-center__img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/isubg.jpg" alt="">

                        <?php if (have_rows('napravleniya_-_vygody_-_czentralnyj')) : ?>
                            <?php while (have_rows('napravleniya_-_vygody_-_czentralnyj')) : the_row(); ?>
                                <h3><?php the_sub_field('tekst'); ?></h3>
                            <?php endwhile; ?>
                        <?php endif; ?>

                        <?php if (have_rows('napravleniya_-_vygody_-_czentralnyj')) : ?>
                            <?php while (have_rows('napravleniya_-_vygody_-_czentralnyj')) : the_row(); ?>
                                <div class="profit-center__ico">
                                <?php $ikonka = get_sub_field('ikonka'); ?>
                                <?php if ($ikonka) : ?>
                                    <img src="<?php echo esc_url($ikonka['url']); ?>"
                                         alt="<?php echo esc_attr($ikonka['alt']); ?>"/>
                                <?php endif; ?>
                            <?php endwhile; ?>
                            </div>
                        <?php endif; ?>

                        <div class="profit-arr profit-arr-1"><img
                                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/parr1.svg"
                                    alt=""></div>
                        <div class="profit-arr profit-arr-2"><img
                                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/parr2.svg"
                                    alt=""></div>
                        <div class="profit-arr profit-arr-3"><img
                                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/parr3.svg"
                                    alt=""></div>
                        <div class="profit-arr profit-arr-4"><img
                                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/parr4.svg"
                                    alt=""></div>
                        <div class="profit-arr profit-arr-5"><img
                                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/parr5.svg"
                                    alt=""></div>
                        <div class="profit-arr profit-arr-6"><img
                                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/parr6.svg"
                                    alt=""></div>
                    </div>
                </div>


                <?php if (have_rows('napravleniya_-_vygody_-_pervyj')) : ?>
                    <div class="profit-item profit-item-1">

                        <?php while (have_rows('napravleniya_-_vygody_-_pervyj')) : the_row(); ?>
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


                <?php if (have_rows('napravleniya_-_vygody_-_vtoroj')) : ?>

                    <div class="profit-item profit-item-right profit-item-2">

                        <?php while (have_rows('napravleniya_-_vygody_-_vtoroj')) : the_row(); ?>

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


                <?php if (have_rows('napravleniya_-_vygody_-_tretij')) : ?>
                    <div class="profit-item profit-item-3">
                        <?php while (have_rows('napravleniya_-_vygody_-_tretij')) : the_row(); ?>
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


                <?php if (have_rows('napravleniya_-_vygody_-_chetvertyj')) : ?>
                    <div class="profit-item profit-item-right profit-item-4">
                        <?php while (have_rows('napravleniya_-_vygody_-_chetvertyj')) : the_row(); ?>
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


                <?php if (have_rows('napravleniya_-_vygody_-_pyatyj')) : ?>
                    <div class="profit-item profit-item-5">
                        <?php while (have_rows('napravleniya_-_vygody_-_pyatyj')) : the_row(); ?>
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


                <?php if (have_rows('napravleniya_-_vygody_-_shestoj')) : ?>
                    <div class="profit-item profit-item-right profit-item-6">
                        <?php while (have_rows('napravleniya_-_vygody_-_shestoj')) : the_row(); ?>
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


<?php

$post_objects = get_field('napravleniya_-_faq_-_spisok');

if ($post_objects): ?>

    <section class="stages faq">
        <h2 class="stages__title title"><?php the_field('napravleniya_-_faq_-_zagolovok'); ?></h2>
        <div class="stages-content">
            <ol class="stages-list stages-list__faq">

                <?php foreach ($post_objects as $post): // Переменная должна быть названа обязательно $post (IMPORTANT) ?>
                    <?php setup_postdata($post); ?>

                    <li class="stages-list__item">
                        <a href="#" class="stages-list__link js-faq__list"><?php the_title(); ?></a>
                        <div class="stages-tabs__wrapper js-faq__tab">
                            <div class="stages-tabs">
                                <div class="stages-tabs__tab">
                                    <div class="faq__text">
                                        <?php the_content(); ?>
                                        <button class="btn stages-tabs__btn">ЗАДАТЬ ВОПРОС</button>
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

<?php get_template_part('template-parts/sections/questions-remain'); ?>


<?php
get_footer();
