<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'tioramirowp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '1sYYV7*|e5JX&LnyXC!3zhI*.#AWY)G|^;p~D}7_Mo,SJJc}l#Z>g)7iqx.NIEe0');
define('SECURE_AUTH_KEY',  'Txz?4%9BX4SC&Yd ?2hWEs`=.b@UTc<L* Dz5IDEl2]t[]/~Z!s[T&{wb!XT`#=V');
define('LOGGED_IN_KEY',    '#kdIC-AvsK4H3wfUk[nIxs:E;3aG;*(,KhjvJV]TWV /m0*|Ha~.rlA!wP<}?hvd');
define('NONCE_KEY',        'H<qAvwP3^Z7B39S[E87w3fbRnc<_L/@uN7^Z|dj_ep~h_GTMKx1%t=3PRR7_O c,');
define('AUTH_SALT',        '3N|-c0QS## ~j[4Vo-,,yUAMV|R|%.Kc +K,bMCQ<4^lz4on}|xA>;E|mmKX0U,l');
define('SECURE_AUTH_SALT', ';E}nAUAx84{ua|V+f:.yjT;M`laEcK2>&3jXzceE&12j6y?.Z**WyRaI[JZ/ON#i');
define('LOGGED_IN_SALT',   '{g>> Vvcu6&J7b>2n(fb_:_;P[6ZwD_$S/f!1-:*/b7D|j2< 9|TeRkW ke$=1$g');
define('NONCE_SALT',       'u[8hx*k^dmO-uJXkDJsaKjnNWNjA=KUh!Wob<$.uWRH?ZcfgBsq]cCc<=ydoKk?S');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'es_ES');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
