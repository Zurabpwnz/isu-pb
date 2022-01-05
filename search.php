<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package isupb
 */

get_header();
?>

    <main>
        <section class="search">
            <h1 class="title search__title"><?php
	            /* translators: %s: search query. */
	            printf( esc_html__( 'Результат поиска: %s', 'isupb' ), '<span>' . get_search_query() . '</span>' );
	            ?></h1>

            <nav class="search__list">
	            <?php if ( have_posts() ) : ?>
		            <?php
		            /* Start the Loop */
		            while ( have_posts() ) :
			            the_post();

			            /**
			             * Run the loop for the search to output the results.
			             * If you want to overload this in a child theme then include a file
			             * called content-search.php and that will be used instead.
			             */
			            get_template_part( 'template-parts/content', 'search' );

		            endwhile;

		            the_posts_pagination( array(
			            'end_size'  => 2,
			            'prev_text' => __( 'Начало' ),
			            'next_text' => __( 'Конец' ),
		            ) );

	            else :

		            get_template_part( 'template-parts/content', 'none' );

	            endif;
	            ?>

            </nav>
        </section>
    </main>

<?php
get_footer();
