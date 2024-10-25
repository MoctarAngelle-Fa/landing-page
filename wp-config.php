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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'b$PVQ)n<AF2q`traxo!H`W,Q<~g%Q_o5+?K?5OMzbWeCzHWDBVKBgyc=CQ3I_,#R' );
define( 'SECURE_AUTH_KEY',   '<=hefXt`VEEP:J#s-1+]PTmoNI.n?q |`ad1|&My:xC;LE}xQzLtQGC_w@Ps*_TN' );
define( 'LOGGED_IN_KEY',     '|`Gs<0&j@ecpz4;)Jz>&QHyP(|X#yujTAKYb)PK)(`Ns.zy2w[|#_UzCqpdD?5/c' );
define( 'NONCE_KEY',         'OOuCfl?5C]_RE7#fheXY&lxejngq.3*&L3F[KOUNmmMJaXqRYo(`$P;par1~{^?$' );
define( 'AUTH_SALT',         '(xe;J,Upc^a-p2J*tF+XqD_V2%2a-ZO9$mHqi;D`vnipE nRtYE43<2{[c,6ku<g' );
define( 'SECURE_AUTH_SALT',  'Nntk1c?P#8#kk#u_q%{&8N-q,4`>Kxcu,.>8::~1>fF>2Cr0}VF+`]74jtDB?#?A' );
define( 'LOGGED_IN_SALT',    'M#*b~[]k^IWoi,Z9%$Wj9Alb=8-D#`-fY;/.kJ{}%]oekwOySyS^yCH0;h><-&at' );
define( 'NONCE_SALT',        't`<@]x;hg/oK05Ild?J8wL(q+cuaw9:d= 8M^]W{vn$:QCqart6)45-?>*8%N2x[' );
define( 'WP_CACHE_KEY_SALT', '+@)$`xnJK(pRj1MDUHsXU0a(^b%i9rEB]^? >wdq(Eb[MFST2[^|.}H[[SLZ>W)M' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
