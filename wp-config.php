<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'xdtowordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'x}mdFGXt@45G JUl&x32S}]Bo2KPT<?6$<&6_lgS%+e??~8&ex!S)o@p5oTj:G@g' );
define( 'SECURE_AUTH_KEY',  '^n/d%AX/nLG%7G!lmiC&Tt2e-~3?(GO%-vpwCwqrLO`+>&~{:=^T=hs[z;0cBgBQ' );
define( 'LOGGED_IN_KEY',    '^4ftJ$KA [l[bXS$s$ivkpF@#z&H(jeyqkBrt9)Z2!Ez:b6@O$o@}`fw[5~,rNG(' );
define( 'NONCE_KEY',        '},mA*HqoZ*3gy2eiq8MWd}lDqJqU/@YA*<NyV3|(;@9%((f%`Na1;w(WDH+.x<. ' );
define( 'AUTH_SALT',        '#)F!|X<umyH&n?w/n2pO:_#*ZwI59s):tL?K-3(.s=jrq`ph`o$!)7.$#?,p/*Qb' );
define( 'SECURE_AUTH_SALT', '64G%6F;fm+`r3q/9m}>s9Zyy>%i42fNcvk_ESG$|6vKjCcgj0PD1i.88xhg<]3m*' );
define( 'LOGGED_IN_SALT',   '[Yb0`B#>.9Y`vVLT)h|)P8+1?K&ssU/a}]P}XFep4UYJsiO9I%=:R(OJ$7w!FY1y' );
define( 'NONCE_SALT',       '/X:a:sA%cn]{>y!,y8Bm{yYj)jQKHt?>s0UeHPjEkNmI%v/eft?9{$%xN4[^H6]>' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
