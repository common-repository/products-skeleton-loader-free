<?php
/**
 * Fired during plugin activation
 *
 * @link       https://codecanyon.net/user/technodigitz/portfolio
 * @since      1.0.0
 *
 * @package    pslfree
 * @subpackage pslfree/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    pslfree
 * @subpackage pslfree/includes
 * @author     technodigitz   <Support@technodigitz.com>
 */
class Pslfree_Activator {

	/**
	 * Update Default Options upon plugin first activation
	 *
	 * @since    1.0.0
	 */
	public function activate() {

		if ( ! get_option( 'pslfree_switch' ) ) {
			update_option( 'pslfree_switch', 'enabled' );
		}
	}
}

