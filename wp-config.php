<?php
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
// ```php
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', true );
define( 'WP_DEBUG_LOG', true );
@ini_set( 'display_errors', 1 );
// ```

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_dvncollagenlocal_db' );

/** Database username */
define( 'DB_USER', 'wp_dvncollagenlocal_user' );

/** Database password */
define( 'DB_PASSWORD', 'wp_dvncollagenlocal_pw' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', 'DM)S>$P.Umexu13@Q.Koy}q(DmJ-pe qh}Q|t&18tkWhY@L @x6<:iQdyff6Qyf4');
define('SECURE_AUTH_KEY', '`6@m/2QQf%R=X(;T(M4~p/vQbwPVzD>v WF./2a)~e1ULhfYz<1T MP08:k-~w|q');
define('LOGGED_IN_KEY', ';kQGi@>^5McyP/]u}l$v-L|_x;RV}>oJkl2;ue]APd,b2:Y}6cUj[xxNk=$fOX-G');
define('NONCE_KEY', '.OBPQ>Mg=^P2ip+[~UMX`6I|Hv=`;>VgCR(YHb:~HQ.<8t3HM`F]}l<oOyvCJ/{8');
define('AUTH_SALT', 'pZ)SJ9c:Ck;vD§qNU,rp 8LpwYi>YzSv/>N!0+tZbP@|§hk7zf.dGRPu24ZLI$3b');
define('SECURE_AUTH_SALT', '.[P[Iro@.$oD&z$/;Az$2bt8?,&PWV7p}qcN~]ba7c4nDe=bEgaW9@(>nxU9algX');
define('LOGGED_IN_SALT', 'O^kZ<FT6$@j4@/q%kqbANQ6L5%3iB>tOyR6@}}+%Uf3a^>,D3<>3Lqe OJeFJojO');
define('NONCE_SALT', ' ` D56O0T5§GQ9iIo3i/I$NhgdNQm+0cbYPqjIRyjF_4}(b:D^B)K5q}3Pg8L!o_');

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
// define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

/* Force correct site URL — change this when deploying to production */
define( 'WP_HOME',    'http://dvn-collagen.local' );
define( 'WP_SITEURL', 'http://dvn-collagen.local' );



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
