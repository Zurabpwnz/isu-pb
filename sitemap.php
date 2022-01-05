<?php
/**
 * Template Name: Карта сайта
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

    <section class="wrapper sitemap">
        <h1 class="title"><?php the_title(); ?></h1>


		<?php if ( have_rows( 'straniczy_karty_sajta' ) ): ?>

            <ul class="slides">

				<?php while ( have_rows( 'straniczy_karty_sajta' ) ): the_row();

					// переменные
					$link = get_sub_field( 'stranicza', false, false );

					// проверяем на существование поля
					if ( $link ): ?>
                        <li>
                            <a href="<?php echo get_the_permalink( $link ); ?>">
								<?php echo get_the_title( $link ); ?></a></li>

					<?php endif; ?>
				<?php endwhile; ?>

            </ul>

		<?php endif; ?>
    </section>

<?php

get_footer();
