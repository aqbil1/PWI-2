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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'WN6&[c<kN01]0RD-FHGG}<_YC>WvV>Q&E2(]%n,R!g+>t_@xf@wg7:X[$6<j35h,' );
define( 'SECURE_AUTH_KEY',  'C_c&6O5=Wg`p?;Xb>j+[,jlQnx5rQq3%C+:{zisb1t~:rd]@WfyevWK3YRz{@4AP' );
define( 'LOGGED_IN_KEY',    'f4.<YvFui&#]1o|Q}KKBTqa,}F5]&kHqAE9@^SJS.T}=B~GppmpE*W+<Y4V`:emO' );
define( 'NONCE_KEY',        'hNtukCQ2obQ,1OAk^-G)Pz2i/MB0{NigRS#ps$vb0~ :J[d$,>mx?-aDIPg4a,Kh' );
define( 'AUTH_SALT',        'QL#+=/eyPb$dS~om_y5D.qF1WyGPkM<h-i-<h$e.}u.e0;8P@% |AQ%f8#o 0Og#' );
define( 'SECURE_AUTH_SALT', 'kPACS+_sYB-$7mzfMiw%7:W+Rp{2U@C_ZCh]F4QjM*||)I-^ujk3=B[]=8SG.vQS' );
define( 'LOGGED_IN_SALT',   '$3&j]<$SPk!9Tl>E=]iO^H* $!5u)tce_x>:O_q?KtXD+Aocj!J=eiDneAP3yZ>q' );
define( 'NONCE_SALT',       '&Gp(-nz.^,=Act7m^bgKOErGJZucL#RY s^D<t*G|[vV-vc&KwIJ`yN&1[nu^4^Y' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
