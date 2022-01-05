<?php

$post_objects = get_field( 'otzyvy_klientov_-_otzyvy', 'option' );

if ( $post_objects ): ?>

111

    <section class="reviews awards">
        <h2 class="awards__title title"><?php the_field( 'otzyvy_klientov_-_zagolovok', 'option' ); ?></h2>
        <div class="swiper-container-reviews">
            <div class="swiper-wrapper">

				<?php foreach ( $post_objects as $post ): // Переменная должна быть названа обязательно $post (IMPORTANT) ?>
					<?php setup_postdata( $post ); ?>

                    <div class="swiper-slide">
                        <div class="awards-slider">
                            <a href="<?php the_post_thumbnail_url( 'full' ); ?>"
                               class="awards-slider__img fresco"
                               data-fresco-group="reviews"><?php the_post_thumbnail( 'review' ); ?></a>
                        </div>
                    </div>

				<?php endforeach; ?>

            </div>
            <div class="reviews__next">
                <div class="awards-nav__hexagon nav-hexagon nav-hexagon-2">
                    <svg width="38" height="24" viewBox="0 0 38 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M37.9261 12.2002L17.9261 0.65319V23.7472L37.9261 12.2002ZM0 14.2002L19.9261 14.2002V10.2002L0 10.2002L0 14.2002Z"
                              fill="black"/>
                    </svg>
                </div>

            </div>
            <div class="reviews__prev">
                <div class="awards-nav__hexagon nav-hexagon">
                    <svg width="39" height="24" viewBox="0 0 39 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.174015 11.7998L20.174 23.3468L20.174 0.252797L0.174015 11.7998ZM38.1002 9.7998L18.174 9.7998L18.174 13.7998L38.1002 13.7998L38.1002 9.7998Z"
                              fill="black"/>
                    </svg>
                </div>
            </div>
        </div>
    </section> <!-- !reviews -->

	<?php wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?>
<?php endif;

?>
