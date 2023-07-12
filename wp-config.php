<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('AUTH_KEY',         'RPbb7OxWbh6pTD8SmZSOoXgB+eAcUYdSp89br/L3d9Y7XUZ5LK+zUuYbZ85mer7rvdhTqZtGnVXz64YYsIDIgw==');
define('SECURE_AUTH_KEY',  'l4jd8J3GKIqmcM7OXs3Ku8BYSwCfGogaB272qhJFKzcDF5NdMtfzID7eMnRmOxk8m0eDv1ItJVrl7nL7WBb5Cw==');
define('LOGGED_IN_KEY',    'y+DSKyJRdjrNmVAoMJmPfVQ5Sh4KZB8zmflUSPdILR3A7K6zE4IIuDxewFYWQU0RpLi08UtIO/Yu6rlkK7c7jg==');
define('NONCE_KEY',        'Ib+IymcRHczL8KtUYn6Q5vBUbLLGIhDmUMm1O0mNILUJiJk7L/4lEcfAyxEeBtAJi7Dfj97FSH9pTSeFZmlLLA==');
define('AUTH_SALT',        'yikNshj8q0s5VaIUoP+TdQq6D3HZ+7EkVBayQSdd1k6fgnO/dn/L9EAetFaFpoitvoqnwdFV9THTPHZJmjGqVw==');
define('SECURE_AUTH_SALT', '7YxPwTT7J/ZeWne2G2GFafovjcjxuJbuErc1dxlEX/zBd6gk/rE2BLtU4g0ArnbGmm6omRjWPxz7iHVbTpVCDA==');
define('LOGGED_IN_SALT',   'mi2lbHiNI8IqR0X+FKrt2w5FeHGyS+erSoCUSIQ5qdTFB6V0CFR6umIL21KU5YEBxcV5v+6BPzihfpsgtsoj5Q==');
define('NONCE_SALT',       'FsSYo99G7yok8G7JD0dJ4lJ4n65rw6TrJxYulZcMlrxoaLIpfT/ZmaWNeG5mK4sbDiirUWyF3KYtab/6Hwy83Q==');