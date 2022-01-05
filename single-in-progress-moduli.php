<?php
/**
 * Template Name: Модуль в процессе
 * Template Post Type: moduli-sistemi
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
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/headcrumbsarrow.svg)"></span>
            <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <a href="/moduli-sistemi/" itemprop="item"><span itemprop="name">Модули системы</span></a></span>
            <span class="kb_sep"><img
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/headcrumbsarrow.svg)"></span>
            <span class="kb_title"><?php the_field('modul_-_zagolovok_h1'); ?></span></div>
    </div>

    <section class="about-modules">
        <div class="about-modules__wrapper">
            <div class="about-modules__text">
                <h1 class="about-modules__title"><?php the_field('modul_-_zagolovok_h1'); ?></h1>

                <div class="about-modules__description"><?php the_content(); ?></div>

                <?php echo do_shortcode('[contact-form-7 id="666" title="Форма модуля"]') ?>
            </div>

            <div class="about-modules__img">
                <?php

                $image = get_field('modul_-_izobrazhenie');

                if (!empty($image)): ?>

                    <img width="1122" height="705" src="<?php echo $image['url']; ?>"
                         alt="<?php echo $image['alt']; ?>"/>

                <?php endif; ?>


                <div class="about-modules__img-hexagon">     <?php the_post_thumbnail(array(
                        140,
                        140
                    )); ?>            </div>
            </div>
        </div>
    </section>

<?php
get_footer();
