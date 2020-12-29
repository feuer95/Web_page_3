<?php
/**
 * The header top template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage ExS
 * @since 0.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$exs_intro_position = exs_option( 'intro_position', '' );

//wrapper for topline, header and title
echo '<div id="top-wrap">';


$exs_intro_position = exs_option( 'intro_position', '' );
//intro section on front page after header
if ( exs_is_front_page() && 'before' === $exs_intro_position ) :

	get_template_part( 'template-parts/header/intro' );

endif;

$exs_header_image_url = get_header_image();
if ( ! empty( $exs_header_image_url ) ) :
	$exs_background_image = exs_section_background_image_array( 'header_image', true );
	?>
	<div id="header-image"
	class="i <?php echo esc_attr( $exs_background_image['class'] ); ?>"
	style="background-image: url('<?php echo esc_url( $exs_background_image['url'] ); ?> ');"
	>
<?php
endif; //header_image_url

$exs_header_absolute = exs_option( 'header_absolute', '' );
if ( ! empty( $exs_header_absolute ) ) :
	?>
	<div class="header-absolute-wrap">
	<div class="header-absolute-content">
<?php
endif; //$exs_header_absolute

//topline header section
get_template_part( 'template-parts/header/topline/topline', exs_template_part( 'topline', '' ) );

//header section
get_template_part( 'template-parts/header/header', exs_template_part( 'header', '1' ) );

//title section not on front page
if ( exs_is_title_section_is_shown() ) :
	get_template_part( 'template-parts/title/title', exs_template_part( 'title', '1' ) );
//front page text
else :
	//TODO homepage fullwidth image
	$exs_display_header_text = display_header_text();
	if ( ! empty( $exs_display_header_text ) ) :
		?>
		<h1 class="site-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<?php echo wp_kses_post( get_bloginfo( 'name', 'display' ) ); ?>
			</a>
		</h1>
		<?php
		$exs_description = get_bloginfo( 'description', 'display' );

		if ( $exs_description || is_customize_preview() ) :
			?>
			<p class="site-description"><?php echo wp_kses_post( $exs_description ); ?></p>
		<?php
		endif; //description
	endif; //display_header_text
endif; //exs_is_front_page

if ( ! empty( $exs_header_absolute ) ) :
	?>
	</div><!-- .header-absolute-content -->
	</div><!-- .header-absolute-wrap -->
<?php
endif; //$exs_header_absolute

/**
 * Fires after the header.
 *
 * @since ExS 0.0.1
 */
do_action( 'exs_action_after_header' );

//intro section on front page after header
if ( exs_is_front_page() && 'after' === $exs_intro_position ) :
	get_template_part( 'template-parts/header/intro' );
endif;

if ( ! empty( $exs_header_image_url ) ) :
	?>
	</div><!--#header-image-->
<?php
endif; //$exs_header_image_url

//intro teasers section on front page
if ( exs_is_front_page() ) :
	get_template_part( 'template-parts/header/intro-teasers' );
endif;

echo '</div><!--#top-wrap-->';
