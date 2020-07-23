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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '{{database_name}}' );

/** MySQL database username */
define( 'DB_USER', '{{database_user}}' );

/** MySQL database password */
define( 'DB_PASSWORD', '{{database_password}}' );

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
define( 'AUTH_KEY',         'nzAI6,H%o-Bz[4L0@Vp1~^!ocK4s9pR/U&fyOYf?(Q5RS!L_U;Hr>]<a$]P(R vU' );
define( 'SECURE_AUTH_KEY',  'ylm1C-C:+Hyc}6Ra=5yG&27Np,Ed/+NeyUD!3AK:WzG_b42tY-zFH&J[3b#9;m:G' );
define( 'LOGGED_IN_KEY',    'a-`LLKu]7A:J!0q7}<gq}jM{Dz,w?Y4IGrw/@zZZnS5aE{BqW!# f/G7U.}%O^7^' );
define( 'NONCE_KEY',        'M_<#~NfGc=ezQ]O_bn^<hVctc0n8pM,awEz~]1#BT8R4QHwxs<gVfC#m8/<I3lep' );
define( 'AUTH_SALT',        'T5Dt_!E[zc0#S[u#[5{z$y0$2GyXV3k*f>JDw<:VG#w4s+zc,H#gic4 YQc3QNQ0' );
define( 'SECURE_AUTH_SALT', 'ES*ZL7}nULd=YC~CVi|30~x&&2nSrf FY#hzjL2BDvoNW;h`&@(zE{`#D.J%f?z5' );
define( 'LOGGED_IN_SALT',   '*OvsJa;4gi7/n#;>^75)s.k(:qX*uw$Ls?d%H$IKBI*iI-|OKzea5&-u|bzsSP9Q' );
define( 'NONCE_SALT',       '.#`{2x;@c6GnOmTmSYfpY,-%tmZ3vU;hjAFndS2My1nG~<=Uu ,KJSTl:]go$uYp' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
