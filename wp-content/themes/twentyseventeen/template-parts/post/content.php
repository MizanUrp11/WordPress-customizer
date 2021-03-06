<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	if ( is_sticky() && is_home() ) :
		echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
	endif;
	?>
	<header class="entry-header">
		<?php
		if ( 'post' === get_post_type() ) {
			echo '<div class="entry-meta">';
			if ( is_single() ) {
				twentyseventeen_posted_on();
			} else {
				echo twentyseventeen_time_link();
				twentyseventeen_edit_link();
			};
			echo '</div><!-- .entry-meta -->';
		};

		if ( is_single() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} elseif ( is_front_page() && is_home() ) {
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		} else {
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		}
		?>
	</header><!-- .entry-header -->

	<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
			</a>
		</div><!-- .post-thumbnail -->
	<?php endif; ?>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				/* translators: %s: Post title. */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
				get_the_title()
			)
		);

		$testimonials = get_post_meta( $post->ID, 'testimonials', true );

		if ( $testimonials ) {

			foreach ( $testimonials as $testimonial ) {
				echo "<hr>";
				echo "Name: " . $testimonial['twentyseventeen_tname'] . "<br>";
				echo "Description: " . $testimonial['Description'] . "<br>";
				echo wp_get_attachment_image( $testimonial['Upload Image'][0], 'full' );
			}

		}

		$theme_settings = get_option( 'my_theme_settings');
		echo "<pre>";
		print_r($theme_settings);
		echo "</pre>";

		$team_members              = get_post_meta( $post->ID, 'team_members_group', true );
		$team_members_name         = $team_members['name'];
		$team_members_testimonials = $team_members['team_member_testimonials'];

		foreach ( $team_members_testimonials as $team_members_testimonial ) {
			echo "<hr>";
			echo apply_filters( 'the_content', $team_members_testimonial['name'] );
			echo apply_filters( 'the_content', $team_members_testimonial['description'] );
			echo wp_get_attachment_image( $team_members_testimonial['image'][0], 'full' );
		}


		?>
		<hr>
		<?php
		echo get_post_meta( get_the_ID(  ), 'demo_text', true )."<br>";
		echo "My favorite: ".join(',',get_post_meta($post->ID,'demo_text'))."<br>";
		?>
		<hr>
		<?php

		wp_link_pages(
			array(
				'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
				'after'       => '</div>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php
	if ( is_single() ) {
		twentyseventeen_entry_footer();
	}
	?>

</article><!-- #post-<?php the_ID(); ?> -->
