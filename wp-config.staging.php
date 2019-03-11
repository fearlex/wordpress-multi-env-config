<?php
/**
 * Staging environment config settings
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
define('DB_USER', '');

/** MySQL database password - set in wp-config.local.php */

/**
 * For developers: WordPress debugging mode.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true ); // Wordpress Debug Mode
define( 'WP_DEBUG_LOG', true ); // Creates debug.log in wp-content
define( 'WP_DEBUG_DISPLAY', false ); // Display Debug Info on Front-End/Admin.
define( 'SCRIPT_DEBUG', false ); // Debug for scripts.
define( 'SAVEQUERIES', false ); // Save MySQL Queries.


// Recommended WP config settings, uncomment to use these

/**
 * Disable theme/plugin upload.
 */
//define( 'DISALLOW_FILE_MODS', true );