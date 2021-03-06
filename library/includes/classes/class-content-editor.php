<?php
/**
 * Content Editor class
 *
 * This is a helper class and does not load automatically with the library.
 * Load it directly from within your theme's `functions.php` file.
 *
 * @subpackage  Content Editor
 *
 * @package    WebMan WordPress Theme Framework
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since    1.0.0
 * @version  2.8.0
 *
 * Contents:
 *
 *  0) Init
 * 10) Buttons
 * 20) Custom formats
 * 30) Body class
 */
final class {%= prefix_class %}_Library_Content_Editor {





	/**
	 * 0) Init
	 */

		private static $instance;



		/**
		 * Constructor
		 *
		 * @since    1.0.0
		 * @version  2.8.0
		 */
		private function __construct() {

			// Processing

				// Hooks

					// Filters

						// Editor body class

							if ( is_admin() ) {
								add_filter( 'tiny_mce_before_init', __CLASS__ . '::editor_body_class' );
							}

						// Editor addons

							add_filter( 'mce_buttons',   __CLASS__ . '::add_buttons_row1' );
							add_filter( 'mce_buttons_2', __CLASS__ . '::add_buttons_row2' );

							add_filter( 'tiny_mce_before_init', __CLASS__ . '::style_formats' );

		} // /__construct



		/**
		 * Initialization (get instance)
		 *
		 * @since    1.0.0
		 * @version  1.0.0
		 */
		public static function init() {

			// Processing

				if ( null === self::$instance ) {
					self::$instance = new self;
				}


			// Output

				return self::$instance;

		} // /init





	/**
	 * 10) Buttons
	 */

		/**
		 * Add buttons to content editor
		 *
		 * First row.
		 *
		 * @since    1.0.0
		 * @version  2.7.0
		 *
		 * @param  array $buttons
		 */
		public static function add_buttons_row1( $buttons ) {

			// Processing

				// Inserting buttons after "more" button

					$pos = array_search( 'wp_more', $buttons, true );

					if ( false !== $pos ) {
						$add     = array_slice( $buttons, 0, $pos + 1 );
						$add[]   = 'wp_page';
						$buttons = array_merge( $add, array_slice( $buttons, $pos + 1 ) );
					}


			// Output

				return $buttons;

		} // /add_buttons_row1



		/**
		 * Add buttons to content editor
		 *
		 * Second row.
		 *
		 * @since    1.0.0
		 * @version  2.7.0
		 *
		 * @param  array $buttons
		 */
		public static function add_buttons_row2( $buttons ) {

			// Processing

				// Inserting buttons at the beginning of the row

					array_unshift( $buttons, 'styleselect' );


			// Output

				return $buttons;

		} // /add_buttons_row2





	/**
	 * 20) Custom formats
	 */

		/**
		 * Customizing formats dropdown items
		 *
		 * @link  http://codex.wordpress.org/TinyMCE_Custom_Styles
		 * @link  http://www.tinymce.com/wiki.php/Configuration:style_formats
		 *
		 * @since    1.0.0
		 * @version  2.8.0
		 *
		 * @param  array $init
		 */
		public static function style_formats( $init ) {

			// Processing

				// Add custom formats

					$style_formats = (array) apply_filters( 'wmhook_{%= prefix_hook %}_library_editor_style_formats', array(

						// Group: Text styles

							100 . 'text_styles' => array(
								'title' => esc_html__( 'Text styles', '{%= text_domain %}' ),
								'items' => array(

									100 . 'text_styles' . 100 => array(
										'title'    => esc_html__( 'Dropcap text', '{%= text_domain %}' ),
										'selector' => 'p',
										'classes'  => 'has-drop-cap' . ' dropcap-text',
									),

									100 . 'text_styles' . 110 => array(
										'title'    => esc_html__( 'Uppercase heading or paragraph', '{%= text_domain %}' ),
										'selector' => 'p, h1, h2, h3, h4, h5, h6, address',
										'classes'  => 'is-uppercase' . ' uppercase',
									),

									100 . 'text_styles' . 120 => array(
										'title'  => esc_html__( 'Highlighted (marked) text', '{%= text_domain %}' ),
										'inline' => 'mark',
										'icon'   => ( is_admin() ) ? ( 'backcolor' ) : ( '' ),
									),

									100 . 'text_styles' . 130 => array(
										'title'  => esc_html__( 'Small text', '{%= text_domain %}' ),
										'inline' => 'small',
									),

									100 . 'text_styles' . 140 => array(
										'title'  => esc_html__( 'Superscript', '{%= text_domain %}' ),
										'icon'   => ( is_admin() ) ? ( 'superscript' ) : ( '' ),
										'format' => 'superscript',
									),

									100 . 'text_styles' . 150 => array(
										'title'  => esc_html__( 'Subscript', '{%= text_domain %}' ),
										'icon'   => ( is_admin() ) ? ( 'subscript' ) : ( '' ),
										'format' => 'subscript',
									),

									100 . 'text_styles' . 160 => array(
										'title'    => sprintf( esc_html_x( 'Heading %d text style', '%d = HTML heading size number.', '{%= text_domain %}' ), 1 ),
										'selector' => 'h2, h3, h4, h5, h6, p, address',
										'classes'  => 'h1',
									),

									100 . 'text_styles' . 170 => array(
										'title'    => sprintf( esc_html_x( 'Heading %d text style', '%d = HTML heading size number.', '{%= text_domain %}' ), 2 ),
										'selector' => 'h3, h4, h5, h6, h1, p, address',
										'classes'  => 'h2',
									),

									100 . 'text_styles' . 180 => array(
										'title'    => sprintf( esc_html_x( 'Heading %d text style', '%d = HTML heading size number.', '{%= text_domain %}' ), 3 ),
										'selector' => 'h4, h5, h6, h1, h2, p, address',
										'classes'  => 'h3',
									),

								),
							),

						// Group: Text size

							200 . 'text_sizes' => array(
								'title' => esc_html__( 'Text sizes', '{%= text_domain %}' ),
								'items' => array(

									200 . 'text_sizes' . 100 => array(
										'title'    => sprintf( esc_html_x( 'Display %d', '%d: Display text size number.', '{%= text_domain %}' ), 1 ),
										'selector' => 'p, h1, h2, h3, h4, h5, h6, address',
										'classes'  => 'has-display-1-font-size' . ' display-1',
									),

									200 . 'text_sizes' . 110 => array(
										'title'    => sprintf( esc_html_x( 'Display %d', '%d: Display text size number.', '{%= text_domain %}' ), 2 ),
										'selector' => 'p, h1, h2, h3, h4, h5, h6, address',
										'classes'  => 'has-display-2-font-size' . ' display-2',
									),

									200 . 'text_sizes' . 120 => array(
										'title'    => sprintf( esc_html_x( 'Display %d', '%d: Display text size number.', '{%= text_domain %}' ), 3 ),
										'selector' => 'p, h1, h2, h3, h4, h5, h6, address',
										'classes'  => 'has-display-3-font-size' . ' display-3',
									),

									200 . 'text_sizes' . 130 => array(
										'title'    => sprintf( esc_html_x( 'Display %d', '%d: Display text size number.', '{%= text_domain %}' ), 4 ),
										'selector' => 'p, h1, h2, h3, h4, h5, h6, address',
										'classes'  => 'has-display-4-font-size' . ' display-4',
									),

								),
							),

						// Group: Quotes

							300 . 'quotes' => array(
								'title' => esc_html_x( 'Quotes', 'Content editor blockquote formats group title.', '{%= text_domain %}' ),
								'items' => array(

									300 . 'quotes' . 100 => array(
										'title' => esc_html__( 'Blockquote', '{%= text_domain %}' ),
										'block' => 'blockquote',
										'icon'  => ( is_admin() ) ? ( 'blockquote' ) : ( '' ),
									),

									300 . 'quotes' . 110 => array(
										'title'   => esc_html__( 'Pullquote - align left', '{%= text_domain %}' ),
										'block'   => 'blockquote',
										'classes' => 'pullquote alignleft',
										'icon'    => ( is_admin() ) ? ( 'alignleft' ) : ( '' ),
									),

									300 . 'quotes' . 120 => array(
										'title'   => esc_html__( 'Pullquote - align right', '{%= text_domain %}' ),
										'block'   => 'blockquote',
										'classes' => 'pullquote alignright',
										'icon'    => ( is_admin() ) ? ( 'alignright' ) : ( '' ),
									),

									300 . 'quotes' . 130 => array(
										'title'  => esc_html_x( 'Cite', 'Content editor format label for HTML CITE tag used to set the blockquote source.', '{%= text_domain %}' ),
										'inline' => 'cite',
									),

								),
							),

					) );

					ksort( $style_formats );

						foreach ( $style_formats as $group_key => $group ) {
							if ( isset( $group['items'] ) ) {

								ksort( $group['items'] );
								$style_formats[ $group_key ]['items'] = $group['items'];

							}
						}

					if ( ! empty( $style_formats ) ) {

						// Merge old & new formats

							$init['style_formats_merge'] = false;

						// New formats

							$init['style_formats'] = json_encode( $style_formats );

					}

				// Removing obsolete tags (this is localized already)

					$heading_1 = ( is_admin() ) ? ( '' ) : ( 'Heading 1=h1;' ); // Do not add H1 when in admin, but add it in front-end editor.

					$init['block_formats'] = 'Paragraph=p;' . $heading_1 . 'Heading 2=h2;Heading 3=h3;Heading 4=h4;Address=address;Preformatted=pre;Code=code';


			// Output

				return $init;

		} // /style_formats





	/**
	 * 30) Body class
	 */

		/**
		 * Adding editor HTML body classes.
		 *
		 * @since    1.7.2
		 * @version  2.8.0
		 *
		 * @param  array $init
		 */
		public static function editor_body_class( $init ) {

			// Requirements check

				if ( ! isset( $init['body_class'] ) ) {
					return $init;
				}


			// Processing

				// Compatibility with `main.css` styles.
				$init['body_class'] .= ' entry-content '; // TinyMCE only.


			// Output

				return $init;

		} // /editor_body_class





} // /{%= prefix_class %}_Library_Content_Editor

add_action( 'init', '{%= prefix_class %}_Library_Content_Editor::init' );
