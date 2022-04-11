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
define( 'DB_NAME', 'wordpress-labb1' );

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
define( 'AUTH_KEY',         'LnIDu}5QKB}cTj%_snuBg/I/5qpfsjjW|gKK^oPqnvE,zw[Rfj>zfRT.b|O/J8Nn' );
define( 'SECURE_AUTH_KEY',  'v13_`QmEAu3PJSdfYo)s3@V{oX}v]%z$?5Ak96geWdUvkMZzXqA8+qZBqPB}r:#7' );
define( 'LOGGED_IN_KEY',    '<p!5dSAmAJy[|ukiK;UImshw&$i7_jRZ#n7OwTu#e$;|Wn.iqE]*w:Cxuc$IG& N' );
define( 'NONCE_KEY',        '{>69#S9h;+iI>wHvING[5V|Z&@z(iZe<R<@3ni@!:7%5y[coP!,D,+-.oI/[:nDi' );
define( 'AUTH_SALT',        ']RAW-lZqT[cD{V(ud+CepIb/fi20i$?X nNA2= k5JN5sw];_czan4^ -Aa8>P#x' );
define( 'SECURE_AUTH_SALT', 'P#s=z,G^<n)6(]gbeDekHXu#YC1_:2m/|8Y4pQ`,#H*N(;yWU3XX-(17{/8NpJA-' );
define( 'LOGGED_IN_SALT',   '.3X2c^USRv9=5gtZ*8qH+5UR+5b)y{94Xb-d12LbqoCaT!`QQ>0IAZbD=xh1P@:_' );
define( 'NONCE_SALT',       'gO>rR?vc=h0ppM`J*h6Gtu^dJn>W]GRa!-w%RVb3@wnt=oDHVIS6St^%y0<1=IvP' );

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
