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
define( 'DB_NAME', 'custome_theme' );

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
define( 'AUTH_KEY',         ']Cd@N4#H7y2IbOD)qQd%h.XLHe>`w2K[#xL|.:,m40Cl=.s_`7w*J>k{<Z-^0CFJ' );
define( 'SECURE_AUTH_KEY',  'q?m#44D`t_-q^X~[m3UhV|(wP7~jtl1T93$ 4YLd4DI?_|2TwLotRM75GZ03ldV5' );
define( 'LOGGED_IN_KEY',    'pwlTjA-;^_HI2xG:hs4|nBn0SUG:g7{rn&/z|wJkP*nT>A|:e3vz?*t_+Xw4e &w' );
define( 'NONCE_KEY',        '{4]hNkog>0Jais:j4PF)xgeZ8:u(>v`yI`r`~rG:4jHXpUZK/*{IjSzvvs<u|am8' );
define( 'AUTH_SALT',        '/2>$(}DuE`7E&*nZP[p@?SA.zD@%tp(QsDn;dgnbDDXlmgk2| kP;&lTGWvUiN?O' );
define( 'SECURE_AUTH_SALT', '~S}K#-qZ!D{@T#>@4&HvV&,$o+yJg]QiWU$tMhO3KJ[Uq,?z;>`<GCYv,FBXzrmM' );
define( 'LOGGED_IN_SALT',   '/{8lwfSP!Vj]aEA,EB-i}4.WZ%wCP#y2*c,qgTWh?<1,H`@?[`mtahS4P76h:!O|' );
define( 'NONCE_SALT',       'X#Gw?d8[(tZBYvtOvjs8b5t[EEi5h<}Vxsz/6fu3sE6@Yw? *GW,u.hJ{BA10@8o' );

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
