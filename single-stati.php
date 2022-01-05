<?php
/**
 * The template for displaying all single posts

 * Template Name: Статьи
 * Template Post Type: stati
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package isupb
 */

get_header();

setPostViews(get_the_ID());

while (have_posts()) {
    the_post();
    ?>

    <?php if (function_exists('kama_breadcrumbs')) {
        kama_breadcrumbs('');
    } ?>

    <section class="article">
        <div class="article__content article__content--stati">
            <div class="article__item">
                <h1 class="title-left article__title"><?php the_title(); ?></h1>
                <time class="article__data"><?php echo get_the_date('d.m.Y'); ?></time>

                <header class="news-item__header article__header">
                    <div class="news-item__author"><?php echo get_the_author(); ?></div>
                    <div class="news-item__views"><span><?php echo getPostViews(get_the_ID()); ?></span></div>
                </header>
                <div class="article__img"><?php the_post_thumbnail('post'); ?></div>
                <div class="article__text">
                    <?php the_content(); ?>
                </div>


                <?php if (have_rows('statya_-_tegi')): ?>
                    <h3>Смотрите также</h3>
                    <div class="article__content-readmore">
                        <?php while (have_rows('statya_-_tegi')): the_row();
                            // переменные
                            $nazvanie_tega = get_sub_field('nazvanie_tega');
                            $link = get_sub_field('ssylka_tega');
                            ?>
                                <a href="<?php echo $link; ?>"
                                   class="characteristic"><?php echo $nazvanie_tega; ?></a>
                            <?php if (get_row_index() == 2): ?>
                                <!-- <a class="characteristic js-readmore">Больше</a> -->
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
            <aside class="article__aside">

                <?php echo do_shortcode('[lwptoc]'); ?>

            </aside>
        </div>
    </section>

<?php } ?>





<?php
get_footer();
