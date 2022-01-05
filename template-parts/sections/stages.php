<?php

$post_objects = get_field( 'etapy_raboty', 'option' );

if ( $post_objects ): ?>

    <section class="stages">
        <h2 class="stages__title title"><?php the_field( 'etapy_raboty_-_zagolovok', 'option' ); ?></h2>
        <div class="stages-content">
            <ol class="stages-list">

				<?php foreach ( $post_objects as $key => $post ): $key ++; // Переменная должна быть названа обязательно $post (IMPORTANT) ?>
					<?php setup_postdata( $post ); ?>

                    <li class="stages-list__item">
                        <p class="stages-list__link js-stages__link"><span class="stages-list__hexagon"><?php echo $key; ?></span><?php the_title(); ?></p>
                        <div class="stages-tabs__wrapper js-stages__tab">
                            <div class="stages-tabs">
                                <div class="stages-tabs__tab">
                                    <div class="stages-tabs__subtitle"><?php the_field( 'etap_-_kratkoe_opisanie' ); ?></div>
                                    <div class="stages-tabs__title"><?php the_field( 'etap_-_zagolovok_preimushhestv' ); ?></div>

									<?php if ( have_rows( 'etap_-_spisok_preimushhestv' ) ): ?>

                                        <ul class="stages-tabs__list">

											<?php while ( have_rows( 'etap_-_spisok_preimushhestv' ) ): the_row();

												$content = get_sub_field( 'tekst' );

												?>

                                                <li class="stages-tabs__item"><?php echo $content; ?></li>

											<?php endwhile; ?>

                                        </ul>

									<?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </li>

				<?php endforeach; ?>

            </ol>
        </div>
    </section><!-- !stages -->

	<?php wp_reset_postdata();
endif;

?>
