<?php
/**
 * Template Name: Complete Archives Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The archives template
 * in amyunus consists of a page content area for diplaying all post in different layout.
 *
 * @package amyunus
 * @since amyunus 1.2
 */

get_header(); ?>

		<section id="primary" class="content-area">
			<div id="content" class="site-content" role="main">

			<?php
				$args= array( 'nopaging' => 'true' );
				$wp_query = new WP_Query($args);
				if ( $wp_query->have_posts() ) :
			?>

				<header class="entry-header">
					<h1 class="entry-title">
						<?php _e( 'Archives', 'amyunus' ); ?>
					</h1>
				</header><!-- .entry-header -->

				<?php // amyunus_content_nav( 'nav-above' ); ?>

				<?php /* Start the Loop */ ?>
				<ol class="archive-list">
				<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

					<?php
						$text = '<li class="archive-entry"><a href="%1$s"><span class="archive-title">%2$s</span><span class="archive-meta">%3$s</span></a></li>';
						printf(
							$text,
							get_permalink(),
							get_the_title(),
							get_the_date()
						);
					?>

				<?php endwhile; ?>
				<ol>

				<?php // amyunus_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<?php get_template_part( 'no-results', 'archive' ); ?>

			<?php endif; ?>
			<?php wp_reset_postdata(); ?>

			</div><!-- #content .site-content -->
		</section><!-- #primary .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>