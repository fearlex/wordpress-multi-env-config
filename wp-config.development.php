<?php
/**
 * Development environment config settings
 *
 * Enter any WordPress config settings that are specific to this environment 
 * in this file.
 * 
 * @package    QuantumWP WordPress Multi-Environment Config
 * @version    2.0.0
 * @author     Arleys Resco <arleys@quantumwp.com>
 */
  

// ** MySQL settings - You can get this info from your web host ** //
/** MySQL hostname */
define('DB_HOST', 'localhost');

/** The name of the database for WordPress */
define('DB_NAME', '');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password - set in wp-config.local.php */

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true); // Wordpress Debug Mode
define('WP_DEBUG_LOG', true); // Creates debug.log in wp-content
define('WP_DEBUG_DISPLAY', true); // Display Debug Info on Front-End/Admin.
define('WP_LOCAL_DEV', true); // Local Dev Mode
define('SCRIPT_DEBUG', true); // Debug for scripts.
define('SAVEQUERIES', true); // Save MySQL Queries.

