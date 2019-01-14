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

 if(file_exists(dirname(__FILE__) . '/local.php')) {
	define( 'DB_NAME', 'local' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', 'root' );
	define( 'DB_HOST', 'localhost' );
 }

 else{
	define( 'DB_NAME', 'onevoif0_ovb-data' );
	define( 'DB_USER', 'onevoif0_02ee_cg' );
	define( 'DB_PASSWORD', '1ovb2424' );
	define( 'DB_HOST', 'localhost' );
 }



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
 define('AUTH_KEY',         'WY&QHzooM-Vu2|%XX|P-+&t(+x1o?ep`P].Vl^Tv2<$U4)A1h+|O;fbn-RC5RV!&');
 define('SECURE_AUTH_KEY',  'J.-{qzl&4Ak-9bKp(z={I(!/0GHP4ScJ<RN#}vYq^Jw,$iLxC>3o,xsk.C||S<p8');
 define('LOGGED_IN_KEY',    'MsCS-G(DqvXG85k2@T|lvc.>UG|55=7XC3<?@To_L--QH=CYqGhA`5K#bnjogJTj');
 define('NONCE_KEY',        ' 7l4Y19N{uE^MJyZ-/ @ufqNWti:[-=+vF@tbp=vDQS2clC9[rHoNS{paR{n7R79');
 define('AUTH_SALT',        '#zaahV}3C23!,n}n-MS6Y{@PEZq@j/x^nZgzW3p|`+=Jo+/VNJ7~Q+bpe~f(VCQG');
 define('SECURE_AUTH_SALT', 'gem)os] F#_&[Gq`O$sgLDPFwZhXW7i]75qtdNH__x+4Z+]?y.~OT->8t(wh{VXK');
 define('LOGGED_IN_SALT',   'i`Bt9+L[U-2d_bPI c2P1td~b Ue&c!>Z0g6Vc{Rqepp*R[vs^2vl+{.-?~en:fx');
 define('NONCE_SALT',       'P6U2Z!cTA%|NkUx8roi%jIOv;_7H|V,4^|$c=t_sng#x8w{GP,(wT$@!%cDTk;s?');

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
