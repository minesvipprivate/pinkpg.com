<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u746296090_CwT85' );

/** Database username */
define( 'DB_USER', 'u746296090_eLN3B' );

/** Database password */
define( 'DB_PASSWORD', 'wXu1WkcmpY' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'Q%3-MU.!M>8Yq-]Hx?1P82RQbCDiHFv,.!w73q6[XcF|f`R|=ebG`01aIbtX+KP;' );
define( 'SECURE_AUTH_KEY',   '%Zr~H3tQmeYdwa7pGB}`QAc#c])A<vFt1Ul>gBLWn2Y#>1O&i5=Kx{zN+2T/@8&.' );
define( 'LOGGED_IN_KEY',     'rTxM:Qq<kb^Bo)T1L9G8K$FGc9-4* HiJ0e?8HN(D55_2W}iM]ZTH~Z-b`] MG)=' );
define( 'NONCE_KEY',         'Rz<$lGRzcO$9:5^r.V&M*@(cw@v! Z&s2)DV8A0-UchC*S/ZagsOiAl0^ovKI5O3' );
define( 'AUTH_SALT',         'Tg*M54R&?9XZdTgB}zD6Wvkx2#[voy||(I[>Nqw)hHsa2z 9C%O7:,NI?^lI|H;p' );
define( 'SECURE_AUTH_SALT',  '1GBS%zclkd2+0x{]{~<~z}(deNSjmQA`6|?yCvK^r9hihd`:pn*_N3AAWFV=qFv1' );
define( 'LOGGED_IN_SALT',    'S!QeE^qaN[<&<:.>9Yo6o,m7;@E]6~Q-A,Kfu##:of.|>]M=+E<44St^2tw^kX-T' );
define( 'NONCE_SALT',        'w5?V2V]pnz]lBWTcgz7KXI]* x8(tNdhFFawLJFz;:M-`xM1 cgtz~Xn$uyN_ID=' );
define( 'WP_CACHE_KEY_SALT', 'Qe)cmJ+l.M&&T,O61t75gw]GPgAMB`SdNlSVXO:n&avx8PjDq/iBDjJ!Dk#rvxz;' );


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

define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
