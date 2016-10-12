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
define('DB_NAME', 'zopus');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'SJ%RBGvtr`@Z-_m{g*Tp}cs3NFyy6qiv[D/1}gz*JK&Ej0$.i%}E.C17#j_UY8)+');
define('SECURE_AUTH_KEY',  'WoQJg2oMph,{z PR+UkD0CV4f3BPM8HmGs0ajqR4*?qmfn0 )!).1efG]$^M!59?');
define('LOGGED_IN_KEY',    '_lYq/+M*]bxMg&fg2KZV/xkgjW-S4ES8F&gXoTFk=>2?lra`CtZ5rusXY)Thvlgc');
define('NONCE_KEY',        ']!B9%TVqByq o{5Jz i/dMY6/ wgHwcJ7ZZM>xC*e*`A-(jmR#RpwQQZ3Fi6FW;<');
define('AUTH_SALT',        ',y=`d[#xvs=_b*XZ B5=Hg0}|NS)ghS{]){)(N|oRr!]eTYWJ$;c#vZ ^EWA,:/E');
define('SECURE_AUTH_SALT', '-reNL>9i)hnB7g}n/|NTKc6]F42mSHskq8A]oEKb^5W`h#22~xKyI^1jDOAg!C)E');
define('LOGGED_IN_SALT',   'H7-_K]D.2Yy>x$.PCE(.?;B)fp2{P]%W8.xF*.=?8j7Inmt|@O.ih[`$.#,jx]-7');
define('NONCE_SALT',       'sPY5)M0t[V?;x9M.jEA-7c2*Wv=S@5RjrB&r7OVAw,_Uory|SS3GEpxzfA|s.sHQ');

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
