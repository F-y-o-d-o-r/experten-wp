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
// define( 'DB_NAME', 'experten' );
define( 'DB_NAME', 'DB3786960' );

/** MySQL database username */
// define( 'DB_USER', 'root' );
define( 'DB_USER', 'U3786960' );

/** MySQL database password */
define( 'DB_PASSWORD', 'passwordpassswo' );

/** MySQL hostname */
// define( 'DB_HOST', 'localhost' );
define( 'DB_HOST', 'rdbms.strato.de' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'n*RX@-FZns013&Ba{o_v(N8|L*S.+=ViIDdG20{cNI-K%$Y,D=+uEN.pfF&<1Q$c');
define('SECURE_AUTH_KEY',  'mnE[P|4OcJ?,3RV0+2[kdT5$t|PxI%Tz)o8r/G*lEVE?kuq-fZ*_MUr*Zdwt+|`U');
define('LOGGED_IN_KEY',    '<4)d|EXJ24;S-s)mm?aWS3=|jK+20_WM;v[-Z&)P+BuK)G<pWm*}`.e#vmlJ8^+O');
define('NONCE_KEY',        '=qA*YLh~bZR{h?Q`$%XL-@U[IidOPYO@F(w|]Rrd2E167A+,B_l:]?n@7|!&#.x:');
define('AUTH_SALT',        'j%Qy$+o[I6:>[jIN#D($csR@{gu#n-3=8cY)pwx@w}%C+|O_ah2eNi0~6&1-VEZ1');
define('SECURE_AUTH_SALT', 'Z%x(>Hr4Tr~2IA]Jd%GOk@qm~gB_D>PafmM;v5*_z8fy{aEoXjT{qwn0+_}K$>:2');
define('LOGGED_IN_SALT',   '+pvj]8HijA&pi!$v;s/EC)I!Wt1P#W~Vn|,?I_u>+Ly?Oh{@?iuuq/xge&[EsE^b');
define('NONCE_SALT',       ']VL>s7-1xe@fB>$KI^-mrTO+6hM3osTZ<bQo;);(HRy|/aOs7]e!N?t`DZHGYVLv');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_ex_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
