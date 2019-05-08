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
define('DB_NAME', 'allgifted');

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
define('AUTH_KEY',         'GD/BzNf$CjSMJaAj]7JqZg|k)liRN}W(-9LxOh)|x6uW+?9(-/A)-dyx!~WQ_ZV-');
define('SECURE_AUTH_KEY',  ';3nOE<pvHL8N]wez^/vggWve|UnZGi;UZE]$8a[fv-F4@&)]0+%(e)/rkfd>yXH2');
define('LOGGED_IN_KEY',    'UFc^EzFO&*<sua-%WF%%o{Uz[tLTq5jb@,rc(BsMspB;@H^D,-CK4;HaN&C nOo0');
define('NONCE_KEY',        '7FWKILQCW=q^{~4o!]!hFElCnl~5_RI4hb9Tf*B3va0bp3OP -^ 6V#~MaC,wcee');
define('AUTH_SALT',        'w<6*tF ,i)4Jp:fd.u<w/+(_@^_| kF|?u>|VP$fF6ReS]LtTwN(60-HNkY}f=#R');
define('SECURE_AUTH_SALT', '~f$kun-r[UHQv89DOgD&<K h{Po*VUBF[BO/(4#VT]hm5(cxZO%%YoGKv5_Ng@6m');
define('LOGGED_IN_SALT',   'oCUNC77r164>.BS6T(/FbCtFm(0~><gCgmd h!Eg9bY-S2BX0M/[&efs6F2McGU:');
define('NONCE_SALT',       'xmg_#PN`mcq>=]o1xU#uTU[U+iiXu-a|_I7uc]WTu-+)]73QdFufX1M+kbeb?@[!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp';

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
