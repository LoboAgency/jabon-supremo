<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'db_supremo');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'adminsupremo');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'PQL@mRa,3I7Q');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', '107.180.2.52');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '%*OyA9cT?:OR_FevCV YC@oxdHhL|VVK?R0tZcHhlzG=7)AnGsgu)Xr(59r[O!Hu');
define('SECURE_AUTH_KEY', 'V{({7Qr&2Mb)YslgwZ6,tCpSB9zn.8v[}9HYWi1*rCMdM-}bw|YC[|yQYV]G,;_@');
define('LOGGED_IN_KEY', 'EYxxq5`eZR}@EhVhZfb}pjIDx|ry!egk;ZSq5/mu!lh2Gdc?( f^VqgIUtE`rsp~');
define('NONCE_KEY', 'i@!y_$!29_iYFN4((ciW=y]z#fD4D)rB]s0R3B!8l&MVYWv9qb-b=gK?f(OA}Y7@');
define('AUTH_SALT', 'Sp#^B]V^Z>nEB^w-:^ih2/>##7FG%v4iSFps2TNuUq6n?u<lL{|Y@S JjJ ECEr-');
define('SECURE_AUTH_SALT', '3f8ix-TZTZi_5w/1lo[tR};xI!LYlAIW9]GN?DA{e&:km[vuoi2x4u}g|cfqGt*o');
define('LOGGED_IN_SALT', 'tST,4N:WNd_=-FaS=n]:~jW2*,jv+MBM-%16<pm(T,+`{qVGB!v_x4n)Y:4/%A%e');
define('NONCE_SALT', '#_?oic-{bZCa4C< (,O;~Wxxl#8+(O%Vgy(~j~B)C&b$BR`kb7qc]bxH3wSFBV_6');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = '_sp_';

define('WP_HOME', 'http://127.0.0.1:8080');
define('WP_SITEURL', 'http://127.0.0.1:8080');
/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

