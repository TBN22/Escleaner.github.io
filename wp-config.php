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
define( 'DB_NAME', 'imran' );

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
define( 'AUTH_KEY',         'd,.|`vaVY!+Ka>-H:_m!_1O=xv9QAmw|(b3~XKiO$SW@CNLAOrDa/1BwNa)@L5!n' );
define( 'SECURE_AUTH_KEY',  'd01S(|{^Eu3+4nRne?/d#-aqM.b@s1:lX7@Vg1Mn&lU/FrW(OW;MhU]D*}P4eA#h' );
define( 'LOGGED_IN_KEY',    '+8_2*@Z>|cATh$omm?)ezf|~)z>uu{E*<xMsfZ__6<k!12twN-XID]YdT?W$F%yA' );
define( 'NONCE_KEY',        'nE)/NoG;#TK~=(X/#b+x;E5lR-?`Pl$4Mz}w^@0u~`3r/9K94KR)+HXij2zN%}i5' );
define( 'AUTH_SALT',        '{Y+$l|BoiT(0^ge7;H47p)FwN3L]^e2@: H%RxEjUsHs?bR/x@wVT-jN}Bn$FRq&' );
define( 'SECURE_AUTH_SALT', 'KuOTHNa9FL_-B4B f%U-B`u(2Gwcm*ab3>l=z8|oXGei,>RsG1Kka9vmuu4m9?y@' );
define( 'LOGGED_IN_SALT',   'sP1n6SZv}v90.X]G02~b+pf9o*R.Z}qj{c5^+1mRdT6M~nPRVP2J HgCoJwOt?bP' );
define( 'NONCE_SALT',       'X`O6wJX{nwJ%&.`xOL35d[485aYYH3CaDPP`<Jv=A<,DB%~7i0={>!v(BBk^zgO:' );

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
