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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/storage/ssd3/313/20172313/public_html/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'id20172313_wp_2c89c98bbd94e966f35eaef5401fb79a' );

/** MySQL database username */
define( 'DB_USER', 'id20172313_wp_2c89c98bbd94e966f35eaef5401fb79a' );

/** MySQL database password */
define( 'DB_PASSWORD', '6a7f3ce65fdab491a6e891f95fb0e5330854e517' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '#NTLv*9$<!+|B8[/1O_nikMth1&&VB78XN=-=nov%SdAUd@-+]e ?MB]WTZ@|yfb' );
define( 'SECURE_AUTH_KEY',   '7mBMC 2oH3K<o[^L2?IUKT-$Gk~rrK3!cF0IZogwN3LF^H~d|E06#`(F$nZi_%u[' );
define( 'LOGGED_IN_KEY',     '55_WEMBNzL.YgOuo?!gCCG)MZ(EqkP~dCI W8+3)f`BCD[O2B]?q=Yw>1hNRCXp6' );
define( 'NONCE_KEY',         'VF{#Dx^)QMQ?~58knFz<L:mbG D]$i!<uC1s$J`8ymW3aQs2BGI*Ihs+0pXqW[0F' );
define( 'AUTH_SALT',         'k5XSaNfP{LH>}VAakT0:^5ER D@AM|3WI>BHQJQ7Pc*2MJvk9]w=>^ggby}h)`<5' );
define( 'SECURE_AUTH_SALT',  'g@5<]h{%U%V(*t;s1AwgFFo,%!}mkq/k9FN<ZkmV]{c]+Ik!n[*U|bx&8^Z)*15A' );
define( 'LOGGED_IN_SALT',    'TC)N|bCyl{w;{3l^Oi&p=@C@&NI_n+%)rL(g&ZUkC|@#a!OR]78op/AqC{vI-TUY' );
define( 'NONCE_SALT',        'Bm_RXn *d8`d+&^#EJ_:5K@7rQ]5:N4&53JS0Tc]V*;P?!<c;sQ``ci?O2E]FaKs' );
define( 'WP_CACHE_KEY_SALT', 'S(Ga/28o2R>QJ;w-@6$1&4wl4$]rTeNjMG0Aih`Ml$EW|+Z@=;*g^],I+D_A_n$0' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
