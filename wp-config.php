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
define('AUTH_KEY',         'ksS$J:C6|?0TC&U4e:vsvu$Kpa)KS$DI>:Ft9/SS1uGz6X=#{?vXA_cj@y=IB$40');
define('SECURE_AUTH_KEY',  '<(4Nx7$/v7s]C||Xv 9$@P`}?[#q/,P_|y9YxXTYAvz@8x$MfI2C_5T,XAl[.62/');
define('LOGGED_IN_KEY',    '2H+4/kP8r3$a^JH*^<k.:cmsx2r01EO&:}gd~etAF}5}|@/sdZ~IUIT0_%hITsn3');
define('NONCE_KEY',        '7O6Gd2S1/@8|!LJP093pCvm#`[I&,TXsh{f#q!2,F8OJi;olO-3%!EzyKbd8;tss');
define('AUTH_SALT',        '+Py9BB-$y_V]-XA-qY%S3-}U$`$F+U:h}zUcICY7A0.&;`9>?pT{r$%J&NU4E+AZ');
define('SECURE_AUTH_SALT', 'Tee6_dFM+4kr5u|?))#~Ti#xco0=jsr>pB7S3:.B(TD2kUcb3^;pH5(i=me[$dIu');
define('LOGGED_IN_SALT',   '?;?dmN*KV`?s[,I0C.ADM0#H{yM{&S!bhAnNI&AnmE|+~<:{*?[O+YO;_gfc?(Kw');
define('NONCE_SALT',       'i{Y2!0}yfa+SG9@]WX})w|iU|xI0qD$iLn$|eBE<T6Y:n&$*j3ulh{9P,cx./xe9');

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
