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

        <?php if ( have_rows( 'socz_seti_footer', 'option' ) ): ?>

            <div class="footer-social">
                <h3 class="footer-social__title">Мы в соцсетях:</h3>

                <?php while ( have_rows( 'socz_seti_footer', 'option' ) ) : the_row(); ?>

                    <?php if ( get_sub_field( 'ssylka' ) ) { ?>
                        <a href="<?php the_sub_field( 'ssylka' ); ?>" class="footer-social__item">

                            <?php

                            $image = get_sub_field( 'ikonka' );

                            if ( ! empty( $image ) ): ?>

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
            <h4 class="footer-content__title"><?php $name_menu_footer1 = wp_get_nav_menu_name( 'footer1-menu' );
                echo $name_menu_footer1; ?></h4>

            <?php

            if ( has_nav_menu( 'footer1-menu' ) ) {
                wp_nav_menu( [
                    'theme_location' => 'footer1-menu',
                    'container'      => false,
                    'menu_id'        => 'footer-menu1',
                    'menu_class'     => 'footer-content__list',
                    'depth'          => 1,
                ] );
            }
            ?>
        </nav>

        <nav class="footer-content__item">
            <h4 class="footer-content__title"><?php $name_menu_footer2 = wp_get_nav_menu_name( 'footer2-menu' );
                echo $name_menu_footer2; ?></h4>

            <?php

            if ( has_nav_menu( 'footer2-menu' ) ) {
                wp_nav_menu( [
                    'theme_location' => 'footer2-menu',
                    'container'      => false,
                    'menu_id'        => 'footer-menu2',
                    'menu_class'     => 'footer-content__list',
                    'depth'          => 1,
                ] );
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
            <h4 class="footer-content__title"><?php $name_menu_footer3 = wp_get_nav_menu_name( 'footer3-menu' );
                echo $name_menu_footer3; ?></h4>

            <?php

            if ( has_nav_menu( 'footer3-menu' ) ) {
                wp_nav_menu( [
                    'theme_location' => 'footer3-menu',
                    'container'      => false,
                    'menu_id'        => 'footer-menu3',
                    'menu_class'     => 'footer-content__list',
                    'depth'          => 1,
                ] );
            }
            ?>

        </nav>

        <nav class="footer-content__item">
            <h4 class="footer-content__title">Контакты</h4>
            <ul class="footer-content__list">
                <li class="footer-content__elemlist">Горячая линия</li>
                <li class="footer-content__elemlist">
                    <a href="tel:<?php the_field( 'kruglosutochnaya_podderzhka', 'option' ); ?>"
                       class="footer-content__link">
                        <span><?php the_field( 'kruglosutochnaya_podderzhka', 'option' ); ?></span></a>
                </li>
                <li class="footer-content__elemlist">Наш E-mail:</li>
                <li class="footer-content__elemlist">
                    <a href="mailto:<?php the_field( 'e-mail', 'option' ); ?>" class="footer-content__link">
                        <span><?php the_field( 'e-mail', 'option' ); ?></span></a>
                </li>
                <li class="footer-content__elemlist">Наш адрес:</li>
                <li class="footer-content__elemlist">
                    <p class="footer-content__link"><span><?php the_field( 'adres', 'option' ); ?></span></p>
                </li>
            </ul>
        </nav>
        <nav class="footer-content__item">
            <h4 class="footer-content__title">Юридическая информация</h4>
            <ul class="footer-content__list">
                <li class="footer-content__elemlist">
                    <span>Р/c <?php the_field( 'rc', 'option' ); ?></span>
                    <span>к/c <?php the_field( 'kc', 'option' ); ?>,</span>
                    <span>БИК <?php the_field( 'bik', 'option' ); ?></span>
                </li>
            </ul>
        </nav>
    </section>

    <section class="footer-footer">
        <div class="footer-footer__copy"><?php the_date( 'Y' ); ?>
            &nbsp;<?php the_field( 'kopirajt', 'option' ); ?></div>

        <div class="subscribe-wrapper">
            <?php

            if ( has_nav_menu( 'copy-menu' ) ) {
                wp_nav_menu( [
                    'theme_location' => 'copy-menu',
                    'container'      => false,
                    'menu_class'     => 'footer-footer__list',
                    'menu_id'        => 'footer-menu-copy',
                    'depth'          => 1,
                ] );
            }
            ?>

            <a class="js-subscribe">Подписка</a>
        </div>

        <a href="http://oparinseo.ru/" class="footer-footer__logo">
            <svg width="135" height="18" viewBox="0 0 135 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M32.2314 11.4757H27.8376L26.9994 13.5007H24.7551L28.9732 4.05067H31.1363L35.3679 13.5007H33.0696L32.2314 11.4757ZM31.5419 9.81517L30.0412 6.19717L28.5406 9.81517H31.5419Z"
                      fill="black"/>
                <path d="M42.3795 13.5007L40.5543 10.8682H40.4462H38.5399V13.5007H36.3498V4.05067H40.4462C41.2844 4.05067 42.0099 4.19017 42.6228 4.46917C43.2447 4.74817 43.7224 5.14417 44.0559 5.65717C44.3894 6.17017 44.5561 6.77767 44.5561 7.47967C44.5561 8.18167 44.3849 8.78917 44.0424 9.30217C43.7089 9.80617 43.2312 10.1932 42.6093 10.4632L44.7319 13.5007H42.3795ZM42.3389 7.47967C42.3389 6.94867 42.1677 6.54367 41.8252 6.26467C41.4827 5.97667 40.9825 5.83267 40.3245 5.83267H38.5399V9.12667H40.3245C40.9825 9.12667 41.4827 8.98267 41.8252 8.69467C42.1677 8.40667 42.3389 8.00167 42.3389 7.47967Z"
                      fill="black"/>
                <path d="M48.1197 5.83267H45.0913V4.05067H53.3382V5.83267H50.3098V13.5007H48.1197V5.83267Z"
                      fill="black"/>
                <path d="M61.8442 11.7457V13.5007H54.5166V4.05067H61.6684V5.80567H56.6932V7.85767H61.0871V9.55867H56.6932V11.7457H61.8442Z"
                      fill="black"/>
                <path d="M72.1987 13.5007L72.1852 7.83067L69.4002 12.5017H68.4133L65.6418 7.95217V13.5007H63.5868V4.05067H65.3984L68.9405 9.92317L72.4285 4.05067H74.2266L74.2537 13.5007H72.1987Z"
                      fill="black"/>
                <path d="M84.9108 13.6627C83.9284 13.6627 83.0406 13.4512 82.2475 13.0282C81.4634 12.6052 80.846 12.0247 80.3953 11.2867C79.9537 10.5397 79.7329 9.70267 79.7329 8.77567C79.7329 7.84867 79.9537 7.01617 80.3953 6.27817C80.846 5.53117 81.4634 4.94617 82.2475 4.52317C83.0406 4.10017 83.9284 3.88867 84.9108 3.88867C85.8933 3.88867 86.7765 4.10017 87.5607 4.52317C88.3448 4.94617 88.9622 5.53117 89.4128 6.27817C89.8635 7.01617 90.0888 7.84867 90.0888 8.77567C90.0888 9.70267 89.8635 10.5397 89.4128 11.2867C88.9622 12.0247 88.3448 12.6052 87.5607 13.0282C86.7765 13.4512 85.8933 13.6627 84.9108 13.6627ZM84.9108 11.7997C85.4697 11.7997 85.9744 11.6737 86.425 11.4217C86.8757 11.1607 87.2272 10.8007 87.4795 10.3417C87.7409 9.88267 87.8716 9.36067 87.8716 8.77567C87.8716 8.19067 87.7409 7.66867 87.4795 7.20967C87.2272 6.75067 86.8757 6.39517 86.425 6.14317C85.9744 5.88217 85.4697 5.75167 84.9108 5.75167C84.352 5.75167 83.8473 5.88217 83.3967 6.14317C82.946 6.39517 82.59 6.75067 82.3286 7.20967C82.0763 7.66867 81.9501 8.19067 81.9501 8.77567C81.9501 9.36067 82.0763 9.88267 82.3286 10.3417C82.59 10.8007 82.946 11.1607 83.3967 11.4217C83.8473 11.6737 84.352 11.7997 84.9108 11.7997Z"
                      fill="black"/>
                <path d="M95.8312 4.05067C96.6694 4.05067 97.395 4.19017 98.0079 4.46917C98.6297 4.74817 99.1074 5.14417 99.4409 5.65717C99.7744 6.17017 99.9411 6.77767 99.9411 7.47967C99.9411 8.17267 99.7744 8.78017 99.4409 9.30217C99.1074 9.81517 98.6297 10.2112 98.0079 10.4902C97.395 10.7602 96.6694 10.8952 95.8312 10.8952H93.925V13.5007H91.7348V4.05067H95.8312ZM95.7095 9.11317C96.3675 9.11317 96.8677 8.97367 97.2102 8.69467C97.5527 8.40667 97.7239 8.00167 97.7239 7.47967C97.7239 6.94867 97.5527 6.54367 97.2102 6.26467C96.8677 5.97667 96.3675 5.83267 95.7095 5.83267H93.925V9.11317H95.7095Z"
                      fill="black"/>
                <path d="M107.262 11.4757H102.868L102.03 13.5007H99.7857L104.004 4.05067H106.167L110.398 13.5007H108.1L107.262 11.4757ZM106.572 9.81517L105.072 6.19717L103.571 9.81517H106.572Z"
                      fill="black"/>
                <path d="M117.41 13.5007L115.585 10.8682H115.477H113.57V13.5007H111.38V4.05067H115.477C116.315 4.05067 117.04 4.19017 117.653 4.46917C118.275 4.74817 118.753 5.14417 119.086 5.65717C119.42 6.17017 119.587 6.77767 119.587 7.47967C119.587 8.18167 119.415 8.78917 119.073 9.30217C118.739 9.80617 118.262 10.1932 117.64 10.4632L119.762 13.5007H117.41ZM117.369 7.47967C117.369 6.94867 117.198 6.54367 116.856 6.26467C116.513 5.97667 116.013 5.83267 115.355 5.83267H113.57V9.12667H115.355C116.013 9.12667 116.513 8.98267 116.856 8.69467C117.198 8.40667 117.369 8.00167 117.369 7.47967Z"
                      fill="black"/>
                <path d="M121.322 4.05067H123.512V13.5007H121.322V4.05067Z" fill="black"/>
                <path d="M134.437 4.05067V13.5007H132.639L127.921 7.76317V13.5007H125.758V4.05067H127.57L132.274 9.78817V4.05067H134.437Z"
                      fill="black"/>
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M9.01299 16.4483C13.1325 16.4483 16.472 13.1136 16.472 9C16.472 4.88643 13.1325 1.55172 9.01299 1.55172C4.89349 1.55172 1.55396 4.88643 1.55396 9C1.55396 13.1136 4.89349 16.4483 9.01299 16.4483ZM9.01299 18C13.9907 18 18.026 13.9706 18.026 9C18.026 4.02944 13.9907 0 9.01299 0C4.03525 0 0 4.02944 0 9C0 13.9706 4.03525 18 9.01299 18Z"
                      fill="black"/>
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M9.01291 0.931201L4.70643 9.54327H13.3194L9.01291 0.931201ZM9.01291 4.40469L7.21929 7.99155H10.8065L9.01291 4.40469Z"
                      fill="black"/>
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M3.87075 11.9483H14.1549L15.3021 14.2392L13.9122 14.9332L13.1945 13.5H4.83115L4.11353 14.9332L2.72362 14.2392L3.87075 11.9483Z"
                      fill="black"/>
            </svg>
        </a>
    </section>
</footer><!-- !footer -->


<!-- MODAL -->
<aside class="modal-call">
    <div class="modal-call__wrapper">
        <h4 class="modal__title">Заказать звонок</h4>

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

<aside class="modal-free">
    <div class="modal-free__wrapper">
        <h4 class="modal__title">Получить бесплатный доступ</h4>

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
            <p class="modal-region__city">Ваш город: Санкт-Петербург?</p><a href="#"
                                                                            class="btn modal-region__btn">да</a>
        </div>
        <div class="modal-region__row">
            <form action="post" method="post" class="form-search modal-region__form"><input type="search"
                                                                                            class="form-search__search modal-region__search"
                                                                                            placeholder="Найди здесь">
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

	    <?php if( have_rows('spisok_gorodov', 'option') ): ?>

            <ul class="modal-region__list">

			    <?php while( have_rows('spisok_gorodov', 'option') ): the_row();

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
</aside>

<aside class="modal-vacancies">
    <div class="modal-vacancies__wrapper">
        <h4 class="modal__title">ОТПРАВИТЬ РЕЗЮМЕ</h4>

        <?php echo do_shortcode('[contact-form-7 id="702" title="ОТПРАВИТЬ РЕЗЮМЕ"]')?>

        <div class="modal-vacancies__exit">
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

</body>
</html>
