<?php
/**
 * Custom WordPress configurations on "wp-config.php" file.
 *
 * This file has the following configurations: MySQL settings, Table Prefix, Secret Keys, WordPress Language, ABSPATH and more.
 * For more information visit {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php} Codex page.
 * Created using {@link http://generatewp.com/wp-config/ wp-config.php File Generator} on GenerateWP.com.
 *
 * @package WordPress
 * @generator GenerateWP.com
 */


/* MySQL settings */
define( 'DB_NAME',     'wordpress' );
define( 'DB_USER',     'admin' );
define( 'DB_PASSWORD', 'admin' );
define( 'DB_HOST',     'localhost' );
define( 'DB_CHARSET',  'utf8mb4' );


/* MySQL database table prefix. */
$table_prefix = 'wp_';


/* Authentication Unique Keys and Salts. */
/* https://api.wordpress.org/secret-key/1.1/salt/ */
define('AUTH_KEY',         ',ilT&=$v5<i}l`z4pcm-/Z2E_+[-8{?JV|k XiVE(1fZH/N@ :f/weV/g9e8LN}K');
define('SECURE_AUTH_KEY',  '?*c]XRw!fm<U`hGHtls|?5U[<KD|Yv99*u+(Rl2V[Io4?<{Vh,^Ie-[pSyyt.;m4');
define('LOGGED_IN_KEY',    '0Ap}6Jy8r?o n?LY*D?+qJT#)t_!APdBqB|Rb`QlLugP[f?b.^_ iQn$i>_16<Fk');
define('NONCE_KEY',        'g1*cE;;k7}9>Hv#E7mP//N4qy{+c8Lld2{PxPqDx|0|C31Fp-;m-&w*kDh:xP=+`');
define('AUTH_SALT',        '?j|U#.W]wWG5[,&n(M=Wd1X*[2U=Ho/|I=YXp8g$I-T+fqoKt8-Qu d)T%(CikUX');
define('SECURE_AUTH_SALT', 'Z3BOD+8]b9:_A_SLa wY5&BO5DR$D2@LdqU-W_8P^G;/m(7Q-{L.6:t-q!rq_jc ');
define('LOGGED_IN_SALT',   'X|~,|W?ts`z(IUWGvK7 ::cpo}C1}G!y_Z-Mp]bF0[axG=>+y>kv=lspd7r2$2O(');
define('NONCE_SALT',       'y>_?G`/8cL08{m30aKF n-Q}u`gK3L*/nk0c@q&ZIgS3Z!@}Lg@v9sSO8/#[RrI|');

define('WP_DEBUG', false);

/* Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/* Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');