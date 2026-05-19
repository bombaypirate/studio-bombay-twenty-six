<?php
/**
 * Enqueue Google Fonts for both front-end and block editor.
 */
if ( ! function_exists( 'studio_bombay_twenty_six_fonts' ) ) {
	function studio_bombay_twenty_six_fonts(): void {
		wp_enqueue_style(
			'studio-bombay-twenty-six-fonts',
			'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;0,900;1,400&family=Space+Mono:ital,wght@0,400;0,700;1,400&display=swap',
			array(),
			null
		);
	}
}
add_action( 'enqueue_block_assets', 'studio_bombay_twenty_six_fonts' );