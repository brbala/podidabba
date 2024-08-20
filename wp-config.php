<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'database_name_here' );

/** Database username */
define( 'DB_USER', 'username_here' );

/** Database password */
define( 'DB_PASSWORD', 'password_here' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Z:fo`PrMPj[M6gM-:-KTU+J20mCPJ%atU-z0g_O7t^k>(iJut]_>a}K3q3;T{|Xv');
define('SECURE_AUTH_KEY',  '>NZsck!p>.2:pGV+*1>%-TdkRtvlp0x&uw-L_9}V/US*Mh9zl/P>v$0w+I;EpSqR');
define('LOGGED_IN_KEY',    'Js}|]}clm7)kL= Aw&wG6jkN1 hv+yzXw j4yX%)BP&Z0[N1|!C-_!sG/3]/_vuu');
define('NONCE_KEY',        'T;A*>$<U0I}dc9=+PO36NFQ8<z_7Af/ M,&Y*>xi5WV+>_&H2{]%/St+vRa]Ih%R');
define('AUTH_SALT',        '1O;-`Jt)|];-X}+o{6 H~4!dPLU-D[p}qbteRIarJ#Y)um!@ekbFXy!%&8ZZv4-5');
define('SECURE_AUTH_SALT', '^x2fq.<eo`>;q8wA_O11@Z[+ON:5vsOY_PeRzs/}}QfQ1VmMLtJ;Z2R?B5J/Rr 1');
define('LOGGED_IN_SALT',   'pCa<n.I/n@o~t]?B{8#gm+6?+WCj+1aT&8g24tvTCO-d5n[5]HW`ik 4+Ztsx#^@');
define('NONCE_SALT',       'lIa9j!ZU18dhK-k5*u|/!;ueuq6CqgqHW1+IqsLYR^qj5JP49 cKF.QwgLWbNxUx');

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
