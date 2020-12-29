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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'B1v91OwrticIt5LEUfN61+AbzlOmZlvD9v9pIvVbJSzds9QXzD6ubZLTwPWR1ExgNGUp3am7UZo7Bo1mKbmqpg==');
define('SECURE_AUTH_KEY',  'gHi8o1bw4UksXGXOaiCodyVcjYBS4aavhPV9VLGHffHDNZr9t7MexWhLllAm6bV75F16i7IqzGj/QbfBqzLBlw==');
define('LOGGED_IN_KEY',    'UtvsH2CzfhCxo8bdwmYxwtv46zYO7CLTKfM62tHE3KsFBjwdum84mv3qc+FYNEvO7VLvszQxYEcwI1McbbfzVw==');
define('NONCE_KEY',        '3FpnC09kRA8iXOtB1g/8kLpInc83u/xT0rBm2+MZw0UwYicU3KNDC4Wtw07ertBKvG0BySlWTNmZSsZpsuxa9g==');
define('AUTH_SALT',        'Y7CDlVLAgJPmQOBUqQMF+4Q5x4do0r36FKdmDNzoHf448qg9c2UGAiDiimDhVTlm8AYHzuTlBYEAXwoWUXag7A==');
define('SECURE_AUTH_SALT', 'MWmAU/UQBQZGPvQh9pARMhnBWIVzy0CAIibuK+cMU6U72phORzdAUu8v8KskVdQQKN6Gd9vqQyT2GvBnEIc5Ng==');
define('LOGGED_IN_SALT',   'SpuXl52GjY0FIAviNyzDAKFppNT8tiaJC2TTpB0dd1qjd5EDqL+1w20/7dXqrxWS0vEJurML+o+84tPa4gipzw==');
define('NONCE_SALT',       'KwQnVyFceJVVvWqFrTtW3s2SanjxmRmMbSyYOX7hABUnbEkVyB0sg+ogahDbx0CY3i2CdEM1rgp2TkfWpQo1aQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
