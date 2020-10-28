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
define( 'DB_NAME', 'hello_wolrd' );

/** MySQL database username */
define( 'DB_USER', 'hamza' );

/** MySQL database password */
define( 'DB_PASSWORD', '1234' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1{aNC9-+<4#>8)VJBjL;r0u-vmB2Kq<ux[&Vb~m]OuCF2+91]jbo#B[ht+|*AIwr' );
define( 'SECURE_AUTH_KEY',  ')?I}~aG[Mp{.R[-?+[KlqN[p4P3*7VZeS5w<,Lw,Lsik&<H@$.^<6N_Mk4Cp3Z4l' );
define( 'LOGGED_IN_KEY',    '&vDur2{(I.,$Rnvki2b.,~U^ eh],9{Gh|HomUc9c_@E*2u&,bZ@k.SL#@f)>sV]' );
define( 'NONCE_KEY',        'mmu8ml6GVwd#^A-TUQEy 3UO7Ho^N5GYDa;XH^%)K*tG3N{GlW,A<)j^/M@YL(7:' );
define( 'AUTH_SALT',        '?N#D.[-LRwvS$~4^Y6Qw6FP{)8k=FoG7T:}Wf{[;v|jM{?y05q)~_:J3#Tav%:DO' );
define( 'SECURE_AUTH_SALT', '`8.KC|CYTRq[ugQ@V{fhqK*X~q/BM` {fD_Bx|$_g6k(B.Y:jo)*2,uM_`KXX Ha' );
define( 'LOGGED_IN_SALT',   'lNF@<:txSTNvlOJbhe.of=P ?uV4jXF9KLq(&3:q2F^ze21dXV:$VW17wILi!U6|' );
define( 'NONCE_SALT',       '%IK.!%G:alHkPdA3/P~isxT(x$,eySRO9z8%[hiR;0rL%B+ |F1jI[1IiQ]TK(*1' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
