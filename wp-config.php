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
define('AUTH_KEY',         'z{qILRu>`6{wzs|pga[T$jb_6c{3Qjxw3W-u4WvojOl+]/exa p#Y0?O-Jt$}fOh');
define('SECURE_AUTH_KEY',  '*2f{AfMf r]KQ+Y%) =K9_s$E<2H:vp^k15qZmH0Z`J7.p|~>}RBR#L_k60;Z4MX');
define('LOGGED_IN_KEY',    '0-!#h/`d|8.q&n5p2n}c]7_L+Vt,z4}+|v%)HQ,$)EASS+=e6D/AL3Nic4ZbMVmJ');
define('NONCE_KEY',        'yGY>dGq(AcAAl%m8{=njM`E2m>Bx=beMK/*+qBAHh1SaQwo$b(!#l+O Dq;Aj{ :');
define('AUTH_SALT',        '4q~Jm]+Z( qSi_v8ui78~VZT|nHHt@;pV?tTJt4BjXeWkST@ ->/87f`>(!g+~bd');
define('SECURE_AUTH_SALT', 'HH9@)2!zY1+^$)LangXpc[q|0UMwcF9.BU>qy9C8#~w-XLL)DTCq`UG9-iS-TIgf');
define('LOGGED_IN_SALT',   '4>A+0vQC`fncoV..wM.&zFMJ|yQ>iWU1zxK@yFO0e_-~NsU6@g()|F+NkbJ.%+1j');
define('NONCE_SALT',       '*70_:u:<LnyH`b$]!+V#GEUauBA-;YUL`%.WJ0pG??G4]|W=LJ8 sChsZ-|e{w]M');

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
