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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'z*,N.M#YAj}y22I|b{,bp/,k[B%rQ=e{FIYeix[[5PExv:u&0qA&8YGsx%raeIlt' );
define( 'SECURE_AUTH_KEY',  't^3004q6ck_t8b+`Z1Y0-=@jz|[[E-8j+pT2Su~MW+Q&1=h+~}@vjJ0=tf!Pwd?W' );
define( 'LOGGED_IN_KEY',    '.Sk{VewE*0zWrk+fm[-Q>_qV;t1oWRZ#o[i{.[9eHI4fI38Q;-THOt:[iQL#CLa9' );
define( 'NONCE_KEY',        'Idcy(Zk7Gjvsh^{1vADU|*bAK]36N iy&+gg`J-M$vCa6AHt@Y11Z&i{/L$+IYn/' );
define( 'AUTH_SALT',        'Sw*w`f]C>odgf$H?xnq!|@-m#W;znEH61m-Xw8$4nU=2t<UYHcJ+CwV7A!LO/Jq#' );
define( 'SECURE_AUTH_SALT', 'Fwg;RpD<$|MGQ{l~anx#U7g/o rC;>XcxSd KXZhq: 1])_`<cgX9i9z 3;!PfPn' );
define( 'LOGGED_IN_SALT',   'rs0Ok~rEKHVfuSl-L&P{hf0(*@$s4j_:>bi>gYS&1DzD<nq%ybu<Egmzuf#>.8%{' );
define( 'NONCE_SALT',       '!cl#QC6V0>tzmj;>]h=X6y@_OE>GRC(OouSv4C@MI>?s|^*Q=vyD*j6E~ZtY8MF,' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true);

define( 'WP_DEBUG_LOG', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
