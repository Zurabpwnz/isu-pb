<section class="requisition">
    <div class="requisition-img">
        <svg class="requisition-img__hexagon" width="260" height="300" viewBox="0 0 260 300" fill="none"
             xmlns="http://www.w3.org/2000/svg">
            <g style="mix-blend-mode:hard-light">
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M130.22 0L0.220301 75.1905L0 225.19L129.78 300L259.78 224.81L260 74.8095L130.22 0Z"
                      fill="#7E7E7E"/>
            </g>
        </svg>
        <svg class="requisition-img__hexagon" width="260" height="300" viewBox="0 0 260 300" fill="none"
             xmlns="http://www.w3.org/2000/svg">
            <g style="mix-blend-mode:hard-light">
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M130.22 0L0.220301 75.1905L0 225.19L129.78 300L259.78 224.81L260 74.8095L130.22 0Z"
                      fill="#7D7D7D"/>
            </g>
        </svg>
        <svg class="requisition-img__hexagon" width="260" height="300" viewBox="0 0 260 300" fill="none"
             xmlns="http://www.w3.org/2000/svg">
            <g style="mix-blend-mode:hard-light">
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M130.22 0L0.220301 75.1905L0 225.19L129.78 300L259.78 224.81L260 74.8095L130.22 0Z"
                      fill="#777777"/>
            </g>
        </svg>
        <div class="request__hexagon requisition-img__hexagon">
            <svg width="188" height="116" viewBox="0 0 188 116" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M188 58L88 0.264973V115.735L188 58ZM0 68H98V48H0V68Z" fill="white"/>
            </svg>
        </div>
    </div>
    <div class="requisition-text">
        <div class="requisition-text__title"><?php the_field( 'forma_-_zakazat_prezentacziyu_-_zagolovok', 'option' ); ?></div>

		<?php if ( have_rows( 'forma_-_zakazat_prezentacziyu_-_opisanie', 'option' ) ): ?>
			<?php while ( have_rows( 'forma_-_zakazat_prezentacziyu_-_opisanie', 'option' ) ): the_row();

				$content = get_sub_field( 'tekst' ); ?>

                <div class="requisition-text__subtitle">

					<?php echo $content; ?>

                </div>

			<?php endwhile; ?>
		<?php endif; ?>

    </div>

	<?php echo do_shortcode( '[contact-form-7 id="870" title="Заказать презентацию"]' ); ?>

</section><!-- !requisition -->
