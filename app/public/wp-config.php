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
define('AUTH_KEY',         'u6h3O6KSQxYtudLVDo6BrSlA5Wyrmv0/5oh5qMvfW495afTG63m8M9ZoIdvf2qj3Oc5VM5LnnRJcU0XyhyxFIQ==');
define('SECURE_AUTH_KEY',  'bL/ofdUoLs5lLa2jDuCnKpJJNZCitZJhQVV1I5QKU5+pq8xv4FzdCy5npo9XeEZv3U+Uhz7r+6Cz0xY2cSkgbg==');
define('LOGGED_IN_KEY',    'O0MCxlUjbLt6r0zjUVHQ9iFk/InWBCTVWUoJ0gZ5Rs3Y2etfeBrMyauF6obmESkUYaA5pXC6A7laRUungo3/GA==');
define('NONCE_KEY',        'IkYyK6ab25+pd0sdXFWzWtl9VTrVyb1nWVKIP383AlrM60cRPnD38C20ysCd+yoxlcK2EO0lTNvPmtxPBsFOng==');
define('AUTH_SALT',        '1mzH9ub8bQDk0vlBuMyhhOch4ZlN7Bmx+P2kH/D+o2u9ADMTf1Fd+MF9bcp8eLR5mtfUYLqYiGpIZbZgOBs5zA==');
define('SECURE_AUTH_SALT', '90JM+GcsNuUrqEuyQHZ4/dqQQCeL+jNkIXOU8B8PKFWvldcowEz0abyafTzuVzfMtUsguK7sgJx4fGhzQpRMdA==');
define('LOGGED_IN_SALT',   'op1Q0eFlrDmJIepO6HOcTKx1gSmvRGeZ9RGxcMyh5hi65FDfz+/DpQA32fKDDuQ5Mq76p1S/QGDktKeeAdGZ0w==');
define('NONCE_SALT',       'zBRQXJrXeE9O09YeLWOEDyRT0fDIslIeA9wUCe0DpwxKBmDoVshKju9Z+qr1q6mAKfpqh0Lul0pH66CsqlzHhw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
