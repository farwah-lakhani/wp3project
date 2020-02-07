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
define( 'DB_NAME', 'oRWD46P4rY' );

/** MySQL database username */
define( 'DB_USER', 'oRWD46P4rY' );

/** MySQL database password */
define( 'DB_PASSWORD', 'kC8k9dMZzW' );

/** MySQL hostname */
define( 'DB_HOST', 'remotemysql.com' );

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
define( 'AUTH_KEY',         '=C9tM/zRXI|L+^Fd{#)vf2FJHYK)N]00@hb(zl:G_uH^yXJZ623!?!E&4&5 .)[w' );
define( 'SECURE_AUTH_KEY',  '0,{/i#Srs3 ,&un3bE0diZP24m#|8iz,%(rJzc.`:5mMw<T]+$vP(n0R+G,(n[/X' );
define( 'LOGGED_IN_KEY',    'GMePC;~ZyyxkZ7{vlO4M}iXo/[{3Buc49lbi/8hqc8DbuE:Tk0)jH(zxz|Z:xYH?' );
define( 'NONCE_KEY',        'y?B`p$DjekKc(@$pTzJ99]kPV,5(jF?|579X!M-1{.I_AL$8!`VwuN(vj*%8kjsr' );
define( 'AUTH_SALT',        '|-;)1a*S#(AkMk41:m_# 2eNGDd#geZnOSVBLU`g~|u|.fMWp#ypQA%$)(t&X0or' );
define( 'SECURE_AUTH_SALT', 'f/SCH#7aVR&.d7&([2 ZO4n!zy-<Q~l+t::9*GMUl&bV6B+ZT?1(d$LIL%9MxxV+' );
define( 'LOGGED_IN_SALT',   'nlV^FbpYx~FQ>B43sz2fo2];GuN4j%.B[CM`o,#0Y:]$7~Za& Gqdo;_1vwo%dUG' );
define( 'NONCE_SALT',       'zb!Ty4zD*cg^fTQP/nwKGZYTUpXB*=/=Ha.d:(ZeCC3NL:(B<G5}FDCzzH6I5p!@' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
