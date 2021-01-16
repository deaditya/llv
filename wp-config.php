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
define( 'DB_NAME', 'llv_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         's8pUAQ#){t-Ehz!3jAn<?9Us)c&Md%pR3h&u`PWNw99`P T8]hVnsSlL4=|W]`/k' );
define( 'SECURE_AUTH_KEY',  '+{)Kn_)bh]36f5)pQ~{V5 ;11$e7o_Zq(0SJ=Q_S+$E}*kiJ@o+}pO-@jpa+Z[vv' );
define( 'LOGGED_IN_KEY',    'D~`cPJNU7-lL]71|o|PF9Rx V;>3p2i,9m_b:enb]b4)HB,qH30x{A6M]w-~,l}N' );
define( 'NONCE_KEY',        'E/QH*^22ta3{rIPBZ= F=$Q)/*8VsC,#k#ToL+*xjHW#5e04LpMLY$EJxFKoB@SE' );
define( 'AUTH_SALT',        '2V9D}ykyRv8__8iq<]b$9]1l0,72GiA7O#lrin$; KE<TcmSaSftO;f^mc$,yw m' );
define( 'SECURE_AUTH_SALT', '8!vO?BU2dU%5e,r?Oa_l[gtWT-7P:3OeO5Hba}wH5qy<`_7:e(L(RwSX?vtt<zyY' );
define( 'LOGGED_IN_SALT',   '#G)XkbGcmo{^]w_K 2Jk[9vuh40.a[3xvpwASiXJhD}et@O/-)yiKN; 9Ywsrzn`' );
define( 'NONCE_SALT',       ':,Jn[L;kIAkKf=e;b^#T7YjQMa PBcSmG WCrUa8X=:Vzz1-zd~RMgQ[`Xs62#/R' );

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
