<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u451764941_eUkis' );

/** Database username */
define( 'DB_USER', 'u451764941_3d6Tx' );

/** Database password */
define( 'DB_PASSWORD', 'Ffu8nGyMPx' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '3Saj@BZRSfDpwe#xUQ?kHfZCrK>5>Sx&`eIcW-dDnD7NN}w2rmQP3guUSCPQ?Kn,' );
define( 'SECURE_AUTH_KEY',   '?wB7fpkGc(W9G;PGFs!?_`^W0v7gfokkkqvg~kN9*7i/|8t~pEPu@31KQFxOarY<' );
define( 'LOGGED_IN_KEY',     ',xZlT-47},? Kbo357y:$|NNo|uH:C!W%_qd>tomDbaLQNmZ8XVDIN?A6Y$B5p3J' );
define( 'NONCE_KEY',         'EO2w5c}g^4DWlAc 4>oP+`tA$!{AWOzVn(I]Y))TKENr<8#TbvxCZ@&l)aX,3W@r' );
define( 'AUTH_SALT',         '7-&hr8-/*?+z^ECqJ*7]#u|M>?M6hve)njC?lMQBa{!|>2$i]{Xig>Xkpk+C (O8' );
define( 'SECURE_AUTH_SALT',  '(U>#_4o=ljO.Z8[D7j >y1`_nibGv6#*.onUJy~hsu{,hCid4K<i~(J(v<?4MO:w' );
define( 'LOGGED_IN_SALT',    '3d658<P7q6jhcKJ/[zYU-X8}r7Li`6t[23?VGx@^h7t_;5]D%G!SD&)a*!BA/Csd' );
define( 'NONCE_SALT',        'y3r%e(YjV*eAut,~w{S{qu>,DQ;<zuia7 cx~n]Dh<SQh?}Q,A1Utbkn7`BiQ!$h' );
define( 'WP_CACHE_KEY_SALT', 'W{PByprcJyGY!jw$BC1d*tLOE~sd4:w:O~]L5TJOovW%K-,prYjA)|oxk:_Bb]sq' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '4698b9ffcc2cb7e04c0a8bf1c5c119dd' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
