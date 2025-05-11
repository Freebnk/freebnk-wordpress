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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'db');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         'J?)ful_qWc~$[!>4S9:*h=<P0FLYs+:zILA}VE(4ET3RmK8@Sd$(sVfF#ROm[hwJ');
define('SECURE_AUTH_KEY',  '3tAU,zxP@hQtzW+Q[BJg<1D@DcsQ@wUse@@u{_9G<n4zevEwB}p-(;O=m<>tP)=V');
define('LOGGED_IN_KEY',    '~5DNSE,lhwR9]Oi$B[a5n}*)(2X*mWnM;>5{:=I^U8YfYZh9}Gp5.-8E{v+10A%d');
define('NONCE_KEY',        'E*q~ou20%zGqb[ueJZGvQ<m#-%|h]Rz{s>A(tH~W^AV$(<ooUMy)>;fjzo~rYPZv');
define('AUTH_SALT',        '~(3cnMHW)8|:*XB*nEw{:]P<g#{|Xk*4yOATx#{lS7KU|e1S5.Ao#.gT[^xt:+g@');
define('SECURE_AUTH_SALT', ';gIG8m^ztKJxvJw-IDD#aHJed$to5Lk-#anQ-7J+3pPP#>!)XZ=X{j3aO#@6uS81');
define('LOGGED_IN_SALT',   '2eSs[yrE8I(gyO0S}Z,c+}9Ub@R+5Z)sP!%<~MU=FDF09pda7g$lWf>HT?j75GE<');
define('NONCE_SALT',       'tQyFLqG1DE;yP!R@;bf#4GY6e)jC>6T550cVh.6X*5,7M<D6gp+.b#j(gtcRV=(^');
define('WP_DEBUG', false);
define('WP_DEBUG_LOG', false);
define('WP_DEBUG_DISPLAY', false);  // Hataları ekranda gösterme
// define('WP_DEBUG_LOG', WP_CONTENT_DIR . '/debug.log');  // Log dosyasının konumunu belirt - Temporarily commented out

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

// Local site URLs
define('WP_HOME', 'http://localhost:8000');
define('WP_SITEURL', 'http://localhost:8000');

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
if ( ! defined( 'WP_DEBUG') ) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
