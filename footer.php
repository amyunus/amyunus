<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package amyunus
 * @since amyunus 1.0
 */
?>

	</div><!-- #main .site-main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'amyunus_credits' ); ?>
			<a href="//wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'amyunus' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'amyunus' ), 'WordPress', '<a href="//www.amyunus.com/" rel="author">AMYunus</a>' ); ?></a>
			<span class="sep"> | </span>
			<a href="//www.amyunus.com/themes/amyunus-wordpress-theme/" title="<?php esc_attr_e( 'Theme styler', 'amyunus' ); ?>" rel="generator"><?php printf( __( 'Theme styled by %s', 'amyunus' ), 'AMYunus' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</body>
</html>