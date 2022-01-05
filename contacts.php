<?php
/**
 * Template Name: Контакты
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

    <main>

        <?php if (function_exists('kama_breadcrumbs')) {
            kama_breadcrumbs('');
        } ?>

        <section class="contacts wrapper">
            <?php if (get_field('kontakty_-_zagolovok_h1')) { ?>
                <h1 class="title"><?php the_field('kontakty_-_zagolovok_h1'); ?></h1>
            <?php } ?>

            <div class="board board-contacts">
                <div class="board-contacts__item">
                    <div class="board-contacts__title">Адрес</div>
                    <div class="board-contacts__description"><?php the_field('adres', 'option'); ?></div>
                </div>
                <div class="board-contacts__item">
                    <div class="board-contacts__title">Телефон</div>
                    <div class="board-contacts__description">
                        <a href="tel:<?php the_field('osnovnoj_telefon', 'option'); ?>"
                           class="board-contacts__link"><?php the_field('osnovnoj_telefon', 'option'); ?></a>
                    </div>
                </div>
                <div class="board-contacts__item">
                    <div class="board-contacts__title">Email</div>
                    <div class="board-contacts__description">
                        <a href="mailto:<?php the_field('e-mail', 'option'); ?>"
                           class="board-contacts__link"><?php the_field('e-mail', 'option'); ?></a>
                    </div>
                </div>
            </div>
        </section><!-- !contacts -->

        <section class="employees">
            <h2 class="title employees__title"><?php the_field('sotrudniki_zagolovok'); ?></h2>

            <?php

            $post_objects = get_field('sotrudniki');

            if ($post_objects): ?>

                <div class="board">

                    <?php foreach ($post_objects as $post): // Переменная должна быть названа обязательно $post (IMPORTANT) ?>
                        <?php setup_postdata($post); ?>

                        <div class="employees__item">
                            <div class="employees__img"><?php the_post_thumbnail('sotrudnik'); ?></div>
                            <div class="employees__name"><?php the_field('dolzhnost'); ?></div>
                            <ul class="employees__info">
                                <li class="employees__list"><?php the_title(); ?></li>
                                <li class="employees__list">
                                    <a href="tel:<?php the_field('telefon'); ?>" class="employees__link">
                                        <?php the_field('telefon'); ?></a></li>
                                <li class="employees__list">
                                    <a href="mailto:<?php the_field('e-mail'); ?>"
                                       class="employees__link"><?php the_field('e-mail'); ?></a>
                                </li>
                            </ul>
                        </div>

                    <?php endforeach; ?>

                </div>

                <?php wp_reset_postdata(); ?>
            <?php endif;

            ?>

        </section><!-- !employees -->

        <section class="requisites">
            <h2 class="title"><?php the_field('bankovskie_rekvizity_zagolovok'); ?></h2>
            <div class="requisites__board">
                <?php if (have_rows('bankovskie_rekvizity', 'option')): ?>

                    <ul class="requisites__list">

                        <?php while (have_rows('bankovskie_rekvizity', 'option')): the_row();

                            $rekvizit = get_sub_field('rekvizit');
                            $znachenie = get_sub_field('znachenie');

                            ?>

                            <li class="requisites__item"><?php echo $rekvizit; ?>&nbsp;<?php echo $znachenie; ?></li>

                        <?php endwhile; ?>

                    </ul>

                <?php endif; ?>

                <?php if (have_rows('bankovskie_rekvizity_2_kolonka', 'option')): ?>

                    <ul class="requisites__list">

                        <?php while (have_rows('bankovskie_rekvizity_2_kolonka', 'option')): the_row();

                            $rekvizit = get_sub_field('rekvizit');
                            $znachenie = get_sub_field('znachenie');

                            ?>

                            <li class="requisites__item"><?php echo $rekvizit; ?>&nbsp;<?php echo $znachenie; ?></li>

                        <?php endwhile; ?>

                    </ul>

                <?php endif; ?>
            </div>
        </section><!-- !requisites -->

        <?php get_template_part('template-parts/sections/questions-remain'); ?>

        <section class="map">
            <iframe class="map__item"
                    src="<?php the_field('siteMap', 'option'); ?>"></iframe>
        </section><!-- !map -->

    </main>

<?php
get_footer();
