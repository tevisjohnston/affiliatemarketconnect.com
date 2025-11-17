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
define( 'DB_NAME', 'u217322188_kwTbj' );

/** Database username */
define( 'DB_USER', 'u217322188_C9yfH' );

/** Database password */
define( 'DB_PASSWORD', 'qmKZ3C27uG' );

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
define( 'AUTH_KEY',          '~%J$7ouO!J/}pkuRN,2P9#I>U00U}}Ef:+NZAm~w2&@dvZv]RFFf/hi-z~_A6~XP' );
define( 'SECURE_AUTH_KEY',   'T/f~v@>B~]`_:}6j>HEBWV,^Kn4QM@BnV+^0j+YA7d.My`+Xh0s0N;.c^eGPHX)|' );
define( 'LOGGED_IN_KEY',     '0f`njdS}q6o1i$%q_Ed x#zuXxp=We542@uJ=D$CC?L#<4GF(8vM6.~ng<z)7kd:' );
define( 'NONCE_KEY',         '21}<GxO*}-.VHy:#o9pUp9_#t/5Qf#biawnX4uk _rCNn+<*(wp#4pFb.1)AcMN,' );
define( 'AUTH_SALT',         'sCwX,$F/=<K498E#v[}2+%G_<L1<SElN*0Q]2UiR9QF IZpX1j5Ex}jd-Hm2Kpqs' );
define( 'SECURE_AUTH_SALT',  '@o7;)l6+MCCd& 3K@&{o;sWq`~[SY|<>Mor)`*$sw&Makyr|uyC|&7&kv}_ii2de' );
define( 'LOGGED_IN_SALT',    'O<Y!K~s1)T(y#aR)20-EW?HpJqa_DX8;2]v15?d%eHB.?e0`.:8F^@]efT/$yoL@' );
define( 'NONCE_SALT',        '%WpJpq*Wk%9qv1+Z0%xW8+YK^:=[J,o8J&q02ga-ziF$vW/O<g>`(}0Pm7ehzj}h' );
define( 'WP_CACHE_KEY_SALT', 'C:r22PrgjS-[0XK!;ZCre{cSfN:(aNxpp6r>.i5*k4.pbhAkxuugFpEf.mcB/.{Z' );


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
define( 'COOKIEHASH', '1ce3d2643e2e3016a59c9c0ee055a577' );
define( 'WP_AUTO_UPDATE_CORE', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
