<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package isupb
 */

get_header();
?>

    <main>
        <section class="page404">
            <h1 class="page404__title"><?php the_field( 'error-desc','option' ); ?></h1>
            <div class="page404__img">
	            <?php

	            $image = get_field('img-404', 'option');

	            if( !empty($image) ): ?>

                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

	            <?php endif; ?>
            </div>
            <a href="/" class="btn page404__btn">вернуться</a>
        </section>
    </main>

<?php
get_footer();
