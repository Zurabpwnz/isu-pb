<section class="query">
    <div class="query-text">
        <h2 class="query-text__title"><?php the_field( 'forma_-_ostavit_zayavku_-_zagolovok', 'option' ); ?></h2>
    </div>
    <div class="query-form">
      <?php echo do_shortcode('[contact-form-7 id="729" title="ОСТАВИТЬ ЗАЯВКУ НА ПРЕДПРОЕКТНОЕ ОБСЛЕДОВАНИЕ"]')?>
    </div>

    <div class="query-img">

		<?php

		$image = get_field( 'forma_-_ostavit_zayavku_-_ikonka', 'option' );

		if ( ! empty( $image ) ): ?>

            <img width="190" height="200" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>

		<?php endif; ?>

    </div>
</section> <!-- !query -->
