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
define('DB_NAME', 'DB3142705');

/** MySQL database username */
define('DB_USER', 'U3142705');

/** MySQL database password */
define('DB_PASSWORD', 'MbvUI4TXGVgTWj3B2');

/** MySQL hostname */
define('DB_HOST', 'rdbms.strato.de');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '<2E0w>96ZqbAL^ROyDsO]a,*_Q7z+tGTIXu0s*Dk{}Fr0 T.wiPQ?d=x.~Wv$VQc');
define('SECURE_AUTH_KEY',  ')|X*Ri0B]UUWCD?+X%aQ_UmZq<}]U[RL|wTNV}H4K;k^4xoE?}</-nV$veJQo!bP');
define('LOGGED_IN_KEY',    '&y7N0M=uR>!T%58>(w73.L`d8JZ[s`?vAvyhPPKj0cm&8c}wmDrluN`[@[tM+h8)');
define('NONCE_KEY',        'lN}6xMBlzYct@b`ErlF[6d^Ky)!bz^3q;KV;#x`a)d!JVzJM3,Ddb}.UBV_z)20v');
define('AUTH_SALT',        '.;a?&kW9$I5K6w2p6@F,!/*(; }a] ;g;Hn*M1R`RlCU{C/&85e,wa`$L_T%aHem');
define('SECURE_AUTH_SALT', 'M|Ry$|S~nu3*(>?=;O(D]sq[{wE(JI2EF*:Mt5q7r,0V7(N*$;1)B`[.-Z/8V`10');
define('LOGGED_IN_SALT',   'j3b@2M`[;^<]~DAXu0P#jWL m2>bntT<P,?&#4F$3}J1g*J.x%}|F2Fal/mlM4^d');
define('NONCE_SALT',       '*}f|u)%Osz#vEN`m;c>]m}z)g^)cc$AolDMkt6Utg%%2 ,%)Y^i-t2rS|[o]po29');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
