<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u6932841_wp474' );

/** MySQL database username */
define( 'DB_USER', 'u6932841_wp474' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pu)6SK45E@' );

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
define( 'AUTH_KEY',         'aep9uxmehfr5cd2kppzp2i2jiqmozeqkhvxuhuoakasyzrjau4l4vqmxaao0l3i2' );
define( 'SECURE_AUTH_KEY',  'wdd8vejhqtj4odfts7yr1lxeezqnorn0mycs82bu3cmsjudbkhcjjlgm2fmhesug' );
define( 'LOGGED_IN_KEY',    'tficnxdtykauwhb3ya3gq8gojdfzebiak3hnrvdbhtxphkzdv9fajbqu1mkihlxr' );
define( 'NONCE_KEY',        'kfopxvj5jpe44viui5invx7wenrhvmiimx6p3aoef0zsp02r5cc4w6kjmcsmrjzf' );
define( 'AUTH_SALT',        '7ygd6ioaqgnnzhrockm988zfam07itfgm50kps1osksgaykllnfr4jkg8ioymaam' );
define( 'SECURE_AUTH_SALT', 'qskivku7nanouu4gncr5fv6se2a9cfkaupkzrcx1ggsflk2fttwrabpkszgsbgm6' );
define( 'LOGGED_IN_SALT',   'abbedzjfymipuhjq0pwy7ffexozonhshx4uecm1x8yot3x6kczhvila1m1lhtgye' );
define( 'NONCE_SALT',       'erelst6irvcdrytsc4wmn00ax9q4rgvd774yc5toa8y9dijfsrnr0qpiznppwbct' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpnt_';

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
