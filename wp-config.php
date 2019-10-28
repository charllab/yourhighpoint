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
 * @link    https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// Project root path
$root = dirname(__DIR__);

// Composer autoloader
require_once $root.'/../vendor/autoload.php';

// dotenv
$dotenv = new Dotenv\Dotenv($root.'/../');
$dotenv->load();

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv('DB_DATABASE'));

/** MySQL database username */
define('DB_USER', getenv('DB_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('DB_SERVER'));

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_HOME', getenv('SITE_URL'));
define('WP_SITEURL', getenv('SITE_URL').'/wordpress');

define('DISALLOW_FILE_EDIT', true);

define('WP_AUTO_UPDATE_CORE', true);

define('DISABLE_WP_CRON', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'my;sAVu-o cUkJ%WMS_|hakBPf7O(6>!B>G _nR}<=t4|k&l4.]yfq2$)57^GXk0');
define('SECURE_AUTH_KEY',  '!m>6sbY}m[!+;|`=*}L?m.B_;Ruvc~wxzhu(KkVl- x;X-2tv]X2V+vu!>o%Vm!g');
define('LOGGED_IN_KEY',    'TVdil.APUd/p&07$}k|+LavJfNKE5*]K[?Swj{;gMyGH2j%l-69TWl,3e|2GOVT2');
define('NONCE_KEY',        '(Fl6#{&:^!l<q0f,uW)xDS3i1Dt3&UwEktXlhqi9MT}yxID2|bL[+ci/e;2SdotH');
define('AUTH_SALT',        '@XIbrgxjXa09p1^oO?}eOU^v{eX7`%}7^NN-EtuGATOW408&e!kUBuX{2b-/5A&F');
define('SECURE_AUTH_SALT', '`4^s_Kqe!5puv+]|qE_={)g/&z?)+3=,8WU[.{|qL|Q!,|a r^AU:-?~UeOvJ:YD');
define('LOGGED_IN_SALT',   '%N1*v1Ck+]8r#m8As#^,>V^:sX&ncPe,S!h1y:rN4h<[-GDT/+I{~.Pa..O*L^Jj');
define('NONCE_SALT',       'BoEW2a,soNo|z,:9,_EvRJ4iK#wUZU_tSUL|%b9?33b8O&uF3[)d{ el~t&76=|V');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = getenv('DB_TABLE_PREFIX');

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
define('WP_DEBUG', filter_var(getenv('DEV_MODE'), FILTER_VALIDATE_BOOLEAN));

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__).'/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH.'wp-settings.php');
