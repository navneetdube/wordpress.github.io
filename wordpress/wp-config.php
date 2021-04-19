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
define( 'DB_NAME', 'ecom' );

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
define( 'AUTH_KEY',         'P1kN:~P[IPP;Xq#%!fFF|jy}iXsTt$<$yQ[Fa?7Ayu]>;LMO^%0ubP;VYej#.)fu' );
define( 'SECURE_AUTH_KEY',  '!z9~SGzy-U<Euq=2}y4izeT0|rR=Mk542 v5$je[fM[ktxH:p||Gq5ZT6=]N^w{5' );
define( 'LOGGED_IN_KEY',    'lqW,@Bjh6@uV|_e356>=vuJ[wLc<v?X,|>qkBE9LVa|C;Ib/%Ea^T@>qiG|!E-lx' );
define( 'NONCE_KEY',        ')6sIWi4YB=b*c|P1KiH#aEQL0rE_SwWZ@*MM/]$^ iQ/AI?i=d/*@%l:mmroXI6a' );
define( 'AUTH_SALT',        '`Go2mb$YR$F@k{$pJ/SZ@:9u[?4o3Wr-HWwB;A5l75qj+vI2[FrNFZP$2!Y;ox 7' );
define( 'SECURE_AUTH_SALT', 'zh,-*{*Eh*~5^cT9>~<n[I*mF0Y y/1b=;Sq=P2!4yJq>zEFa55Pbxc!p _!mc!W' );
define( 'LOGGED_IN_SALT',   '[j)}Jeql2BDE_v`%3tLy#M8F`;mz@+>L9Z7opAIAm;}Apsrje6gkb:4_hB7>cznU' );
define( 'NONCE_SALT',       '/.voZvaN!Cd$Dlia8g;AFl;M/[=cLc@Ecj2+?^p%!W(vM$ajH]8D558b62m]r-b(' );

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
