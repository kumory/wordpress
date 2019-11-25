<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_ejemplo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1SCp$5m{D@TG1;?]>u:pvA?:$XICJyG>q;5%5k4v.79v=NDzM?S!<WacbKOL9L<n' );
define( 'SECURE_AUTH_KEY',  '`8F6>ks$nh13!. gD1R30])!o`l]FLhC?EThct61ZiK?{>^VnV^&oSzn?|UEW]`V' );
define( 'LOGGED_IN_KEY',    'i(c<MSNprr/{p#1YqtAly]ENoTVmw5|4>@ B9BOJHq_3,O$?@?o,FK*Kw3b>C2e#' );
define( 'NONCE_KEY',        'Ii>rW>NXc<zqdxgsfcwHz qOYMAbUAv9-EKzgB%rsJGf,4G+Y?3&[;bQK|Ii?ex)' );
define( 'AUTH_SALT',        '-On?*5}?wP?/>FSeOEw;e:hExndgMRn4WzjnzK}w;a>%q9Ocg,KZVR;6dI9(-)Cb' );
define( 'SECURE_AUTH_SALT', 'x:`:YtOw7Zd.v>qPAm$QpYo8nF-zmOu}mz.9&MjWU,]8+sRk!2sFHt)1A:bI!qU}' );
define( 'LOGGED_IN_SALT',   '<*I++)0*D#|SY };kLB9Tw8B S`ZG1tkjw9W7cm.xInGY((`zK]t(6:(zyagUy?i' );
define( 'NONCE_SALT',       '?c%`$t:WO11K4I2Z/tjYjjbe&NB89M`z>j]p=-jfWt6fi/K56Y%b$3_)owX?>>W8' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
