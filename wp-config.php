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
// * Heroku Postgres settings - from Heroku Environment * //
$db = parse_url($_ENV["DATABASE_URL"]);

// * MySQL settings - You can get this info from your web host * //
/* The name of the database for WordPress /
define('DB_NAME', trim($db["path"],"/"));

/* MySQL database username /
define('DB_USER', $db["user"]);

/* MySQL database password /
define('DB_PASSWORD', $db["pass"]);

/* MySQL hostname /
define('DB_HOST', $db["host"]);

/* Database Charset to use in creating database tables. /
define('DB_CHARSET', 'utf8');

/* The Database Collate type. Don't change this if in doubt. /
define('DB_COLLATE', '');


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
define( 'AUTH_KEY',         'D~BT=!L`(rT9Y9*xpN=ML(g:wBSltC2:X-Q#r>96pH7trotrdj;mHo1aie!~6Ey.' );
define( 'SECURE_AUTH_KEY',  'w[j>rqYf+<u^{7k-%:r^}Fm}zW:OO~^V)Fu4M$Whz0df535MIq3&;qPs%*1S@Tqp' );
define( 'LOGGED_IN_KEY',    '4-!/@N1}zQyA5)nL]MxMHuqdgS0&d_Gf.hMowivER=+3e`h=<f6+6p6y)K+=Z6s5' );
define( 'NONCE_KEY',        ']S4>uL.Udh`.aNpw*%AH-.7Y[,fNZ7 2@SpRdQ1RNm-%f@dEtUGiUX>r4&]pt/JC' );
define( 'AUTH_SALT',        'JHHU)sT{VmMn^2pyFoDHE ~LhTG+n[ EI(yXs8u7$HOkKec}Y( M<w5w;j3~>Jm}' );
define( 'SECURE_AUTH_SALT', ';mPr!8PAXJ#w2j!aNT)4u~wbLuy1vARL4z]B<3@jzVT7lgE#dv`j`@feLec$[ag$' );
define( 'LOGGED_IN_SALT',   'b.[%0JkZwZ(+fFox[l@E2X@VFMOv,Pu=IG|*dCi[-S.c~3dV!YQ!szXD#0_Ct,&u' );
define( 'NONCE_SALT',       'i5w|sHr{piXe*DHzDwpD;0Jn{ivajy}T|9Gy};(Eh-Sx<Pqs)AgJ/jOnawnjGjrM' );

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
