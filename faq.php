<?php
/**
 * Template Name: Вопрос-Ответ(FAQ)
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

    <section class="wrapper block-faq">
        <h1 class="title block-faq__title"><?php the_field( 'faq_zagolovok_h1' ); ?></h1>
        <div class="faq-content">

            <div class="questions">
                <form role="search" method="get" class="searchform form-questions">
                    <input type="text" name="elastic" id="elastic" class="form-input form-questions__search">
                    <button class="btn form-questions__submit">
                        <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="9.5" cy="9" r="8" stroke="white" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"/>
                            <path d="M19.5004 19L15.1504 14.65" stroke="white" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                    </button>
                </form>

				<?php $q = new WP_Query( array(
					'post_type'      => 'faq',
					'posts_per_page' => - 1,
				) ); ?>
				<?php if ( $q->have_posts() ) : ?>
                    <div class="elastic">

						<?php
						$i = 1;
						while ( $q->have_posts() ) : $q->the_post();
							$i ++; ?>

							<?php if ( get_the_title() && get_the_content() ) { ?>
                                <div class="questions-item" data-title="<?php the_title(); ?>">
                                    <div class="questions-item__title"><?php the_title(); ?></div>
                                    <div class="questions-item__text">
                                        <p class="text-paragraph"><?php the_content(); ?><p>
                                    </div>
                                </div>
							<?php } ?>

						<?php endwhile;
						wp_reset_postdata();
						?>

                    </div>
				<?php endif; ?>

            </div>

            <aside class="form-call">
                <h2 class="form-call__title"><?php the_field( 'faq_-_forma_-_zagolovok' ); ?></h2>
                <h3 class="form-call__subtitle"><?php the_field( 'faq_-_forma_-_podzagolovok' ); ?></h3>

				<?php echo do_shortcode( '[contact-form-7 id="794" title="FAQ Форма"]' ) ?>

            </aside>
        </div>
    </section>

<?php
get_footer( 'vacancies' );
