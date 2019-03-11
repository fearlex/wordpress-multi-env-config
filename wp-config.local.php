<?php
/**
 * Local settings, you should keep these outside of version control
 *
 * Please note this file is loaded first, then the environment config is loaded.
 * Don't duplicate any WP config settings in this file and the environment file
 * since WordPress uses constants and you'll raise a PHP notice error.
 *
 * Enter any WordPress config settings that are specific to the local environment
 * in this file.
 *
 * @package    QuantumWP WordPress Multi-Environment Config
 * @version    2.0.0
 * @author     Arleys Resco <arleys@quantumwp.com>
 */


/** MySQL database password */
define( 'DB_PASSWORD', 'fearlexroot!' );

//-- Staging
//define( 'DB_PASSWORD', 'STAGING_PASSWORD' );

//-- Production
//define( 'DB_PASSWORD', 'PRODUCTION_PASSWORD' );

