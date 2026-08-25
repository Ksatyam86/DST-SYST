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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'frdr' );

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
define( 'AUTH_KEY',         ':/|EBA^uL@sDK/tV+jC88&V!p2^;_$_?$pz<Jy`fW$-:wS9sV%^eVcjf,gn<h>_a' );
define( 'SECURE_AUTH_KEY',  're^rCG  ?C$B]bT1O2m(y}_f3}*@0PF,:5gqnfxoCf<bMg|;(+Z5g^x&QSK:jo3&' );
define( 'LOGGED_IN_KEY',    '<r$L]v>Zmij0A;+l4W,{ 14kbM6>lI`pvna1pTBELh#r*CY)hg#dRhD:;D?B+%T5' );
define( 'NONCE_KEY',        'F%`s%ft5I, ?[-n qd|:c`mh#,GsTDHPw:f,=G5:wnhcr3i1=^,Crn{#.!Ml8![?' );
define( 'AUTH_SALT',        'f.q$`Q!fcM2}R=h2Sl2aar5*c-Z#`dOH=}O68D3=d6hG3zzX,tKPO{MM/peP==x0' );
define( 'SECURE_AUTH_SALT', 'E@3[>Hf=|Vhxk:ct_9o{tcKR)*!l0WI]5KbAwbQ}0x<)n&$^2P7cHT>gV.#%ts0_' );
define( 'LOGGED_IN_SALT',   '?nx2zn|V,`ce|5AbEZz3{Vo]T^WeUtM_V4i<1Ig 3p: mg3<&c|6VVVJoQ)8N_[U' );
define( 'NONCE_SALT',       'Ee3{!mlW*SxO(7oU1!xl-,H2L2BEEYX7G0*j+-7V_!91BsXg*o8OIu|OW)mi~e2C' );

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
