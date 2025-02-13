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
define( 'AUTH_KEY',         '+jmP$}S>Ij:45krUd9ES|U yhLTs^Z}ynhqCU9mR@Ld|fsdEu^}(ul)q251)=-7`' );
define( 'SECURE_AUTH_KEY',  '+U^E,#VO3{F1_Katz^8.&(6q(JA&zfc89ZlN.kc].e&y;N}olTFFQ?^3&Jt*9jnc' );
define( 'LOGGED_IN_KEY',    '5bHRdJsoulX#+#+k2),)!D?a>obf*fX8f(/R;v-n?_s4tlh1@-2YZ`@ j)p4(.=w' );
define( 'NONCE_KEY',        '!31_qsG26va.3lSTuq7O:>e,hLR?`tan>FP2,6}~aRaRQ)xb~Fwm+,n REKs^TWO' );
define( 'AUTH_SALT',        '$^qM@Fz?quM1Kx+xoN61!t^U(C^=^;%gmn|U4{{>BTQSGi*iUsa0-`+c#7DV+*yw' );
define( 'SECURE_AUTH_SALT', '(9bR,68]],IXjfUTt%YH/^pF-w5(uXS;6D}bh=M3@:@KYS&E;s@]To{P_Q&!qzt~' );
define( 'LOGGED_IN_SALT',   '*y!BS-awBhx/0EC6}67%0_YspT#0GE@l801i!7W$?5?KSrhHzQ6VU!s3wTXG=R}P' );
define( 'NONCE_SALT',       'he@{n!8N(f>w|yDO~L61#K:6;^&(2AdUM;-!=#*;wqR&,<>XI<FA;FQO8!SZXXqk' );

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
