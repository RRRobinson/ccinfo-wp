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
define('DB_NAME', 'cc_pce_wordpress');

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
define('AUTH_KEY',         'E:|/5 vK6SO6%ZXBMK?6Q#`dpIjYdRnm#s^**c}nLYYLYE.$~(j_|e4^/49[wqS|');
define('SECURE_AUTH_KEY',  'S*3tdA:]e7uiO#:+y^0_ o$-ZD{*U^>WMXnWEsZ1)Z5yr_?vw~JgH`~r^K~?6 E0');
define('LOGGED_IN_KEY',    '(]@qfl}8OehY{V-bM(P#U?uw0;7an!7>Xnf7g<S~Mew/kv5UMP[H&S-ZNCd! Q@1');
define('NONCE_KEY',        'zWB%IZ8+r+rjkSY(WYt[+X]u$%peYA(BMo!,+/=F=ifVAZ{].Ry=(Aq.J^h[P1S3');
define('AUTH_SALT',        '~M)UyLp|t|<qV-GgO=p>h[+O]T(^jb!7|m)q)c7NF%jmO+TgN+6zey+Z.HM/mB1,');
define('SECURE_AUTH_SALT', ' ^Z1[yp;rXrp:_o1P|HIShKs{?B?)#f2C]<f2U@>>DjXOiRWc$]V]R|Y=ZS]@q:X');
define('LOGGED_IN_SALT',   'S/<LncI1Yv(,MAxN6=:s4]]&XQt&iU.sJaAbh-5BWCixkDorNh&;%%ZX`` ~jCKj');
define('NONCE_SALT',       '}-k0|z+B*nYE}vhne+K{*a>|G L1^P:WB17V/lCX$Rz?K=>X+9e^vLU6<u4-#f[O');

define('WP_HOME','http://l1-rrobinson-01/ccinfo-wp');
define('WP_SITEURL','http://l1-rrobinson-01/ccinfo-wp');

define('WP_CONTENT_DIR', 'c:\wamp\www\ccinfo' );
define('WP_CONTENT_URL', 'http://l1-rrobinson-01/ccinfo');
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

