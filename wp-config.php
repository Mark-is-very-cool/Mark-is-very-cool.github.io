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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'X:\wwwroot\wordpress\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'sql_127_0_0_1' );

/** MySQL database username */
define( 'DB_USER', 'sql_127_0_0_1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'MBTpfGTHShCDarcZ' );

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
define( 'AUTH_KEY',         '/Pd@Q:cr:;Yd?o,iuUe}5>Vn:,:5Ut[_X2}btI2TBc;y*I#=FPP $E[hg.cs0;R(' );
define( 'SECURE_AUTH_KEY',  'pkQi%A^hXuz@TyRzJgZtDqJ}*8K%A3;MxY)FCQ[pHNM0Zf$4FE@@SJ[ndZT6Aqh2' );
define( 'LOGGED_IN_KEY',    '~o@P!6n/ZSS4j/<W4yqS{afg:ARut*1eO6?]CMd+N5R(sQdqcb$Gxi f2:FZ vO*' );
define( 'NONCE_KEY',        '%#=!)u,Xd64po#VN`L<9Lp~_Wu3<lc 1<:U1nZ~P^l@(zbh0+r9a@fE~/-!}1ZST' );
define( 'AUTH_SALT',        'Rdp~U<0J`6E)zO5=fL,OCgk{P/v!],8N~AOFHdV~.fx8n{clA>Lux;9`fO=w#-AT' );
define( 'SECURE_AUTH_SALT', '(yjiC9hC E{P*b4vY-MlOwLl(Cib;s8W8@+x,NkV0$.HDh^A2^k.=L%G!j;Pc2:K' );
define( 'LOGGED_IN_SALT',   'fJLY82ta^L~G3C-Qr_]ti)cwI@;TJ_^OU}>H%e1^)JoX[#7)Q=^2<r|xv?~+?([$' );
define( 'NONCE_SALT',       'jQ&RK|adDdid8<.}R2EVaIKC2;_,C@)lk.L:`otEA`4ez!Sl_Qp-?6F3T;-{%F<m' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
