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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'bBNJtsrnUPkBMXwpK8spimKeDfoi+b5QrlLgVEw7o1/jDxDHyIoCCWZ7bNvBSu+4WGDjnEW/GBxUaTOLomrqHg==');
define('SECURE_AUTH_KEY',  '+3WtP/YDdNUwpK2cxPWUscnoVVbkC/N4JcpxkTwgzaAaO2aSAgtRJLsEmdJWVG8eXPUBaNuqY9ve3R3tYIu6qA==');
define('LOGGED_IN_KEY',    'AdJptxQFeAU3s/eNXRUVBm5bJU1PHuMv2FZb0AN29JiA7ixy1d/wlnj5hMWqGo/Mrhvwi4czQjV+ti9Z9Jjo7w==');
define('NONCE_KEY',        'qAo7B5e1yErRjPnZBKl8CxpxJf//L0qDYR0irencCCykglRgGMcszoyXjlxDZiJT6pP6bBP4jJOCF7ZpKQBlfw==');
define('AUTH_SALT',        'mIYnWA7pxuejdqlCTjhQ4s9y738voKTQ7QRkEhlI+KEp5r3p6YQ492o1coppobDkutMIomYaO16U2H+xjk/Elw==');
define('SECURE_AUTH_SALT', 'tJmzdGWaGk2yoy0Ty/yCn5CFuwxeWZSCjefj3Npti2ZEb6R7WM0HlsWAHm9XLuP3dI7t0GkqF+QsPKbtHxWn6w==');
define('LOGGED_IN_SALT',   'bUfO85T5c7oSj96J0vWmEIFWurALWnbd9LkQIAVEbz9GKynOHeFJ+YVH9UESo0fcgpO0Qoa4qMk8Ny4cr0sY9w==');
define('NONCE_SALT',       'Njts5cT7mYpaAGveAj2wxroDoI4GuGzwpz4Sle+RXQjLoTvCclBPvJ4RIk/jXS7jes9HDKLR/RGgJ9tdKzlohA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
