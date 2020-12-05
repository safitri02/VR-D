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
define( 'DB_NAME', 'wp_lp' );

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
define( 'AUTH_KEY',         'J7DNJ1op+}eU3wdm7&CwPRUUQ=uj*x}3^+&=}uH$Xg$17Q0f0:lUIW7VBTmPCs3-' );
define( 'SECURE_AUTH_KEY',  'U66X`k/Z>Mo<vfgsy6)!g0?V!$}IN.HD)u^]gD:@ ]>1jS5(xF(/PK*(2^tG*rC[' );
define( 'LOGGED_IN_KEY',    '2-g4$BV*Sxxi}JmIgY!j{yS{}G8#B`0(lM_GK5<M78LYzN>MWU:PDjEQlv*9!=#y' );
define( 'NONCE_KEY',        'zlAC[gtXO{:WOIHVvSf>!Z{/M.&f.A~2E69xV9Nf{sMu!~dBx/4]>0s>c5Y!>[jj' );
define( 'AUTH_SALT',        '2pO]nR1]=#2l7xQ|.2)@G7v0~/bhj%5INPjm,`COMxpS+0|6bR7+hOarnL9sqp,V' );
define( 'SECURE_AUTH_SALT', 'Nbx|1 fCsqT_W_4ZyO)D5Y7{P,m<5g+{s}1lrKa$^Xl~&Z7_{L]{{tsb|LXh[xk4' );
define( 'LOGGED_IN_SALT',   'O,C0UOo`Ls XY+Qmfei-Sd^&Op3%u12K:/eLAZ6e!Tn7k^OgLjKh, PW;,<fEE/c' );
define( 'NONCE_SALT',       'Kgd6`xp;B{CO}%o64xkmrVg12[ia{E{OB]3f``%:C*^YmieO/cyMdzS&x{VOT*Pr' );

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
