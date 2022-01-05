<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package isupb
 */

get_header();

$pageId = get_queried_object()->ID;
$post_page_title = get_the_title( get_option('page_for_posts', true) );
?>

<?php if ( function_exists( 'kama_breadcrumbs' ) ) {
	kama_breadcrumbs( '' );
} ?>


<?php
if ( have_posts() ) : ?>

    <section class="articles wrapper">
        <h1 class="articles__title title"><?php echo $post_page_title ?></h1>
        <!-- ЕСЛИ НУЖНО ДОБАВЛЯТЬ ОБРЕЗКУ КАРТИНКИ ТО БЛОК ОБОРАЧИВАЕТСЯ В ДОПОЛНИТЕЛЬНЫЙ div БЕЗ КЛАССА, ЕСЛИ НЕТ ТО НЕТ -->
        <div class="board">


			<?php /* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile; ?>

        </div>

	    <?php

	    the_posts_pagination( array(
		    'end_size'  => 2,
		    'prev_text' => __( 'Начало' ),
		    'next_text' => __( 'Конец' ),
	    ) );

	    ?>

    </section>

	<?php else :

	get_template_part( 'template-parts/content', 'none' ); ?>

<?php endif;
?>

<?php get_template_part( 'template-parts/sections/questions-remain' ); ?>

<?php
get_footer();
