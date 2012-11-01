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
define('DB_NAME', 'portfolio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '=Vh0zqW0SvzK&5$iBvAW 6+/$=2@`,Jc4v?VCUrD]yTe]lR<<&>gulRObc6#s09L');
define('SECURE_AUTH_KEY',  '#j9-sO9EMxoh/qW`VMa8<)nI^bf%H2QWo-0 LDRrf/g^goH5`cg3VgFC?r=,&P(I');
define('LOGGED_IN_KEY',    '|{ZC&+2w`!!Qz!P7Ve6#*^/9UsR)pj*O/tNnt8D4Mlcu&-ug{#6?%d]5ble-&)Cg');
define('NONCE_KEY',        'Go*KBhS3d 5+cyYx70z{VNxJ0sLV3WcWMDr_+9Sp^<,?FE|svNm&sj1T%^(8?`VF');
define('AUTH_SALT',        'p)w>]YCDNX$dc7;/F5<FGOZpiLw3g.HYwA-AA?WX(1lu3;kB-axJPCg~#HFh~gtE');
define('SECURE_AUTH_SALT', '%OBCVu3i;w1t?AJQQ&m-KGZ|OKDB0q!eOWe(NK/MVGJ}/Mo]DK-.>>(P!3f3e}`O');
define('LOGGED_IN_SALT',   'BGSd<jhv4kFL8nw$LYf6_2<&G5kXgu2h@*FAZD&dP9#F Cv|;q6m;u*f/j^wwP+0');
define('NONCE_SALT',       '(eu4GZ0}1fKuPkCxJb6Xi3$U}NMlx},+PM~,4aEd88roZyvuiM4&(NvQVnRfUWMY');

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
define('WPLANG', '');

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
