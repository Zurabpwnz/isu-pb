<?php
/**
 * The template for displaying all pages
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


<?php if ( function_exists( 'kama_breadcrumbs' ) ) {
	kama_breadcrumbs( '' );
} ?>


    <div class="security">
        <h1 class="title-left security__title"><?php the_title(); ?></h1>
    </div>

    <section class="text-img">
        <div class="text-img__text"><?php the_content(); ?></div>
        <div class="text-img__img"><?php the_post_thumbnail( 'page-thumb' ); ?></div>
    </section>


<?php
//
//$post_objects = get_field( 'stranicza_-_moduli' );
//
//if ( $post_objects ): ?>
<!---->
<!--    <section class="modules">-->
<!---->
<!--		--><?php //foreach ( $post_objects as $post ): // Переменная должна быть названа обязательно $post (IMPORTANT) ?>
<!--			--><?php //setup_postdata( $post ); ?>
<!---->
<!--            <div class="module module-big">-->
<!--                <div class="module__img module__img-big">-->
<!--                    <a href="--><?php //the_permalink(); ?><!--">--><?php //the_post_thumbnail( array( 140, 140 ) ); ?><!--</a></div>-->
<!--                <div class="module__text"><a href="--><?php //the_permalink(); ?><!--">--><?php //the_title(); ?><!--</a></div>-->
<!--            </div>-->
<!---->
<!--		--><?php //endforeach; ?>
<!---->
<!--    </section>-->
<!---->
<!--	--><?php //wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?>
<?php //endif;
//
//?>


<?php
get_template_part( 'template-parts/sections/find-cost' );
get_template_part( 'template-parts/sections/projects' );
?>


<?php

$post_objects = get_field( 'stranicza_-_drugie_moduli' );

if ( $post_objects ): ?>
    <section class="awards module-more">
        <h2 class="module-more__title title"><?php the_field( 'stranicza_-_drugie_moduli_-_zagolovok' ); ?></h2>
        <div class="swiper-container-module">
            <div class="swiper-wrapper">

				<?php foreach ( $post_objects as $post ): // Переменная должна быть названа обязательно $post (IMPORTANT) ?>
					<?php setup_postdata( $post ); ?>

                    <div class="swiper-slide">
                        <div class="award module-more__item module module-big">
                            <div class="module__img module__img-big">
                                <a href="<?php the_permalink(); ?>" class="award__img module-more__img">
									<?php the_post_thumbnail( array( 238, 208 ) ); ?></a>
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


<?php get_template_part( 'template-parts/sections/questions-remain' ); ?>


<?php if ( have_rows( 'statya_-_tegi' ) ): ?>

    <section class="popular-requries">
        <div class="characteristics__content popular-requries__content">
            <div class="characteristics__slider popular-requries__slider">
                <div class="swiper-container-tags">
                    <div class="swiper-wrapper">

						<?php while ( have_rows( 'statya_-_tegi' ) ): the_row();

							$title = get_sub_field( 'nazvanie_tega' );
							$link  = get_sub_field( 'ssylka_tega' );

							?>

                            <div class="swiper-slide swiper-slide__wauto">
                                <a href="#" class="characteristic"><?php echo $title; ?></a></div>

						<?php endwhile; ?>

                    </div>
                </div>
                <div class="tags__next">
                    <div class="awards-nav__hexagon nav-hexagon nav-hexagon-2">
                        <svg width="38" height="24" viewBox="0 0 38 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M37.9261 12.2002L17.9261 0.65319V23.7472L37.9261 12.2002ZM0 14.2002L19.9261 14.2002V10.2002L0 10.2002L0 14.2002Z"
                                  fill="black"/>
                        </svg>
                    </div>
                </div>
                <div class="tags__prev">
                    <div class="awards-nav__hexagon nav-hexagon">
                        <svg width="39" height="24" viewBox="0 0 39 24" fill="none" xmlns="http://www.w3.org/2000/svg">
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
