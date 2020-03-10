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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/var/www/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'sitiasa' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

/** MySQL hostname */
define( 'DB_HOST', 'mysqlserver' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** Use locally plugins and themes */	
define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'b(g*0s74&LB:u)vD7&w3TTkg%E8&Nl)3rt,o`x=j2:Zorb}s5w~Qf/9i-k8X0*`e' );
define( 'SECURE_AUTH_KEY',  'E2&n21h[lWg>55C*oKJ JEd>d&m)gtp3&/$qcl6r<my*w/(W92eHA_Q3xbaP.@0 ' );
define( 'LOGGED_IN_KEY',    ';on1d/ZN/, b%(|Z&!M/B@MJ~.Qf.IU>nd4;GH65)BFfv3B@)<[+Xm(qnPnq~zW`' );
define( 'NONCE_KEY',        'EZ-B:]<DMMhcuv>&tCbnJ-KDErgCo=Q^!1hhH58D14&#<;VO*ov8cu|s_oNfm>2K' );
define( 'AUTH_SALT',        'oev2%vG(0F*RK6E).i[JE5M7g>*2l@a][g0B4Rg|](PG7M.ZAjJ<1^3%47,u-6vL' );
define( 'SECURE_AUTH_SALT', 'dTodnZ0OyzLDY:o}A)Jucrq[7ocbvfyB6v~ga=G_P&;HuB%IeLTK${IgO$;n/n0J' );
define( 'LOGGED_IN_SALT',   '_[}E1eO8@+HgJ_:PSsz^h`9^Zf2#*}4%- P5NK>@mMbCld+TfHB`@O>S/aF+`kB_' );
define( 'NONCE_SALT',       'b5+#v>15wOvfQX:DkUNN[,W=W!qTnM2,JHY,8}/]CoWkG|k4#_b7`@]-1$`L2d<T' );

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
