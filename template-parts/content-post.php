<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package metinkom
 */

?>

<a href="<?php the_permalink(); ?>" class="board-article">
    <div class="board-article__img">
        <img src="<?php the_post_thumbnail_url( 'post-small' ); ?>" alt="<?php the_title(); ?>" class="board-article__trapecoid">
    </div>
    <div class="board-article__title"><?php the_title(); ?></div>
    <div class="board-article__description">
		<?php
		$text = strip_tags( get_the_excerpt() );
		echo mb_substr( $text, 0, 141 ) . '...';
		?>
    </div>
    <div class="board-article__footer">
        <div class="board-article__author"><?php the_author(); ?></div>
        <div class="news-item__views"><span><?php echo getPostViews( get_the_ID() ); ?></span></div>
    </div>
</a>
