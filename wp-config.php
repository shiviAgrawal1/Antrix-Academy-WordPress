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
define('DB_NAME', 'wpress18');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'BA[Xk#7I`kSWB(}VCe2<MEWbFU??7,dZ[2BIO5V># <v#@MqA&2/{Ue+c(3!fu40');
define('SECURE_AUTH_KEY',  'X&(<D:~>]Cri=hl=no7v3G$KIk> tryn]glSHzrxX}!yT=!okKXr3ma2y+vZ8RCF');
define('LOGGED_IN_KEY',    'u4EIT(,d4IK2?^2[<F)?%~y%,4lQb_TW1wY(?<hSUSHjfnP0JdL^Kw^;IPO^k3vZ');
define('NONCE_KEY',        'qCS<DE?@haRL@jNw|:|[22$mKO)I+!<uYnwE]Ml!OR,bzwr|0&W4P=/&?$]V6KI3');
define('AUTH_SALT',        'I5<ok.sQ/U<xgb#u|sMJQkyF)j,SD5FRu&*Jza%J]qt|xM(.Wz!n_A3:x65eQE=x');
define('SECURE_AUTH_SALT', 'uoc8y:mc7STK]bdc v,7`OaMJg=[5~TgpRQ*X!-2XPL/Y4m0Wk|T0}CLycEI/p6@');
define('LOGGED_IN_SALT',   'ej$lz|pMa2r&RsQ?lIa6, =&Kmk|9<YG2l|[4;QjlV}.<[{6Ko!LK5BGz{7EqpkY');
define('NONCE_SALT',       'i6q<a3 F}:-l{#%J_,he&MjM|r&#,wWrnY.2}2FxUk+@BF: Dv%e&A)!@u|cS=Q|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);
@ini_set('upload_max_size' , '256M' );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
