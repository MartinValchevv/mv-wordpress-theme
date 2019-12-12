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
define( 'DB_NAME', 'wptest' );

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

define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_DEBUG_LOG', true );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '{I;(}ud.=E7O$87#]$q}X^B./WBn2^UTgbz9[b_a.Q#yW]IOCd|[W}C8ivf[pG&V' );
define( 'SECURE_AUTH_KEY',  'fX+B2rzMq15zwVv1|5x)pOz~9Xk7~j*4!D%Bx`s4j=rkCgO|%<jYX~G/2W]NMim&' );
define( 'LOGGED_IN_KEY',    '_GE8#vi8TLXQkpPZq:*$S*-K=Rf!rnfUeQ2Ht5ES-[$:,dmK~^qFI#:[QlVWKO8q' );
define( 'NONCE_KEY',        '4jP76BQ&WzLZ5a=K^ag^o,cio-+>j y U}ytXVNq^tIuU,e?H)nbU]abY,2-Q{P9' );
define( 'AUTH_SALT',        ',//~],8#Iv|hlFB3t|R>^s|fG54>dyQ!5!fm!rrpkA:sm,(Hvw0Zp[A6ln~ vR#9' );
define( 'SECURE_AUTH_SALT', '<iA&v*x~SOKYJ^(_XYCQSH5jd0HRK:-i;UMKQQl4pzzL WKb;_fS-9Hi/HBUeSqp' );
define( 'LOGGED_IN_SALT',   'bD$2vwgd,0<y&Fa:OCz=;}%EG&nJO4hmfGD.slx<,L#UyI4E$o{l?R,*T40-n&${' );
define( 'NONCE_SALT',       'oj7zx [f^o)|ZLO$nl5q[4B)lfE2>:?>`RL2L)x~)q3#nlT,WEGMdX7 F:tn7VzR' );

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
