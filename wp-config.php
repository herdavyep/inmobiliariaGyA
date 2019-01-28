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
define('DB_NAME', 'inmobiliariaGyA');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1Gataprisila');

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
define('AUTH_KEY',         's8k)?f%F1QnBEqw+7({ qRB:k$M6B`z7MPGY0UTg$ID}p^i,h9&t3Oc9wx[`>N)q');
define('SECURE_AUTH_KEY',  'fwdZ2L*G,mn2KLE>T9b@kfB|pD-pIjLh@1-j*eVj]e37ooN0s:l<u_6o&Y@OF4R@');
define('LOGGED_IN_KEY',    'x@hL6;EGL_z(m>U%,c;Z&nN3Bq^+X,Z0BXqW1CbnqpxyGL:ZEL?1UxU/4)[]@1u9');
define('NONCE_KEY',        'g^EV4mtA .]2Aqg84>,=b}bd[7~fVCgk_l,=biJ~#ZFcA.{H*5I]a<WhX?4@]ED|');
define('AUTH_SALT',        'Flm S51&fS+4&MHHp,--LZ/e/P2r#]fM+k*TD1VmDQ{~M}zj=|bt6R]qHABR 57X');
define('SECURE_AUTH_SALT', 'D`Y/&mXu+Xu.,wyW-u_5h$9vztIo;-yX?g^-.&PSQ^E9<w/96u !zB<u}/E|:S))');
define('LOGGED_IN_SALT',   '3fB/QSQ4*ZqJ9rBi <:`Tn([;(vSO$xB*1WEg+Xb,Vr<UpKE>jnlus}Gwcl^z}Gx');
define('NONCE_SALT',       '$NRi}yS6yy)L7c?$,pB{,r4X0bsqYVjC9(Q`$M+fk`{u)Q]4uq7c Kuzt;r+2JE?');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

