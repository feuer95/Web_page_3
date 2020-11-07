<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>
<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":66.66} -->
	<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:heading {"level":3,"className":"mb-0","textColor":"main","mb":"mb-0"} -->
		<h3 class="mb-0 has-main-color has-text-color">Nulla bibendum interdum!</h3>
		<!-- /wp:heading -->

		<!-- wp:heading {"className":"mt-0","mt":"mt-0"} -->
		<h2 class="mt-0"><strong>Feugiat dolor eleifend vitae</strong></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"className":""} -->
		<p class="">Etiam eu risus porttitor nulla bibendum interdum eu iaculis diam. Aenean auctor orci sem, ut feugiat dolor eleifend vitae.</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"className":""} -->
		<p class="">Nam eleifend elit in odio vehicula, bibendum efficitur mauris blandit. </p>
		<!-- /wp:paragraph --></div>
	<!-- /wp:column -->

	<!-- wp:column {"width":33.33} -->
	<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:html -->
		<form action="#" class="exs-ajax-form">
			<input placeholder="<?php echo esc_attr__( 'Name', 'exs' ); ?>" name="name" type="text" class="d-block mb-05">

			<input placeholder="<?php echo esc_attr__( 'Email', 'exs' ); ?>" name="email" type="email" class="d-block mb-05">

			<textarea placeholder="<?php echo esc_attr__( 'Message', 'exs' ); ?>" name="message" class="d-block mb-05"></textarea>

			<button type="submit" class="wp-block-button__link">
				<?php echo esc_html__( 'Submit', 'exs' ); ?>
			</button>
		</form>
		<!-- /wp:html --></div>
	<!-- /wp:column --></div>
<!-- /wp:columns -->