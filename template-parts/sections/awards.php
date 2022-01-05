<?php

$post_objects = get_field( 'nashi_nagrady_i_sertifikaty', 'option' );

if ( $post_objects ): ?>

    <section class="awards">
        <h2 class="awards__title title"><?php the_field( 'nashi_nagrady_i_sertifikaty_-_zagolovok', 'option' ); ?></h2>
        <div class="swiper-container-awards">
            <div class="swiper-wrapper">

				<?php foreach ( $post_objects as $post ): // Переменная должна быть названа обязательно $post (IMPORTANT) ?>
					<?php setup_postdata( $post ); ?>

                    <div class="swiper-slide">
                        <div class="award">
                            <a href="<?php the_post_thumbnail_url(); ?>" class="awards-slider__img fresco"
                               data-fresco-group="awards"><?php the_post_thumbnail( 'certificate' ); ?></a>
                            <h3 class="award__subtitle"><?php the_title(); ?></h3>
                        </div>
                    </div>

				<?php endforeach; ?>

            </div>
            <div class="awards__next">
                <div class="awards-nav__hexagon nav-hexagon nav-hexagon-2">
                    <svg width="38" height="24" viewBox="0 0 38 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M37.9261 12.2002L17.9261 0.65319V23.7472L37.9261 12.2002ZM0 14.2002L19.9261 14.2002V10.2002L0 10.2002L0 14.2002Z"
                              fill="black"/>
                    </svg>
                </div>
            </div>
            <div class="awards__prev">
                <div class="awards-nav__hexagon nav-hexagon">
                    <svg width="39" height="24" viewBox="0 0 39 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.174015 11.7998L20.174 23.3468L20.174 0.252797L0.174015 11.7998ZM38.1002 9.7998L18.174 9.7998L18.174 13.7998L38.1002 13.7998L38.1002 9.7998Z"
                              fill="black"/>
                    </svg>
                </div>
            </div>
        </div>
    </section><!-- !awards -->

	<?php wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?>

<?php endif;

?>
