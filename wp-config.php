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
define('DB_NAME', 'ecoart_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '}TWepkJbU^@ c0IO8~|f`(=14}$PCXx2_j#q,$1RgM*8l3LO(TUT5a&$fE&w5sJm');
define('SECURE_AUTH_KEY',  '*.=*@{PMR4K_Q.$f#<jF2bDBevhi{I]j#%nOcz_hD3qD,?H^o,-9wfYf|aX[Sj1b');
define('LOGGED_IN_KEY',    'lttuFQH*}y!r_%;3O?Nx5P|K`</;SMj}7/Gm$!`cB3=A!e,fmQfNTI>T]@1pqv9h');
define('NONCE_KEY',        'MpJvxXT<4R?4F`oIk@4_;B++SsB:jspI$!x EWj7_vT!Ou%X )Vbp8M.fNM*^q,L');
define('AUTH_SALT',        '@%E^X]}|-iRqT0T}-H%Qb7u))FIvHOLT{GZ@:xb: )0h&k&4wsL=.4}Z2g`Dy*2}');
define('SECURE_AUTH_SALT', ')yF]I})NqX6&D/U:`5$h{1+$aRfk>:[} JQH!KuLH<4Nno:YH~9;y_dGIn)5-/=w');
define('LOGGED_IN_SALT',   '[,sQWSMa:Wi2snP=oq>AGp__ +J5BjznMplPf ? i~ar;:,}4l}a8qlT/6,h&Zp6');
define('NONCE_SALT',       'Ifvu_!HOrP1uWJ`lf5tyzc1}dRW-3 DKy`15QPH?xPQ.n>`5mR6EvMw[jP4q#4G8');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
