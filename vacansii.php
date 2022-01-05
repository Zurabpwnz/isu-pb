<?php
/**
 * Template Name: Вакансии
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


    <section class="vacancies">
        <h1 class="title vacancies__title"><?php the_field( 'vakansii_zagolovok_h1' ); ?></h1>

		<?php

		// Сначала получаем термины кастомной таксономии:
		$terms = get_terms( [
			'taxonomy'   => 'otdel', // тут укажите правильное название вашей таксономии
			'hide_empty' => true,
		] );

		// Далее циклом выводим эти блоки:
		foreach ( $terms as $term ) : ?>
            <div class="vacancies__block">
                <!-- отдел -->
                <div class="vacancies__subtitle"><?php echo $term->name ?></div>

				<?php // Получаем Х записей с конкретным термином, формируем параметры запроса:
				$args = [
					'post_type'      => 'vakansii', // тут укажите правильное название вашего custom post type
					'posts_per_page' => 5,// количество записей
					'tax_query'      => [
						[
							'taxonomy'         => 'otdel',
							// тут укажите правильное название вашей таксономии
							'field'            => 'term_id',
							// term_id, slug или name - что удобнее
							'terms'            => $term->term_id,
							// ID текущего термина в цикле
							'include_children' => false,
						],
					],
				];

				// Получаем Х записей с конкретным термином:
				$posts_with_term = new WP_Query( $args );

				// Выводим записи циклом:
				while ( $posts_with_term->have_posts() ) : $posts_with_term->the_post(); ?>

                    <div class="vacancy">
                        <header class="vacancy__header">
                            <div class="vacancy__title">
                                <div class="vacancy__img">
                                    <svg width="13" height="20" viewBox="0 0 13 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.59961 0.0869789L0.826107 10.087L12.3731 10.087L6.59961 0.0869789ZM7.59961 19.05L7.59961 9.08698L5.59961 9.08698L5.59961 19.05L7.59961 19.05Z"
                                              fill="black"/>
                                    </svg>
                                </div><?php the_title(); ?></div>

                            <div class="vacancy__price">Зарплата от <span><?php the_field( 'zarplata' ); ?></span></div>
                        </header>
                        <div class="vacancy__content">
                            <div class="vacancy__description"><?php the_content(); ?></div>
                            <button class="btn vacancy__submit js-vacancies">Отправить резюме</button>
                        </div>
                    </div>

				<?php endwhile;
				wp_reset_postdata(); ?>

            </div>

		<?php endforeach;
		?>

    </section>

<?php
get_footer('vacancies');
