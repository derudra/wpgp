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
define('AUTH_KEY',         'EYhJezj4sERlu8gmTVHJySR9s/3chrN3QpbxyknPKL6+GJIS8+AUsAQcmOmJSiG0qjBuSdWnHT33HIHaC26EbA==');
define('SECURE_AUTH_KEY',  'LbrTxMQcFJ1GGdfUjXIMaAgt4CKz3VjE5jfmGrUBSNV4X0KdL2OaA376/T7C32AASiYI9WxEzvkRJHe8bMQKzA==');
define('LOGGED_IN_KEY',    '6/YNhEt7jYAhw7b+6yagnjTHT1oWUQQIuFg89lP3bESbzJOZdhbWTfWVqA0uuD1ylb1YlGiN0+XAheP1F5mhMQ==');
define('NONCE_KEY',        'UZ1yvQA0GKW0QMcx2uqZLRvLet9hFlDIWgkOMHgWMD298CtARLat8KdbzOncUzpLtwGWo0BWJoTp0XvkNT5F+Q==');
define('AUTH_SALT',        'yXgOc67VxpEV98TZe/ZAGw1va+8bBg1Ee8P/z8Yb9EpTQCgVAtGuT7cpWaeIT0nQbukSGEB1CH0NvD+Qs0F9Nw==');
define('SECURE_AUTH_SALT', 'DjV++XqhZlJoVHCL5/DsYpgLgCLK6TRHDaOpQzqMj5gMhE+WB+YJXetY8rAJ0n1fBA4DfRJeDYNXqWq1bG/xUA==');
define('LOGGED_IN_SALT',   'wrDvRRPtjc1vN9t0r/E8i11TPi6OJIHOJNjlCWOWlVex4ok2ZVzqtQ/PvB8qzMwtRAohHkyZFMTOMby2Uc+v9g==');
define('NONCE_SALT',       'Ua1Vb08CzCL6welD4lYFxjgqhAkLmRY3YTmlxUDD//Tuj5+pnCr1dSwksD0Cwhqli1b8Z3XuCOcrVMMQjJAVEA==');

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
