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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'asentus' );

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
define( 'AUTH_KEY',         ')kO,h2y;}1JKR4i=M}]-TC9R)%ppkFhhrN$Qo#^J0_>mn0C~]{Ca?$Ev]e5x)7F?' );
define( 'SECURE_AUTH_KEY',  'po*:kD!Iufc0)q$s~i`. )H!@vc*W}Z3%`oK>~u^(`IR6Sdr%8Fw&z@<6*Y3&o`}' );
define( 'LOGGED_IN_KEY',    '@&wc0nK!u!]VLs+R3?4~VRi!IvQ|Y8!;|v&Gz=ky>8Q,lkpw`:@Z>iU>J3cW!rso' );
define( 'NONCE_KEY',        '& {rQ.LV#[Ims0/mqBk95)G~CVcKYO-!@R]NJ-9-Q@~4//%{J;vAP5P!(l%.746x' );
define( 'AUTH_SALT',        'x^?(;5(tb_ 0Z!8Wz%/^kG|o?*bJFI{bVcH[`YLW|NL$NE6x)T#[tA0;=i;spH<N' );
define( 'SECURE_AUTH_SALT', '.8}%)b`VCu7p8(/0#oay?6c*!IKj6IrZm:ZWE}c!QJ+tM^NS0A8JrjbuuGUy=]<|' );
define( 'LOGGED_IN_SALT',   '$6z*#;eJZ)/W?91hGg{EYs!)xkatA>!329Kl0@gA#ft9mG2O&aQDiI+lMWP-%28O' );
define( 'NONCE_SALT',       'L!sK(-TxZp#iJq|:Z_S=T?t|@j-f{6VK/2jo}V#5A0_^zwhzLO+uwv))t,Ibd/d,' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
