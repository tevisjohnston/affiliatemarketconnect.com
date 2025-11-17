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
define( 'DB_NAME', 'u217322188_aDzbn' );

/** Database username */
define( 'DB_USER', 'u217322188_DVLtf' );

/** Database password */
define( 'DB_PASSWORD', 'iYHfXSBbww' );

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
define( 'AUTH_KEY',          '(8qF.l-mk.FG&}Q7BL9i :P=4~bjh|k$}F[z;LXh-vEo>n16+[xw=sL_jJSHdI>g' );
define( 'SECURE_AUTH_KEY',   'QM&k|dn^NLPg|1m9&&F,Zh8:>=/[3RcS#+=7/uPS$zu=3[,4rwJ5Jad[ye`!%sHc' );
define( 'LOGGED_IN_KEY',     'W~RRvF:;1C6,I7cmK,.WR| EM#el|fD6ES}1j.L;ZFP:1lJus&bEII&)*=v,MLZu' );
define( 'NONCE_KEY',         '6Zj4Y@VI:.6i.-vX;CUz`<;|g=0]q_&$u4_=NKVf:gz;aQ&{68!WZ-R*wLuO`-$3' );
define( 'AUTH_SALT',         'OH1Ap`7([%0wVMhry>(R4(+A[HYqW`tV<7a;Er0h;e%j)g_.BK(-U2j/HRcAF+@v' );
define( 'SECURE_AUTH_SALT',  '&v&eGNyid34>Je:{<4,`_XKndU T,l9Aj@nHpTVdp|rR&50Z(sqMwxGx5cXyZ.g~' );
define( 'LOGGED_IN_SALT',    '~],5|w0S@Ir7~gWI%D}8Vsc? )$[j~{Fusv #jD/qz-g;TmKot`b7_#q~5Eb-YW}' );
define( 'NONCE_SALT',        'k27)`8PzmTY,ni+LzC?kScXhJH[T.[@uPIdnM+9H]*m!N+&BZ]v<b}7Pe#Zyp_cA' );
define( 'WP_CACHE_KEY_SALT', '{o8f#pAIR8N?tQU(:g>32i7~}>DP</l-OZZhK99=X34 `IL0M4sNVF^$j#sgzg>C' );


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
define( 'COOKIEHASH', '4fdebb046d29df25dce4282194b08018' );
define( 'WP_AUTO_UPDATE_CORE', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
