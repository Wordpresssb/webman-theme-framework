<?php
/**
 * Customizer custom controls
 *
 * Customizer custom HTML.
 *
 * @subpackage  Customize
 *
 * @package    WebMan WordPress Theme Framework
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since    1.0.0
 * @version  2.8.0
 */
class {%= prefix_class %}_Customize_Control_HTML extends WP_Customize_Control {

	public $type = 'html';

	public $content = '';



	public function render_content() {

		// Output

			if ( isset( $this->label ) && ! empty( $this->label ) ) {
				echo '<span class="customize-control-title">' . $this->label . '</span>';
			}

			if ( isset( $this->content ) ) {
				echo wp_kses_post( $this->content );
			} else {
				esc_html_e( 'Please set the `content` parameter for the HTML control.', '{%= text_domain %}' );
			}

			if ( isset( $this->description ) && ! empty( $this->description ) ) {
				echo '<span class="description customize-control-description">' . $this->description . '</span>';
			}

	} // /render_content

} // /{%= prefix_class %}_Customize_Control_HTML
