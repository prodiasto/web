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
define( 'DB_NAME', 'Prodiasto' );

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
define( 'AUTH_KEY',         'ogjXa3vkZ@5]=n7I_r:B+Vy=+[lYyBTHLOgi(o5vJ@AyVHs7jshuIB:VUz]o(PtN' );
define( 'SECURE_AUTH_KEY',  'Eh?]4. &_]aXgH$DSszJEO]TFO?p2|F:w#(p!K8$Kk.+`c)&uFIU9hq6s.3mnlsp' );
define( 'LOGGED_IN_KEY',    '0{m|()sXI7ciKEYTaPZ%p:>1Cu9uj1}]{2$=O(i{,/Yg)G.h6L~rh]MD@J9W{B0W' );
define( 'NONCE_KEY',        'D4/DeC#~U$-t[4#Qr%|{PYQ|82l(NFLE9& 6v(%:C=Otxy>+2yyg?MAa&7f(yuj$' );
define( 'AUTH_SALT',        'Ut=e{/eR0eh{hW~D8?6qXXBFdZRSzQTW^d^P 4lIxcq_8}xL2(G2UgXvg1ATC3GD' );
define( 'SECURE_AUTH_SALT', '5ecl`=,Jg}H7zxB+@e~h(|`3gbFWJsgAIVrRbTo/{jGyFK:,$BjFq#W*x<_BF9gg' );
define( 'LOGGED_IN_SALT',   '8l:n3#bpo ,-yEFkslmz}NiaY1~^Wd)59dVFB<E.nyX]zE= d(;HC3T4W%>Y6#uO' );
define( 'NONCE_SALT',       '~Dmde#@t;s}j_FpS5;SwpeUYZuHNq,/]4+9?~j)>,_nP+[RCKA^C3PSR7n12tik>' );

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
