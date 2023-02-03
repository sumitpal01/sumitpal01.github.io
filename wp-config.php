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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'itsourdharma_db' );

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
define( 'AUTH_KEY',         'Cu(!c7qH?^oD^`zd!gp+z*_^x2(e[(hy}n$Wk:2u7?!Q>PH2N9j2G@DPNYb_$1i[' );
define( 'SECURE_AUTH_KEY',  'k6$(zt{Kq6=TX8.,0SGU?n0WgH {I9cZBVikx&^O(R[F__?jabL+<AFy3eJH<; B' );
define( 'LOGGED_IN_KEY',    'W:T@BPk/o4WKNb^7(/9,(It|:mIfh5FBGF63#00t8&fbD|2S0=(?VElG85DlY[;L' );
define( 'NONCE_KEY',        'T>2qb `PW7Q5(,6P)ptEwglv|^hA*l1_h8n[f`._A%{[%#HmO$JatR(l.#Qn&JP9' );
define( 'AUTH_SALT',        'efV[(3H4Qo-JvbPWqW)IQP#oIV?)Q{knz5gS<PtQTROCElL8Z,V|q;CAm#o[x:dz' );
define( 'SECURE_AUTH_SALT', '<r>4&w&&TVfq/hpC9)!CQDN%*xrvJ]|):/4mWH2AeB#-|z5%AUwv0}pKZBTp)@+o' );
define( 'LOGGED_IN_SALT',   ')iGW[/AH;8Wv4ZS-;)76M0F1Um=UEavJG&Rb%HFVhqS#t?Jj>ePdD|9M*pR |Y&7' );
define( 'NONCE_SALT',       'o1L ],L,aOMNw8z5KN_Y)o,O?pa@<#>~xc-/q5c0FbQ0 )9VS}3[UaK==L=(i1vJ' );

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
