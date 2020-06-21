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
define( 'DB_NAME', 'upskul' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '#XCM&TMg5gDgztr-={|1MA~TqN@{X13(j.t2h-=0NRX8$F*>Z)w?4vK9Dw{vRV)J' );
define( 'SECURE_AUTH_KEY',  'DIW~+JqNc5iK #Igs1/q}+,DbGwg.T]EaL3-%]>9!4o:`?HFf4L&+Z^%Po)X}Ugj' );
define( 'LOGGED_IN_KEY',    'p+y@8@;<Fq-AxrjW{dmNK/7`A@c{b0ZV7<Uo{:9Qzgd}zKSGfs_Sc&,_ZgH*_bST' );
define( 'NONCE_KEY',        '%&~A+lI06Yd:g/=bHra?prVo?}vM!,@MCwRjP(ya.H7vL6<G7?ngEFZfI}7@/=gZ' );
define( 'AUTH_SALT',        'g-=CH*w#U;D]>3v+&Q$_{`zSD9omL;Oc>?5}Q@er5UiA1|_j/o,RNO]=Fk#_>Ug]' );
define( 'SECURE_AUTH_SALT', 'C_UT_#N9*%3O`83ms}=K?.KUhHOzTDR?y[I}:e|0ET|8?oC&3;5{S%&#1*1!]E*_' );
define( 'LOGGED_IN_SALT',   ':4@x0nn:M%0+iMHC8$=mk&&yx36JdB$Bo,D<nH1JH7uJZ$i9,+jhUpWoz<h%>b@Y' );
define( 'NONCE_SALT',       '44O~R^ooi/&YVD57<+e<rE,/bD >^6A9Yfd5DgX/#2@cA0H=9Mh20S$%k_Ab=Mk4' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
