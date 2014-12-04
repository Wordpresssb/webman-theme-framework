<?php
/**
 * Theme Customizer Input Fields
 *
 * Customizer multi checkbox fields.
 *
 * @package     WebMan WordPress Theme Framework
 * @subpackage  Theme Customizer
 * @copyright   2014 WebMan - Oliver Juhas
 *
 * @since    3.1
 * @version  4.0
 */



/**
 * Multiselect
 */
class WM_Customizer_Multiselect extends WP_Customize_Control {

	public function render_content() {
		if ( ! empty( $this->choices ) && is_array( $this->choices ) ) {
			?>

			<label>
				<span class="customize-control-title"><?php echo $this->label; ?></span>
				<?php if ( $this->description ) : ?><span class="description customize-control-description"><?php echo $this->description; ?></span><?php endif; ?>

				<select name="<?php echo $this->id; ?>" multiple="multiple" <?php $this->link(); ?>>

					<?php

					foreach ( $this->choices as $value => $name ) {

						echo '<option value="' . $value . '" ' . selected( $this->value(), $value, false ) . '>' . $name . '</option>';

					}

					?>

				</select>
				<em><?php _e( 'Press CTRL key for multiple selection.', 'wm_domain' ); ?></em>
			</label>

			<?php
		}
	}

} // /WM_Customizer_Multiselect

?>