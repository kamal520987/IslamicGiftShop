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
define( 'DB_NAME', 'islamicgiftshop_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'n;XP(v`W~iJ^?Ug*s~hU,/]{jZ100V90l `>OM<<[UcX0LN}CvW{Gow-kt$CcQ9r' );
define( 'SECURE_AUTH_KEY',  'Rx}dhlNU<1l,&(CS* pNwb2A/}757Bpf9w}CLSPx/N.|IASqy(bz1>}105vij7%@' );
define( 'LOGGED_IN_KEY',    '2k$?-.K3z#GE?Jo?]QyEX@DgCEQr5fjiosb}%1EC7#D`s[DHQ@%{>x:hu9b9SlB1' );
define( 'NONCE_KEY',        '.t6*4VrzA3ddT<7/.ckj`/mLKqT{;!%CD4NH@&*F)C>7dZRF[p6=GdHI5Wg7Pp#W' );
define( 'AUTH_SALT',        '>p<I6W1/):R0_I6<^{slnmHnX1[we-BBz}mPMon92)QIi:pIb._ejAe&)S(p:^M8' );
define( 'SECURE_AUTH_SALT', 'SDH+OV~bIv>i)m%W~gC4t?b>C$/]mQXc6Oz/(*=o94D=Vq!i6yMq5oNh9~5&+<Y^' );
define( 'LOGGED_IN_SALT',   '1V1P!EnUk:QWh Yc39<tD,>K%^ZyuqGrS>wpU3rZ/O4#EbL&jM0UGoCI&D%4kwBr' );
define( 'NONCE_SALT',       '#lX&,Fc03)u^(Gn/F]>iux[X IE&U_b;T,BMPh]Y|pFdDV6[1VOx}oT1%8I~ei#|' );

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
