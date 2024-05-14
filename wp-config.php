<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'matnghethuat' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '>88lH;$8hr[mgJfy,g%f[4cIU2,k)V3p7EwRnDdL^Okx,<r)_;#h`W8IU5M~Ecu=' );
define( 'SECURE_AUTH_KEY',  'uS!&6{8EYy@UlW{({g;IPy[GV/u@S^$aMs#.M`sYx%tER4F2i2rIg+xH%,G %#xW' );
define( 'LOGGED_IN_KEY',    'DxDp[)aHtR4i.axou`t La`]b a~GF[;IZ]C}T;}j,v4lFs{af9HIFNDQ;%Q*$LL' );
define( 'NONCE_KEY',        'E?=p$#beVJ4a[Ck|?23=#q(~{oU8%o*7x/?xHnF;g|}8MD(_!NHt&;i+Wo6my@IY' );
define( 'AUTH_SALT',        'f-$O>1,V0CAs7G`1g_:}0TeBeB~B{;kmX[Gxk(z?6m,_-d5!E;Lrbue<a`x*t0>w' );
define( 'SECURE_AUTH_SALT', '!e4[Rl.st7dcmrv>Gdn/wjF#9 9*flN|Ce,/n}!I979b/ FgS}FZ*Y89qVu~Hhqd' );
define( 'LOGGED_IN_SALT',   'wpa)?YY<0q*C3 )1~?`nixgr}8m7j7d[zA!9aiRq,,`?/yPh-:f(>XJJnS[wLm7;' );
define( 'NONCE_SALT',       'NhG{`SsrI`1,dIjGG*ctK#n;X[O/F6vMjq/1,e+N][LUDWxG{p]r97=_JXN{N?n+' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
