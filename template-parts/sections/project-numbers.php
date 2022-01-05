<?php if ( have_rows( 'czifry','option' ) ): ?>

	<section class="project-numbers">
		<h2 class="project-numbers__title title"><?php the_field( 'czifry_zagolovok', 'option' ); ?></h2>
		<div class="numbers">

			<?php while ( have_rows( 'czifry', 'option' ) ): the_row();

				// переменные
				$czifra    = get_sub_field( 'czifra' );
				$zagolovok = get_sub_field( 'zagolovok' );

				?>

				<div class="number">
					<div class="number__num" data-max="<?php echo $czifra; ?>">0</div>
					<h3 class="number__subtitle"><?php echo $zagolovok; ?></h3>
				</div>

			<?php endwhile; ?>

		</div>
	</section><!-- !project-numbers -->

<?php endif; ?>
