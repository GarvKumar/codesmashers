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
define( 'DB_NAME', 'minorproject' );

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
define( 'AUTH_KEY',         '2Yb^Mya[-d2(@9v5?f=)d-0ZhL`TW-?=6+Hs-STd[cUpj/eaT9Z@<ZcJ/6D(5x6E' );
define( 'SECURE_AUTH_KEY',  '#Pt4FgSR$6 lf*V^;(*O<75MEBx}NiPX>6OGe`6Oq9XaaJrk@XiIF=RHa{CrKQ)=' );
define( 'LOGGED_IN_KEY',    'pPX,O9pfM_E]sH:jQ::FeR/_.4WIp^6F66ft~Q%QFVsCOa(GOD-AkZ]gb|RZR7jK' );
define( 'NONCE_KEY',        'aJm[wiN`fY!@NbzB@dh~?Z{;&cJex<wxk-hqOY.o-{Tk2PIQsx*XsTT<[@4hB}%Y' );
define( 'AUTH_SALT',        '*+k(veU8i3wt7B$(^+SgML8&%8BrMiM2dKw|Fz8;Nm1an+KAWIFoPF#Na`1K6T=r' );
define( 'SECURE_AUTH_SALT', 'qB4#;J,J^#!EZ1lm;5xJ/nW`={vn.Ae.4#P.][*.LwYHET3@_>Lk]UW`9}s_-|*<' );
define( 'LOGGED_IN_SALT',   'F#~#P}2Sch}-gS1.$q,&d02bz%B^,c0o0-b #QL{Y@{ 2vyLFAi-E$NFPy!&ecza' );
define( 'NONCE_SALT',       'ElsB6%ORrY6Fq:dES sIM`.,XS|e8I&6qzMQf#>Iq{Q8@*@RW]V[g6.Y7@Hx9m~y' );

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
