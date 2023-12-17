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
define( 'AUTH_KEY',          ',FU P<)8JxYt46(k,J9zao()w*it3(Kp}O^s[83bJr_x_IWY}Mn(%={dQMSG|<h*' );
define( 'SECURE_AUTH_KEY',   '2}dz1ZF` y!<yq|jR@8e!G*xpiq!]P-@Tk*WjP70z5?U&8k5zzo$d@UP.gEoAv&w' );
define( 'LOGGED_IN_KEY',     'eQuKOkoi=ea{1At9{wl6X#r9svHb]Vo{tRzfXgB}gFiu0%VC3Plm#i)fBj!SFu~;' );
define( 'NONCE_KEY',         'U6KniJfhJrwfbKr~ePT|a6C0{,]H~u`U4Qd>`]j!s|Dkcno_m+r*I^&-]gR2XZ10' );
define( 'AUTH_SALT',         's(GxxQlqjt+nHFn}{J5v3S5/a%HRLs):a~e)Boa8fFI!3v-?lalmsg%FW{?^Up,]' );
define( 'SECURE_AUTH_SALT',  '7znXt}]x#;efHY5V=]b#>$&ji`6E|AbD]$K1;x<.R=:?t{D.9#LWZC0W3hmAt}sB' );
define( 'LOGGED_IN_SALT',    'Rvq,;$*clR?g/i7YC6e%r79`@i,VHQ|:^DRrqkRC,yf`K{lAIuSK0-op7Mkf&=40' );
define( 'NONCE_SALT',        's.!ooq<ICp$9:k<`_/(kR[OitJ=r3,-t|1OAT/h$Jc:o~A3SCmOnCgx3X}c;vtQ1' );
define( 'WP_CACHE_KEY_SALT', 'c:iWA%I;o.2r0CF@j]Cv)#Sjy[T<kx`5-`0{8W66_G&RvSEwtM(/lrPA^eA6dAmf' );


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
