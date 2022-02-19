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
define( 'DB_NAME', 'u565948071_BVSak' );

/** MySQL database username */
define( 'DB_USER', 'u565948071_OzYI1' );

/** MySQL database password */
define( 'DB_PASSWORD', '4rKiGlvWL3' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'Bb4I`#_M_ThF#(~r(cDz06;YZ,9Z4_OboX2%23lMe<JI&O-rKLt!sWCH=>c_z~m<' );
define( 'SECURE_AUTH_KEY',   '!eeUk]]]Ar:c2`=.aBc_<wrGYa&SK6c{+RiHjutBE8P8D}EaBRJy`uUY{7l0j&kr' );
define( 'LOGGED_IN_KEY',     '4I6ZY6I6.O+?70F-CAvqBh<?35fp)xV)2oQ*PbYKb>xAWKnD6=#|JSl/Y)-bATa?' );
define( 'NONCE_KEY',         'wBc1*Fq>L3{7fEMM1:>iW1@)S+86B/dT!J(Iq7o$6riH;Hwi^`lFB{D eo^pi^)e' );
define( 'AUTH_SALT',         'sCttO?DoYDL|eY:gDUQHtd-(*iqxht2Q@Z}/t.Hkio0_^cyIu5WXPz!,g3O8qG>E' );
define( 'SECURE_AUTH_SALT',  'XjLE4G<%?#!3lxKK[n5[G8H}7%,[ppT#&MN.IKc>Kt>3MkRtD9e_-Jxp m,.uKqD' );
define( 'LOGGED_IN_SALT',    'vQ.oB{zfj4HLyR;kio>TAur!@Y<tV&40;m[:qC[.TG~n0bDsnhgDBf-(:W)oG)fn' );
define( 'NONCE_SALT',        '0Hz{657o}Sy +!5ty`K-RQq*_/W>;M.1clFE8kQ67h-t$4yBi0oL*F@f5!DO6DA?' );
define( 'WP_CACHE_KEY_SALT', 'uKj}H2$/w9bR<l(3(ob,H_Vy~a-V,.C+>+oxdgl9|$H-&FKPMH}6/{$ofzHo5O&f' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
