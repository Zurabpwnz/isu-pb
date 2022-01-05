<?php
/**
 * The template for displaying all single posts
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
        <h1 class="title-left article__title"><?php the_title(); ?></h1>
        <time class="article__data"><?php echo get_the_date('d.m.Y'); ?></time>
        <div class="article__content">
            <div class="article__item">

                <header class="news-item__header article__header">
                    <div class="news-item__author"><?php echo get_the_author(); ?></div>
                    <div class="news-item__views"><span><?php echo getPostViews(get_the_ID()); ?></span></div>
                </header>
                <div class="article__img"><?php the_post_thumbnail('post'); ?></div>
                <div class="article__text">
                    <?php the_content(); ?>
                </div>


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
                    <div class="news-mailing__title">Подпишись на свежие статьи и новости</div>
                    <div class="news-form">
                        <?php echo do_shortcode('[contact-form-7 id="552" title="Подпишись на свежие  статьи и новости"]'); ?>
                    </div>
                </div>

            </div>
            <aside class="article__aside">

                <?php echo do_shortcode('[lwptoc]'); ?>

            </aside>
        </div>
    </section>

<?php } ?>


<?php if (have_rows('statya_-_tegi')): ?>

    <section class="popular-requries">
        <div class="characteristics__content popular-requries__content">
            <div class="characteristics__slider popular-requries__slider">
                <div class="swiper-container-tags">
                    <div class="swiper-wrapper">

                        <?php while (have_rows('statya_-_tegi')): the_row();

                            // переменные
                            $nazvanie_tega = get_sub_field('nazvanie_tega');
                            $link = get_sub_field('ssylka_tega');

                            ?>

                            <div class="swiper-slide swiper-slide__wauto">
                                <a href="<?php echo $link; ?>"
                                   class="characteristic"><?php echo $nazvanie_tega; ?></a>
                            </div>

                        <?php endwhile; ?>

                    </div>
                </div>
                <div class="tags__next">
                    <div class="awards-nav__hexagon nav-hexagon nav-hexagon-2">
                        <svg width="38" height="24" viewBox="0 0 38 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M37.9261 12.2002L17.9261 0.65319V23.7472L37.9261 12.2002ZM0 14.2002L19.9261 14.2002V10.2002L0 10.2002L0 14.2002Z"
                                  fill="black"/>
                        </svg>
                    </div>
                </div>
                <div class="tags__prev">
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
    </section>

<?php endif; ?>


<?php
get_footer();
