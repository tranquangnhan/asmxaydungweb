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
define( 'DB_NAME', 'asmxaydungweb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'd6{PYY!-B7yTW(N$8eY^!maB3p`j65z@pM|Q-j+wSRY:Q7?({IN^rQn~h!VWe}xy' );
define( 'SECURE_AUTH_KEY',  'n]hB(*-{f;!>(/gj7$6k%geBQnTO+c~ke4}C286Dm8SF}4PzAj;k.$mr#i}U7?D+' );
define( 'LOGGED_IN_KEY',    '<fo(3opptTEWS8ZIQKEKVjoAh^Q(U(>:%Pd,N&S#f0U(qu`4&)>jQTlN4xLd~|`V' );
define( 'NONCE_KEY',        '5qAqMBj_`N*L#$rJK3[!X|LP44tVM0;/{3Nq(&`x`N#nS0;6)s}xF1zLq(sV$MrQ' );
define( 'AUTH_SALT',        '[`O?|!I3uLK+97lH!:*G+;E04yK{Ml~F^uLp8homhqIAx(;q38rt$&.x4gqffG]7' );
define( 'SECURE_AUTH_SALT', 'Eea#Wrj(NN?)>@J{>@B3LnE^QVI}&H&$.96UAf5</lXV.XkGiB}qksgCHaRMyc*Y' );
define( 'LOGGED_IN_SALT',   'h)vc-JF<^h2O-;rTT#!Hdc0)oe%zx? K!8c()%PvUXvowO9$U+}`lKGhP{G}4+!D' );
define( 'NONCE_SALT',       '<N9@[u?o]4=,3.LJ+?q^efN/!)HD(E*tTf+heGhVw8/B-u23)^j$XjeUo$bhWjK[' );

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
set_time_limit(520);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
