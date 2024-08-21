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
define('DB_NAME', 'fukupaco_WPFXT');

/** MySQL database username */
define('DB_USER', 'fukupaco_WPFXT');

/** MySQL database password */
define('DB_PASSWORD', '4ww0FlAtSpPVatjWJ');

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
define('AUTH_KEY', '63444527b4ef9109a1dcfa25fa385e47f0d2245814e17cf3545a5e9237e8bc8c');
define('SECURE_AUTH_KEY', 'be53503cb4920c7a3d84eaae0e6337a2322a80104e925edc9b948401d753611d');
define('LOGGED_IN_KEY', 'f0f77abb60569c27f770e66ee4c59651cfa1b4f9e8b9671ddad1e6faac0600b0');
define('NONCE_KEY', 'fc7e153922146eaee9f97b7eefd8953a4dfa14781fbf1f03e16e2507e21ee4b3');
define('AUTH_SALT', '1aa184d4196f47667f6b3768575934e460a0edee2554c96d0a6f290663ea3e9c');
define('SECURE_AUTH_SALT', '45a9037b55f019d3a03e190ed1d88ea2f3f96a03f9e0b3d481143e842662d9b6');
define('LOGGED_IN_SALT', 'f36685c44a35206d529b0fb16365c4ce2966b7f8f0077dc054fb4853aef3a4ee');
define('NONCE_SALT', 'f30fad7ecaec5753cd88f16bf6cc4f2887fc96be610276a31737ad894a2881b8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '_FXT_';

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

define( 'WP_CRON_LOCK_TIMEOUT', 120   ); 
define( 'AUTOSAVE_INTERVAL',    300   );
define( 'WP_POST_REVISIONS',    5     );
define( 'EMPTY_TRASH_DAYS',     7     );
define( 'WP_AUTO_UPDATE_CORE',  true  );


