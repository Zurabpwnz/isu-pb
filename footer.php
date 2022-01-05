<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package isupb
 */

?>

<button id="myBtn" title="Go to top">
    <div class="awards-nav__hexagon nav-hexagon nav-hexagon-2">
                        <svg width="38" height="24" viewBox="0 0 38 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M37.9261 12.2002L17.9261 0.65319V23.7472L37.9261 12.2002ZM0 14.2002L19.9261 14.2002V10.2002L0 10.2002L0 14.2002Z" fill="black"></path>
                        </svg>
                    </div>
</button>
<footer class="footer">
    <section class="footer-header">
        <?php the_custom_logo(); ?>

        <?php if (have_rows('socz_seti_footer', 'option')): ?>

            <div class="footer-social">
                <h3 class="footer-social__title">Мы в соцсетях:</h3>

                <?php while (have_rows('socz_seti_footer', 'option')) : the_row(); ?>

                    <?php if (get_sub_field('ssylka')) { ?>
                        <a href="<?php the_sub_field('ssylka'); ?>" class="footer-social__item">

                            <?php

                            $image = get_sub_field('ikonka');

                            if (!empty($image)): ?>

                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>

                            <?php endif; ?>

                        </a>
                    <?php } ?>

                <?php endwhile; ?>

            </div>

        <?php endif; ?>

    </section>

    <section class="footer-content">
        <nav class="footer-content__item">
            <h4 class="footer-content__title"><?php $name_menu_footer1 = wp_get_nav_menu_name('footer1-menu');
                echo $name_menu_footer1; ?></h4>

            <?php

            if (has_nav_menu('footer1-menu')) {
                wp_nav_menu([
                    'theme_location' => 'footer1-menu',
                    'container' => false,
                    'menu_id' => 'footer-menu1',
                    'menu_class' => 'footer-content__list',
                    'depth' => 1,
                ]);
            }
            ?>
        </nav>

        <nav class="footer-content__item">
            <h4 class="footer-content__title"><?php $name_menu_footer2 = wp_get_nav_menu_name('footer2-menu');
                echo $name_menu_footer2; ?></h4>

            <?php

            if (has_nav_menu('footer2-menu')) {
                wp_nav_menu([
                    'theme_location' => 'footer2-menu',
                    'container' => false,
                    'menu_id' => 'footer-menu2',
                    'menu_class' => 'footer-content__list',
                    'depth' => 1,
                ]);
            }
            ?>

            <!--            <ul class="footer-content__list">-->
            <!--                <li class="footer-content__elemlist"><a href="introduction.html" class="footer-content__link">Внедрение-->
            <!--                        системы</a></li>-->
            <!--                <li class="footer-content__elemlist"><a href="#" class="footer-content__link">Сопровождение системы</a>-->
            <!--                </li>-->
            <!--            </ul>-->
        </nav>

        <nav class="footer-content__item">
            <h4 class="footer-content__title"><?php $name_menu_footer3 = wp_get_nav_menu_name('footer3-menu');
                echo $name_menu_footer3; ?></h4>

            <?php

            if (has_nav_menu('footer3-menu')) {
                wp_nav_menu([
                    'theme_location' => 'footer3-menu',
                    'container' => false,
                    'menu_id' => 'footer-menu3',
                    'menu_class' => 'footer-content__list',
                    'depth' => 1,
                ]);
            }
            ?>

        </nav>

        <nav class="footer-content__item">
            <h4 class="footer-content__title">Контакты</h4>
            <ul class="footer-content__list">
                <li class="footer-content__elemlist">Горячая линия</li>
                <li class="footer-content__elemlist">
                    <a href="tel:<?php the_field('kruglosutochnaya_podderzhka', 'option'); ?>"
                       class="footer-content__link">
                        <span><?php the_field('kruglosutochnaya_podderzhka', 'option'); ?></span></a>
                </li>
                <li class="footer-content__elemlist">Наш E-mail:</li>
                <li class="footer-content__elemlist">
                    <a href="mailto:<?php the_field('e-mail', 'option'); ?>" class="footer-content__link">
                        <span><?php the_field('e-mail', 'option'); ?></span></a>
                </li>
                <li class="footer-content__elemlist">Наш адрес:</li>
                <li class="footer-content__elemlist">
                    <p class="footer-content__link"><span><?php the_field('adres', 'option'); ?></span></p>
                </li>
            </ul>
        </nav>
        <nav class="footer-content__item">
            <h4 class="footer-content__title">Юридическая информация</h4>
            <ul class="footer-content__list">
                <li class="footer-content__elemlist">
                    <span>Р/c <?php the_field('rc', 'option'); ?></span>
                    <span>к/c <?php the_field('kc', 'option'); ?>,</span>
                    <span>БИК <?php the_field('bik', 'option'); ?></span>
                </li>
            </ul>
        </nav>
    </section>

    <section class="footer-footer">
        <div class="footer-footer__copy"><?php the_date('Y'); ?>
            &nbsp;<?php the_field('kopirajt', 'option'); ?></div>

        <div class="subscribe-wrapper">
            <?php

            if (has_nav_menu('copy-menu')) {
                wp_nav_menu([
                    'theme_location' => 'copy-menu',
                    'container' => false,
                    'menu_class' => 'footer-footer__list',
                    'menu_id' => 'footer-menu-copy',
                    'depth' => 1,
                ]);
            }
            ?>

            <a class="js-subscribe">Подписка</a>
        </div>

        <p class="footer-footer__logo">Сайт разработал <a href="http://oparinseo.ru/">Опарин Артём</a></p>
    </section>
</footer><!-- !footer -->

<!-- MODAL -->
<aside class="modal-call">
    <div class="modal-call__wrapper">
        <h4 class="modat__title">Заказать звонок</h4>

        <?php echo do_shortcode('[contact-form-7 id="798" title="Заказать звонок"]'); ?>

        <div class="modal-call__exit">
            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.9336 6.00793L8.93359 10.0099L12.9336 14.0119L14.0683 12.8766L11.2031 10.0099L14.0683 7.14328L12.9336 6.00793Z"
                      fill="black"/>
                <path d="M7.13277 6.00793L11.1328 10.0099L7.13277 14.0119L5.99807 12.8766L8.86333 10.0099L5.99807 7.14328L7.13277 6.00793Z"
                      fill="black"/>
                <rect x="1" y="1.005" width="18" height="18.0099" rx="3" stroke="black" stroke-width="2"/>
            </svg>
        </div>
    </div>
</aside>

<aside class="modal-subscribe">
    <div class="modal-subscribe__wrapper">
        <h4 class="modat__title">Подписаться</h4>

        <?php echo do_shortcode('[contact-form-7 id="552" title="Подпишись на свежие  статьи и новости"]'); ?>

        <div class="modal-subscribe__exit">
            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.9336 6.00793L8.93359 10.0099L12.9336 14.0119L14.0683 12.8766L11.2031 10.0099L14.0683 7.14328L12.9336 6.00793Z"
                      fill="black"/>
                <path d="M7.13277 6.00793L11.1328 10.0099L7.13277 14.0119L5.99807 12.8766L8.86333 10.0099L5.99807 7.14328L7.13277 6.00793Z"
                      fill="black"/>
                <rect x="1" y="1.005" width="18" height="18.0099" rx="3" stroke="black" stroke-width="2"/>
            </svg>
        </div>
    </div>
</aside>

<aside class="modal-free">
    <div class="modal-free__wrapper">
        <h4 class="modat__title">Получить бесплатный доступ</h4>

        <?php echo do_shortcode('[contact-form-7 id="799" title="Получить бесплатный доступ"]'); ?>

        <div class="modal-free__exit">
            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.9336 6.00793L8.93359 10.0099L12.9336 14.0119L14.0683 12.8766L11.2031 10.0099L14.0683 7.14328L12.9336 6.00793Z"
                      fill="black"/>
                <path d="M7.13277 6.00793L11.1328 10.0099L7.13277 14.0119L5.99807 12.8766L8.86333 10.0099L5.99807 7.14328L7.13277 6.00793Z"
                      fill="black"/>
                <rect x="1" y="1.005" width="18" height="18.0099" rx="3" stroke="black" stroke-width="2"/>
            </svg>
        </div>
    </div>
</aside>

<aside class="modal-region">
    <div class="modal-region__wrapper">
        <div class="modal-region__row">
            <p class="modal-region__city">Ваш город: Санкт-Петербург?</p>
            <a href="#" class="btn modal-region__btn">да</a>
        </div>
        <div class="modal-region__row">
            <form action="post" method="post" class="form-search modal-region__form">
                <input type="search" class="form-search__search modal-region__search" placeholder="Найди здесь">
            </form>
            <a href="#" class="btn modal-region__btn">
                <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="9.5" cy="9" r="8" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"/>
                    <path d="M19.5 19L15.15 14.65" stroke="white" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"/>
                </svg>
            </a>
        </div>


        <?php if (have_rows('spisok_gorodov', 'option')): ?>

            <ul class="modal-region__list">

                <?php while (have_rows('spisok_gorodov', 'option')): the_row();

                    // переменные
                    $nazvanie_goroda = get_sub_field('nazvanie_goroda'); ?>

                    <li><a href="#" class="modal-region__link"><?php echo $nazvanie_goroda; ?></a></li>

                <?php endwhile; ?>

            </ul>

        <?php endif; ?>

        <div class="modal-region__exit">
            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.9336 6.00793L8.93359 10.0099L12.9336 14.0119L14.0683 12.8766L11.2031 10.0099L14.0683 7.14328L12.9336 6.00793Z"
                      fill="black"/>
                <path d="M7.13277 6.00793L11.1328 10.0099L7.13277 14.0119L5.99807 12.8766L8.86333 10.0099L5.99807 7.14328L7.13277 6.00793Z"
                      fill="black"/>
                <rect x="1" y="1.005" width="18" height="18.0099" rx="3" stroke="black" stroke-width="2"/>
            </svg>
        </div>
    </div>
</aside><!-- !MODAL -->

<?php wp_footer(); ?>

<script>
    document.addEventListener('wpcf7submit', function (event) {
            if ('708' == event.detail.contactFormId) {
                dataLayer.push({'event': 'ostavit_sayavku'})
            } else if ('799' == event.detail.contactFormId) {
                dataLayer.push({'event': 'besplatniy_dostup'});
            } else if ('730' == event.detail.contactFormId) {
                dataLayer.push({'event': 'predproektnoe_obsledovanie'});
            } else if ('731' == event.detail.contactFormId) {
                dataLayer.push({'event': 'ostavit_sayavku'});
            } else if ('552' == event.detail.contactFormId) {
                dataLayer.push({'event': 'forma_podpisatsa'});
            } else if ('798' == event.detail.contactFormId) {
                dataLayer.push({'event': 'zakaz_zvonka'});
            } else if ('794' == event.detail.contactFormId) {
                dataLayer.push({'event': 'forma_faq'});
            } else if ('5' == event.detail.contactFormId) {
                dataLayer.push({'event': 'voprosy'})
            } else if ('666' == event.detail.contactFormId) {
                dataLayer.push({'event': 'forma_moduli'});
            } else if ('870' == event.detail.contactFormId)
                dataLayer.push({'event': 'presentacia'})
        }, false
    );
</script>
<script src="//code-ya.jivosite.com/widget/67dHcZZRdm" async></script>

</body>
</html>
