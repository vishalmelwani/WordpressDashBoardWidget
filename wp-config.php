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
define( 'DB_NAME', 'wordpressdemo' );

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
define( 'AUTH_KEY',         'FHb]F[F)Fz6bdemFi=p l{#u{{}[y1dAWlBq@[=5 k8%fN,3TN8iPn`%j9vM~ixD' );
define( 'SECURE_AUTH_KEY',  'W/ZFR8;~dWNhh |lpdG^kC/NiQsD2*kGdV^7EMfF-)-bBx aU7*0ci:It5w;KluZ' );
define( 'LOGGED_IN_KEY',    'X49o[]zJCk},`gk#Oa &I(#a{aQPVy 7jaOH!4nUtBOr2.^%^#8dt4_k{r@iyl5,' );
define( 'NONCE_KEY',        'kBx)xaBWjD8X+$^1+2Z>[A+4uduo]nE^nKO<XJoUe[D=3x%ewdH~6n(eK!4+qLW]' );
define( 'AUTH_SALT',        'h-mHV=ZM/^cGke$)h/,.rmIHf&|8[h_5h)z@.G-nP#`YIJ0J(;SywzY|(Fk81&*_' );
define( 'SECURE_AUTH_SALT', 'G_e?~<mEIb,&*@.D>gJ:YNOQlo@/U*l[`rs^3I__TfMV-3JfRTaLk~B+GeoDM8#R' );
define( 'LOGGED_IN_SALT',   'lB)+Yg<o-L.GN@#g9nN[^,RVW}q<J5*urR&h{ywhlEwqczW^#KkiZNZ1nv??E_2P' );
define( 'NONCE_SALT',       '2TLM;xP#nTuxkp3%~j:w=kLG4holQUpx3]hF]x_gRi+d`4+7Cs)`-]hN1krj9^G[' );

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
