<?php
/**
 * Template Name: Публичная оферта
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

    <section class="introduction">
        <h1 class="title introduction__title"><?php the_title(); ?></h1>
        <div class="board">

            <?php the_content(); ?>

        </div>
    </section>

<?php
get_footer();
